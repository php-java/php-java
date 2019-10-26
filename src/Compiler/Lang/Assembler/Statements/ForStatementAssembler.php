<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\For_ $node
 */
class ForStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;

    public function assemble(): array
    {
        $operations = [];

        $initialize = ExpressionProcessor::factory()
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore())
            ->execute([$this->node->init]);

        $condition = ExpressionProcessor::factory()
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore())
            ->execute([$this->node->cond]);

        $loop = ExpressionProcessor::factory()
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore())
            ->execute([$this->node->loop]);

        return $operations;
    }
}
