<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\AssembleStructureException;
use PhpParser\Node;

abstract class AbstractAssembler implements AssemblerInterface
{
    use StoreManageable;

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
    protected $parentAssembler;

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

    abstract public function assemble();

    public function setNamespace(?array $namespace): AssemblerInterface
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function getNamespace(): ?array
    {
        return $this->namespace;
    }

    public function setParentAssembler(AssemblerInterface $parentAssembler): AssemblerInterface
    {
        $this->parentAssembler = $parentAssembler;
        $this->constantPool = $this->parentAssembler->getConstantPool();
        $this->constantPoolFinder = $this->parentAssembler->getConstantPoolFinder();
        return $this;
    }

    public function getParentAssembler(): ?AssemblerInterface
    {
        return $this->parentAssembler;
    }

    public function getConstantPool(): ConstantPool
    {
        if (!isset($this->constantPool)) {
            throw new AssembleStructureException(
                'The ConstantPool is not set. ' .
                'You must to set the ConstantPool.'
            );
        }
        return $this->constantPool;
    }

    public function getConstantPoolFinder(): ConstantPoolFinder
    {
        if (!isset($this->constantPoolFinder)) {
            throw new AssembleStructureException(
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

    protected function bindRequired(AssemblerInterface $assembler): AssemblerInterface
    {
        return $assembler
            ->setStore($this->getStore())
            ->setOperation($this->getOperation())
            ->setParentAssembler($this)
            ->setNamespace($this->getNamespace());
    }
}
