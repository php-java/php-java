<?php
namespace PHPJava\Compiler\Builder\Types;

class Uint64 implements TypeInterface
{
    public static function sizeOf()
    {
        return 8;
    }
}
