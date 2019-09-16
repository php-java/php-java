<?php
namespace PHPJava\Compiler\Builder\Segments;

class MajorVersion extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort($this->classFileStructureBuilder->getMajorVersion());
    }
}
