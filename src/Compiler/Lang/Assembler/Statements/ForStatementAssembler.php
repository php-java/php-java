<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Builder\Generator\Operation\ReplaceMarker;
use PHPJava\Compiler\Builder\Types\Int16;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
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

        $initialize = $this->bindRequired(ExpressionProcessor::factory())
            ->execute($this->node->init);

        ArrayTool::concat(
            $operations,
            ...$initialize
        );

        $startOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $conditions = $this->bindRequired(ExpressionProcessor::factory())
            ->execute($this->node->cond);

        $operations[] = ReplaceMarker::create(
            OpCode::_ifeq,
            Int16::class
        );

        var_dump($this->node->stmts);
        exit();
        ArrayTool::concat(
            $operations,
            $conditions
        );

        $conditionOffset = $this->calculateProgramCounterByOperationCodes(
            $operations
        );

        $loops = $this->bindRequired(ExpressionProcessor::factory())
            ->execute($this->node->loop);

        $operations[] = ReplaceMarker::create(
            OpCode::_goto,
            Int16::class
        );

        ArrayTool::concat(
            $opeations,
            $loops
        );

        return $operations;
    }
}
