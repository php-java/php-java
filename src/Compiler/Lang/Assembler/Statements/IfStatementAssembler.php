<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Generator\Operation\ReplaceMarker;
use PHPJava\Compiler\Builder\Types\Int16;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\Calculatable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Castable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\ClassConstractable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Conditionable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\StringConcatable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParentRecurseable;
use PHPJava\Compiler\Lang\Assembler\Traits\StatementParseable;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\If_ $node
 */
class IfStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use ConstantPoolEnhanceable;
    use StringConcatable;
    use MethodCallable;
    use ClassConstractable;
    use OperationManageable;
    use ParentRecurseable;
    use Castable;
    use StatementParseable;
    use LocalVariableAssignable;
    use Calculatable;
    use NumberLoadable;
    use Conditionable;

    /**
     * @throws \PHPJava\Exceptions\AssembleStructureException
     */
    public function assemble(): array
    {
        // proceed if statements
        $operations = ExpressionProcessor::factory()
            ->setStore($this->getStore())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->execute(
                [$this->node->cond]
            );

        // Decide start offset for finding.
        $startOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        array_push(
            $operations,
            ...[
                ReplaceMarker::create(OpCode::_ifeq, Int16::class),
            ]
        );

        $nodes = $this->parseStatement(
            $this->node
                ->stmts
        );
        if (!empty($nodes)) {
            array_push(
                $operations,
                ...$nodes
            );
        }

        // Jump to finish
        array_push(
            $operations,
            ...[
                ReplaceMarker::create(OpCode::_goto, Int16::class),
            ]
        );

        $programCounters = [
            $this->calculateProgramCounterByOperationCodes(
                $operations
            ) - $startOffset,
        ];

        // Proceed elseif statements
        foreach ($this->node->elseifs as $elseif) {
            /**
             * @var \PhpParser\Node\Stmt\ElseIf_ $elseif
             */
            $elseIfStatementOperations = [];

            // Add condition
            array_push(
                $elseIfStatementOperations,
                ...ExpressionProcessor::factory()
                    ->setConstantPool($this->getConstantPool())
                    ->setConstantPoolFinder($this->getConstantPoolFinder())
                    ->setStore($this->getStore())
                    ->execute(
                        [$elseif->cond]
                    )
            );

            // Decide start offset for finding.
            $startOffset = $this->calculateProgramCounterByOperationCodes(
                $elseIfStatementOperations
            );

            array_push(
                $elseIfStatementOperations,
                ...[
                    ReplaceMarker::create(OpCode::_ifeq, Int16::class),
                ],
                ...$this->parseStatement(
                    $elseif
                        ->stmts
                ),
                // Jump to
                ...[
                    ReplaceMarker::create(OpCode::_goto, Int16::class),
                ]
            );

            array_push(
                $operations,
                ...$elseIfStatementOperations
            );

            $programCounters[] = $this->calculateProgramCounterByOperationCodes(
                $elseIfStatementOperations
            ) - $startOffset;
        }

        if (!empty($this->node->else->stmts)) {
            $elseStatementOperations = $this->parseStatement(
                $this->node
                    ->else
                    ->stmts
            );
            array_push(
                $operations,
                ...$elseStatementOperations
            );
        }

        $finallyPosition = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        // Replace markers
        $currentOffset = 0;
        foreach ($operations as &$operation) {
            /**
             * @var Operation|ReplaceMarker $operation
             */
            if (!($operation instanceof ReplaceMarker)) {
                continue;
            }

            $currentOffset = $this->calculateProgramCounterByOperationCodes(
                $operations,
                $operation->getOpCode(),
                $currentOffset
            );

            switch ($operation->getOpCode()) {
                case OpCode::_ifeq:
                    $operation = Operation::create(
                        OpCode::_ifeq,
                        Operand::factory(
                            Int16::class,
                            array_shift($programCounters)
                        )
                    );
                    break;
                case OpCode::_goto:
                    $operation = Operation::create(
                        OpCode::_goto,
                        Operand::factory(
                            Int16::class,
                            $finallyPosition - $currentOffset
                        )
                    );
                    break;
            }
        }

        return $operations;
    }
}
