<?php
namespace PHPJava\Compiler\Builder\Types;

class Uint16 implements TypeInterface
{
    public static function sizeOf()
    {
        return 2;
    }
}
