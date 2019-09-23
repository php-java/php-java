<?php
namespace PHPJava\Compiler\Builder\Segments\Attributes;

use PHPJava\Core\JVM\Stream\BinaryWriter;

abstract class AbstractAttribute implements AttributeSegmentInterface
{
    protected $attributes = [];
    protected $constantPool = [];
    protected $binaryWriter;

    protected function __construct(
        array $attributes,
        array $constantPool,
        BinaryWriter $binaryWriter
    ) {
        $this->attributes = $attributes;
        $this->constantPool = $constantPool;
        $this->binaryWriter = $binaryWriter;
    }

    public static function init(
        array $attributes,
        array $constantPool,
        BinaryWriter $binaryWriter
    ) {
        return new static($attributes, $constantPool, $binaryWriter);
    }
}
