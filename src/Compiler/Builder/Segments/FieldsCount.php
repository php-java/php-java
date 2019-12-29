<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments;

class FieldsCount extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort(count($this->classFileStructureBuilder->getFields()));
    }
}
