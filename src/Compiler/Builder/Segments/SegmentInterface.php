<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments;

use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Core\JVM\Stream\BinaryWriter;

interface SegmentInterface
{
    public static function init(ClassFileStructure $classFileStructureBuilder, BinaryWriter $binaryWriter);

    public function build(): void;
}
