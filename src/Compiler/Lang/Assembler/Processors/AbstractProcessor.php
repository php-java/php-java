<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\ParameterServiceInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\ClassAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NamespaceManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\EntryPointClassAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\MethodAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StreamManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StructureAccessorsLocatorManageable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
abstract class AbstractProcessor implements ProcessorInterface, ParameterServiceInterface
{
    use ConstantPoolManageable;
    use ConstantPoolEnhanceable;
    use StoreManageable;
    use NamespaceManageable;
    use Bindable;
    use StreamManageable;
    use MethodAssemblerManageable;
    use ClassAssemblerManageable;
    use EntryPointClassAssemblerManageable;
    use StructureAccessorsLocatorManageable;

    public static function factory(): self
    {
        return new static();
    }

    public function execute(array $nodes, ?callable $callback = null): array
    {
        // Set entrypoint dependencies.
        $this->constantPool = $this->constantPool ?? $this
            ->getEntryPointClassAssembler()
            ->getConstantPool();

        $this->constantPoolFinder = $this->constantPoolFinder ?? $this
            ->getEntryPointClassAssembler()
            ->getConstantPoolFinder();

        $this->operation = $this->operation ?? $this
            ->getEntryPointClassAssembler()
            ->getOperation();

        $this->store = $this->store ?? $this
            ->getEntryPointClassAssembler()
            ->getStore();

        // Return an empty array
        return [];
    }
}
