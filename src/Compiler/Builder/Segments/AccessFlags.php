<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments;

class AccessFlags extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort(
            $this->classFileStructureBuilder->getAccessFlags()
        );
    }
}
