<?php
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Exceptions\CompilerException;

class ThisClass extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $entryIndex = $this->classFileStructureBuilder
            ->getThisClass();

        $ref = $this->classFileStructureBuilder->getConstantPool()[$entryIndex];

        if (!($ref instanceof ClassInfo)) {
            throw new CompilerException(
                'The entry is not implemented by ClassInfo. (Index: ' . $entryIndex . ', Segment: ' . __CLASS__ . ')'
            );
        }

        $this->binaryWriter->writeUnsignedShort(
            $entryIndex
        );
    }
}
