<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Exceptions\CompilerException;

class SuperClass extends AbstractSegment implements SegmentInterface
{
    public function build(): void
    {
        $entryIndex = $this->classFileStructureBuilder
            ->getSuperClass();

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
