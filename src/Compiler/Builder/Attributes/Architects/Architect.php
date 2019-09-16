<?php
namespace PHPJava\Compiler\Builder\Attributes\Architects;

class Architect implements ArchitectInterface
{
    public static function init()
    {
        return new static();
    }
}
