<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes\Architects;

class Architect implements ArchitectInterface
{
    public static function init()
    {
        return new static();
    }
}
