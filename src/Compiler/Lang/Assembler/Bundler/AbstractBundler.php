<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

abstract class AbstractBundler
{
    use ConstantPoolManageable;

    /**
     * @var ConstantPool
     */
    protected $constantPool;

    /**
     * @var ConstantPoolFinder
     */
    protected $constantPoolFinder;

    /**
     * @var Methods
     */
    protected $methods;

    /**
     * @var Fields
     */
    protected $fields;

    /**
     * @var StreamReaderInterface
     */
    protected $streamReader;

    public static function factory(): self
    {
        return new static();
    }

    abstract public function assemble(): void;

    public function setStreamReader(StreamReaderInterface $streamReader): self
    {
        $this->streamReader = $streamReader;
        return $this;
    }

    public function getStreamReader(): StreamReaderInterface
    {
        return $this->streamReader;
    }
}
