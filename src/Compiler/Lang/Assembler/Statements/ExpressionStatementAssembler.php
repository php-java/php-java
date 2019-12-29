<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\Expression $node
 */
class ExpressionStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;
    use Bindable;

    public function assemble(): array
    {
        return $this->bindParameters(ExpressionProcessor::factory())
            ->execute([$this->node->expr]);
    }
}
