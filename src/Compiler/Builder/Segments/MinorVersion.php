<?php
namespace PHPJava\Compiler\Builder\Segments;

class MinorVersion extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort($this->classFileStructureBuilder->getMinorVersion());
    }
}
