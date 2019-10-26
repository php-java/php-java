<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\Expression $node
 */
class ExpressionStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;

    public function assemble(): array
    {
        return ExpressionProcessor::factory()
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore())
            ->execute([$this->node->expr]);
    }
}
