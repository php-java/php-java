<?php
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Field;

class Fields extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        foreach ($this->classFileStructureBuilder->getFields() as $field) {
            /**
             * @var Field $field
             */
            $this->binaryWriter->writeUnsignedShort($field->getAccessFlags());
            $this->binaryWriter->writeUnsignedShort($field->getNameIndex());
            $this->binaryWriter->writeUnsignedShort($field->getDescriptorIndex());

            // attributes_count
            $this->binaryWriter->writeUnsignedShort(0);
        }
    }
}
