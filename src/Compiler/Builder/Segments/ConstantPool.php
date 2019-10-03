<?php
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Structures\Info\AbstractInfo;
use PHPJava\Compiler\Builder\Types\Bytes;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint32;
use PHPJava\Compiler\Builder\Types\Uint64;
use PHPJava\Exceptions\CompilerException;

class ConstantPool extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $readStructures = [];
        // Write constant_pool
        foreach ($this->classFileStructureBuilder->getConstantPool() as $index => $entry) {
            /**
             * @var AbstractInfo $entry
             */
            // Skip constant pool entry at the first index.
            if ($index === 0) {
                continue;
            }

            /**
             * @var AbstractInfo $entry
             */
            $this->binaryWriter->writeUnsignedByte($entry->getTag());
            foreach ($entry->getStructureEntries() as [$type, $structureEntry]) {
                switch ($type) {
                    case Uint16::class:
                        $this->binaryWriter->writeUnsignedShort($structureEntry);
                        break;
                    case Uint32::class:
                        $this->binaryWriter->writeUnsignedInt($structureEntry);
                        break;
                    case Uint64::class:
                        $this->binaryWriter->writeUnsignedLong($structureEntry);
                        break;
                    case Bytes::class:
                        $this->binaryWriter->write($structureEntry);
                        break;
                    default:
                        throw new CompilerException('Unsupported type: ' . $type);
                }
            }
        }
    }
}
