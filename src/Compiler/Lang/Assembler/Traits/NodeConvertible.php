<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PhpParser\Node;

trait NodeConvertible
{
    public function convertNodeToOpCode(Node $node): int
    {
        switch (get_class($node)) {
            case \PhpParser\Node\Expr\BinaryOp\Mul::class:
                return OpCode::_imul;
            case \PhpParser\Node\Expr\BinaryOp\Div::class:
                return OpCode::_idiv;
            case \PhpParser\Node\Expr\BinaryOp\Minus::class:
                return OpCode::_isub;
            case \PhpParser\Node\Expr\BinaryOp\Plus::class:
                return OpCode::_iadd;
            case \PhpParser\Node\Expr\BinaryOp\Mod::class:
                return OpCode::_irem;
            case \PhpParser\Node\Expr\BinaryOp\BooleanAnd::class:
                return OpCode::_iand;
            case \PhpParser\Node\Expr\BinaryOp\BooleanOr::class:
                return OpCode::_ior;
            case \PhpParser\Node\Expr\BinaryOp\Greater::class:
                return OpCode::_ifle;
            case \PhpParser\Node\Expr\BinaryOp\Smaller::class:
                return OpCode::_ifge;
            case \PhpParser\Node\Expr\BinaryOp\GreaterOrEqual::class:
                return OpCode::_iflt;
            case \PhpParser\Node\Expr\BinaryOp\SmallerOrEqual::class:
                return OpCode::_ifgt;
            case \PhpParser\Node\Expr\BinaryOp\Identical::class:
                return OpCode::_ifne;
            case \PhpParser\Node\Expr\BinaryOp\NotIdentical::class:
                return OpCode::_ifeq;
        }
        throw new AssembleStructureException(
            'Cannot convert node to opcode: ' . get_class($node)
        );
    }
}
