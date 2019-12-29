<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Types;

class Int32 implements TypeInterface
{
    public static function sizeOf()
    {
        return 4;
    }
}
