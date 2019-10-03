<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\CoordinateStructureException;

abstract class AbstractBundler
{
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

    public function getConstantPool(): ConstantPool
    {
        if (!isset($this->constantPool)) {
            throw new CoordinateStructureException(
                'The ConstantPool is not set. ' .
                'You must to set the ConstantPool.'
            );
        }
        return $this->constantPool;
    }

    public function getConstantPoolFinder(): ConstantPoolFinder
    {
        if (!isset($this->constantPool)) {
            throw new CoordinateStructureException(
                'The ConstantPoolFinder is not set. ' .
                'You must to set the ConstantPoolFinder.'
            );
        }
        return $this->constantPoolFinder;
    }
}
