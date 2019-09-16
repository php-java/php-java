<?php
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Core\JVM\Stream\BinaryWriter;

abstract class AbstractSegment implements SegmentInterface
{
    /**
     * @var ClassFileStructure
     */
    protected $classFileStructureBuilder;

    /**
     * @var BinaryWriter
     */
    protected $binaryWriter;

    protected function __construct(ClassFileStructure $classFileStructureBuilder, BinaryWriter $binaryWriter)
    {
        $this->classFileStructureBuilder = $classFileStructureBuilder;
        $this->binaryWriter = $binaryWriter;
    }

    public static function init(ClassFileStructure $classFileStructureBuilder, BinaryWriter $binaryWriter)
    {
        return new static($classFileStructureBuilder, $binaryWriter);
    }
}
