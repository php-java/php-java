<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Segments\Attributes;

use PHPJava\Core\JVM\Stream\BinaryWriter;

interface AttributeSegmentInterface
{
    public static function init(
        array $attributes,
        array $constantPool,
        BinaryWriter $binaryWriter
    );

    public function build(): void;
}
