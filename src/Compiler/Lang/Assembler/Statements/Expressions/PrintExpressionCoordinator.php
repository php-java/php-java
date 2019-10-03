<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Expressions;

use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Expr\Print_ $node
 */
class PrintExpressionCoordinator extends EchoStatementAssembler
{
    public function assemble(): void
    {
        parent::coordinate();

        // Returns 1 by the PHP feature.
        $this->getOperation()->add(OpCode::_iconst_1);
    }
}
