<?php
namespace PHPJava\Compiler\Builder\Segments;

class MagicByte extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedInt(
            \PHPJava\Core\JVM\Validations\MagicByte::getMagicByte()
        );
    }
}
