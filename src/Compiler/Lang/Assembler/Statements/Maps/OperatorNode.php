<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements\Maps;

use PHPJava\Kernel\Maps\OpCode;

class OperatorNode
{
    private const OPERATORS_MAP = [
        \PhpParser\Node\Expr\BinaryOp\BooleanAnd::class => [OpCode::_iand],
        \PhpParser\Node\Expr\BinaryOp\BooleanOr::class => [OpCode::_ior],
        \PhpParser\Node\Expr\BinaryOp\Plus::class => [OpCode::_iadd],
        \PhpParser\Node\Expr\BinaryOp\Minus::class => [OpCode::_isub],
        \PhpParser\Node\Expr\BinaryOp\Div::class => [OpCode::_idiv],
        \PhpParser\Node\Expr\BinaryOp\Mul::class => [OpCode::_imul],
        \PhpParser\Node\Expr\BinaryOp\Mod::class => [OpCode::_irem],
    ];

    public static function resolve(string $class): ?int
    {
        return static::OPERATORS_MAP[$class] ?? null;
    }
}
