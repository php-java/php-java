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
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Utilities\ArrayTool;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\For_ $node
 */
class ForStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;
    use Bindable;
    use Calculatable;

    public function assemble(): array
    {
        $operations = [];

        $startOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $initialize = $this->bindParameters(ExpressionProcessor::factory())
            ->execute($this->node->init);

        ArrayTool::concat(
            $operations,
            ...$initialize
        );

        $startConditionsOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $conditions = $this->bindParameters(ExpressionProcessor::factory())
            ->execute($this->node->cond);

        ArrayTool::concat(
            $operations,
            ...$conditions,
            ...[
                ReplaceMarker::create(
                    OpCode::_ifeq,
                    Int16::class
                ),
            ],
            ...$this->bindParameters(StatementProcessor::factory())
                ->execute($this->node->stmts)
        );

        $endConditionsOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $loops = $this->bindParameters(ExpressionProcessor::factory())
            ->execute($this->node->loop);

        ArrayTool::concat(
            $operations,
            ...$loops
        );

        $finallyOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        ) - $startOffset - $startConditionsOffset;

        ArrayTool::concat(
            $operations,
            ...[
                ReplaceMarker::create(
                    OpCode::_goto,
                    Int16::class
                ),
            ]
        );

        $nextStatementOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $currentOffset = 0;
        // Replace with offset ReplaceMarker
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
                            $nextStatementOffset - $currentOffset
                        )
                    );
                    break;
                case OpCode::_goto:
                    $operation = Operation::create(
                        OpCode::_goto,
                        Operand::factory(
                            Int16::class,
                            // Loop back
                            -$finallyOffset
                        )
                    );
                    break;
            }
        }

        return $operations;
    }
}
