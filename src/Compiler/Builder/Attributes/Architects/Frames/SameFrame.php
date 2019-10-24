<?php
namespace PHPJava\Compiler\Builder\Attributes\Architects\Frames;

use PHPJava\Compiler\Builder\Attributes\Architects\ArchitectInterface;
use PHPJava\Exceptions\AssembleStructureException;

class SameFrame extends FullFrame implements ArchitectInterface
{
    const MIN = 0;
    const MAX = 63;

    public function getTag(): int
    {
        if ($this->offsetDelta < static::MIN || $this->offsetDelta > static::MAX) {
            throw new AssembleStructureException(
                'Offset delta in SameFrame is invalid.'
            );
        }
        return $this->offsetDelta;
    }
}
