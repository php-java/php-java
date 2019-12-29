<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments\Attributes;

class AttributesCount extends AbstractAttribute implements AttributeSegmentInterface
{
    public function build(): void
    {
        $this->binaryWriter->writeUnsignedShort(count($this->attributes));
    }
}
