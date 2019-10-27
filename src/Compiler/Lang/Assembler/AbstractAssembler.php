<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Traits\CollectionManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NamespaceManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PhpParser\Node;

abstract class AbstractAssembler implements AssemblerInterface, ParameterServiceInterface
{
    use ConstantPoolManageable;
    use StoreManageable;
    use NamespaceManageable;
    use CollectionManageable;

    /**
     * @var Node
     */
    protected $node;

    /**
     * @var StreamReaderInterface
     */
    protected $streamReader;

    /**
     * @var Store
     */
    protected $store;

    /**
     * @var Method
     */
    protected $method;

    public static function factory(Node $node): self
    {
        return new static($node);
    }

    public function __construct(Node $node)
    {
        $this->node = $node;
    }

    abstract public function assemble();

    public function setStreamReader(StreamReaderInterface $streamReader): AssemblerInterface
    {
        $this->streamReader = $streamReader;
        return $this;
    }

    public function getStreamReader(): StreamReaderInterface
    {
        return $this->streamReader;
    }
}
