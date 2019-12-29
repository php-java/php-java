<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Types;

class Int64 implements TypeInterface
{
    public static function sizeOf()
    {
        return 8;
    }
}
