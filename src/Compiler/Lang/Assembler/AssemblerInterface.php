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
 */
interface AssemblerInterface
{
    public function __construct(Node $parser);

    public static function factory(Node $node): AssemblerInterface;

    public function assemble(): void;

    public function setParentCoordinator(AssemblerInterface $parentCoordinator): AssemblerInterface;

    public function getConstantPoolFinder(): ConstantPoolFinder;

    public function getConstantPool(): ConstantPool;

    public function setStreamReader(StreamReaderInterface $stream): AssemblerInterface;

    public function getStreamReader(): StreamReaderInterface;

    public function setStore(Store $store): AssemblerInterface;

    public function getStore(): Store;

    public function setNamespace(?array $namespace): AssemblerInterface;

    public function getNamespace(): ?array;
}
