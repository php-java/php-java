<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PhpParser\Node;

/**
 * <Only for use from `OperationManageable` trait>.
 * @method Operation getOperation()
 * @method AssemblerInterface setOperation(Operation $operation)
 * @method AssemblerInterface setStore(Store $store)
 * @method Store getStore()
 */
interface AssemblerInterface
{
    public function __construct(Node $parser);

    public static function factory(Node $node): AssemblerInterface;

    /**
     * Must to set array or void.
     *
     * @return array|void
     */
    public function assemble();

    public function setParentCoordinator(AssemblerInterface $parentCoordinator): AssemblerInterface;

    public function getConstantPoolFinder(): ConstantPoolFinder;

    public function getConstantPool(): ConstantPool;

    public function setStreamReader(StreamReaderInterface $stream): AssemblerInterface;

    public function getStreamReader(): StreamReaderInterface;

    public function setNamespace(?array $namespace): AssemblerInterface;

    public function getNamespace(): ?array;
}
