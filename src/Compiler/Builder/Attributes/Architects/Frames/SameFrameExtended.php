<?php
namespace PHPJava\Compiler\Builder\Attributes\Architects\Frames;

use PHPJava\Compiler\Builder\Attributes\Architects\ArchitectInterface;

class SameFrameExtended extends FullFrame implements ArchitectInterface
{
    public function getTag(): int
    {
        return 251;
    }
}
