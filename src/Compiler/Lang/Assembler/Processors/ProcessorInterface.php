<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPool getConstantPool()
 * @method ProcessorInterface setConstantPool(ConstantPool $constantPool)
 * @method ProcessorInterface setConstantPoolFinder(ConstantPoolFinder $constantPoolFinder)
 * @method StreamReaderInterface getStreamReader()
 * @method ProcessorInterface setStore(Store $store)
 * @method Store getStore()
 * @method AssemblerInterface bindRequired(AssemblerInterface $assembler)
 * @method AbstractProcessor setNamespace(?array $namespace)
 * @method AbstractProcessor setOperation(Operation $operation)
 */
interface ProcessorInterface
{
    public static function factory(): ProcessorInterface;

    public function execute(array $expressions, ?callable $callback = null): array;
}
