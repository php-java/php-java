<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Expr\Print_ $node
 */
class PrintExpressionAssembler extends EchoStatementAssembler
{
    public function assemble(): void
    {
        $operations = parent::coordinate();

        // Returns 1 by the PHP feature.
        $operations[] = Operation::create(OpCode::_iconst_1);

        return $operations;
    }
}
