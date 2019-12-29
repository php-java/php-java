<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes\Architects\Frames;

use PHPJava\Compiler\Builder\Attributes\Architects\ArchitectInterface;

class FullFrame extends Frame implements ArchitectInterface
{
    public function getTag(): int
    {
        return 255;
    }
}
