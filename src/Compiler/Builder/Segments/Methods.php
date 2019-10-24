<?php
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Segments\Attributes\Attributes;
use PHPJava\Compiler\Builder\Segments\Attributes\AttributesCount;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\CompilerException;

class Methods extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        foreach ($this->classFileStructureBuilder->getMethods() as $method) {
            /**
             * @var Method $method
             */
            $name = $this->classFileStructureBuilder->getConstantPool()[$method->getNameIndex()];
            $descriptor = $this->classFileStructureBuilder->getConstantPool()[$method->getDescriptorIndex()];

            if (!($name instanceof Utf8Info)) {
                throw new CompilerException(
                    'The method entry is not implemented by Utf8Info. (index: ' . $method->getNameIndex() . ', Segment: ' . __CLASS__ . ')'
                );
            }

            if (!($descriptor instanceof Utf8Info)) {
                throw new CompilerException(
                    'The method entry is not implemented by Utf8Info. (index: ' . $method->getDescriptorIndex() . ', Segment: ' . __CLASS__ . ')'
                );
            }

            $this->binaryWriter->writeUnsignedShort($method->getAccessFlags());
            $this->binaryWriter->writeUnsignedShort($method->getNameIndex());
            $this->binaryWriter->writeUnsignedShort($method->getDescriptorIndex());

            // Build attributes_count
            AttributesCount::init(
                $method->getAttributes(),
                $this->classFileStructureBuilder->getConstantPool(),
                $this->binaryWriter
            )->build();

            if (count($method->getAttributes()) === 0) {
                continue;
            }

            // Build attributes
            Attributes::init(
                $method->getAttributes(),
                $this->classFileStructureBuilder->getConstantPool(),
                $this->binaryWriter
            )->build();
        }
    }
}
