<?php
namespace PHPJava\Compiler\Builder\Segments;

class ConstantPoolCount extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort(
            count($this->classFileStructureBuilder->getConstantPool())
        );
    }
}
