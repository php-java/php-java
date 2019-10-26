<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\For_ $node
 */
class ForStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;
    use Bindable;

    public function assemble(): array
    {
        $operations = [];

        $initialize = $this->bindRequired(ExpressionProcessor::factory())
            ->execute([$this->node->init]);

        $condition = $this->bindRequired(ExpressionProcessor::factory())
            ->execute([$this->node->cond]);

        $loop = $this->bindRequired(ExpressionProcessor::factory())
            ->execute([$this->node->loop]);

        return $operations;
    }
}
