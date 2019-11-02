<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait StreamManageable
{
    /**
     * @var StreamReaderInterface
     */
    protected $streamReader;

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
