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
use PHPJava\Compiler\Lang\Assembler\Processors\StatementProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
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
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Utilities\ArrayTool;

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
    use Castable;
    use LocalVariableAssignable;
    use Calculatable;
    use NumberLoadable;
    use Conditionable;
    use Bindable;

    /**
     * @throws \PHPJava\Exceptions\AssembleStructureException
     */
    public function assemble(): array
    {
        // proceed if statements
        $operations = $this->bindParameters(ExpressionProcessor::factory())
            ->execute(
                [$this->node->cond]
            );

        // Decide start offset for finding.
        $startOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        ArrayTool::concat(
            $operations,
            ...[
                ReplaceMarker::create(OpCode::_ifeq, Int16::class),
            ]
        );

        ArrayTool::concat(
            $operations,
            ...$this->bindParameters(StatementProcessor::factory())
                ->execute($this->node->stmts)
        );

        // Jump to finish
        ArrayTool::concat(
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
            ArrayTool::concat(
                $elseIfStatementOperations,
                ...$this->bindParameters(ExpressionProcessor::factory())
                    ->execute(
                        [$elseif->cond]
                    )
            );

            // Decide start offset for finding.
            $startOffset = $this->calculateProgramCounterByOperationCodes(
                $elseIfStatementOperations
            );

            ArrayTool::concat(
                $elseIfStatementOperations,
                ...[
                    ReplaceMarker::create(OpCode::_ifeq, Int16::class),
                ],
                ...$this->bindParameters(StatementProcessor::factory())
                    ->execute($elseif->stmts),
                // Jump to
                ...[
                    ReplaceMarker::create(OpCode::_goto, Int16::class),
                ]
            );

            ArrayTool::concat(
                $operations,
                ...$elseIfStatementOperations
            );

            $programCounters[] = $this->calculateProgramCounterByOperationCodes(
                $elseIfStatementOperations
            ) - $startOffset;
        }

        if (isset($this->node->else->stmts)) {
            ArrayTool::concat(
                $operations,
                ...$this->bindParameters(StatementProcessor::factory())
                    ->execute($this->node->else->stmts)
            );
        }

        $finallyPosition = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        // Replace markers
        $currentOffset = 0;
        foreach ($operations as &$operation) {
            $currentOffset = $this->calculateProgramCounterByOperationCodes(
                $operations,
                $operation->getOpCode(),
                $currentOffset
            );

            /**
             * @var Operation|ReplaceMarker $operation
             */
            if (!($operation instanceof ReplaceMarker)) {
                continue;
            }

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
