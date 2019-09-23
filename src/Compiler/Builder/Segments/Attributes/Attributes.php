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

            // Write attribute_length
            $this->binaryWriter->writeUnsignedInt(strlen($attribute->getValue()));

            // Write attribute
            $this->binaryWriter->write($attribute->getValue());

            if (!$attribute->hasAttribute()) {
                continue;
            }

            // Write attributes_count
            AttributesCount::init($attribute->getAttributes(), $this->constantPool, $this->binaryWriter);

            // Write attributes
            Attributes::init($attribute->getAttributes(), $this->constantPool, $this->binaryWriter);
        }
    }
}
