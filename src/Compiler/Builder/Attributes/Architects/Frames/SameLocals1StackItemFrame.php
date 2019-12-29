<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes\Architects\Frames;

use PHPJava\Compiler\Builder\Attributes\Architects\ArchitectInterface;
use PHPJava\Exceptions\AssembleStructureException;

class SameLocals1StackItemFrame extends FullFrame implements ArchitectInterface
{
    const MIN = 64;
    const MAX = 127;

    public function getTag(): int
    {
        if ((64 + $this->offsetDelta) < static::MIN || (64 + $this->offsetDelta) > static::MAX) {
            throw new AssembleStructureException(
                'Offset delta in SameLocals1StackItemFrame is invalid.'
            );
        }
        return 64 + $this->offsetDelta;
    }
}
