<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NamespaceManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
abstract class AbstractProcessor implements ProcessorInterface
{
    use ConstantPoolManageable;
    use ConstantPoolEnhanceable;
    use StoreManageable;
    use NamespaceManageable;
    use Bindable;

    public static function factory(): ProcessorInterface
    {
        static $instance;
        return $instance = $instance ?? new static();
    }

    abstract public function execute(array $expressions, ?callable $callback = null): array;
}
