<?php
namespace PHPJava\Compiler\Builder\Segments\Attributes;

use PHPJava\Compiler\Builder\Attribute;

class Attributes extends AbstractAttribute implements AttributeSegmentInterface
{
    public function build(): void
    {
        foreach ($this->attributes as $attribute) {
            /**
             * @var Attribute $attribute
             */
            // Write attribute_name_index
            $this->binaryWriter->writeUnsignedShort($attribute->getConstantPoolIndex());

            $value = $attribute->getValue();

            // Write attribute_length
            $this->binaryWriter->writeUnsignedInt(strlen($value));

            // Write attribute
            $this->binaryWriter->write($value);
        }
    }
}
