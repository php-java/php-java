<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Types;

class Uint8 implements TypeInterface
{
    public static function sizeOf()
    {
        return 1;
    }
}
