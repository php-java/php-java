<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\CoordinateStructureException;
use PhpParser\Node;

abstract class AbstractAssembler implements AssemblerInterface
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
     * @var Node
     */
    protected $node;

    /**
     * @var AssemblerInterface
     */
    protected $parentCoordinator;

    /**
     * @var StreamReaderInterface
     */
    protected $streamReader;

    protected $namespace;

    /**
     * @var Store
     */
    protected $store;

    public static function factory(Node $node): AssemblerInterface
    {
        return new static($node);
    }

    public function __construct(Node $node)
    {
        $this->node = $node;
    }

    abstract public function assemble(): void;

    public function setNamespace(?array $namespace): AssemblerInterface
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function getNamespace(): ?array
    {
        return $this->namespace;
    }

    public function setParentCoordinator(AssemblerInterface $parentCoordinator): AssemblerInterface
    {
        $this->parentCoordinator = $parentCoordinator;
        $this->constantPool = $this->parentCoordinator->getConstantPool();
        $this->constantPoolFinder = $this->parentCoordinator->getConstantPoolFinder();
        return $this;
    }

    public function getParentCoordinator(): ?AssemblerInterface
    {
        return $this->parentCoordinator;
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

    public function setStreamReader(StreamReaderInterface $streamReader): AssemblerInterface
    {
        $this->streamReader = $streamReader;
        return $this;
    }

    public function getStreamReader(): StreamReaderInterface
    {
        return $this->streamReader;
    }

    public function setStore(Store $store): AssemblerInterface
    {
        $this->store = $store;
        return $this;
    }

    public function getStore(): Store
    {
        return $this->store;
    }
}
