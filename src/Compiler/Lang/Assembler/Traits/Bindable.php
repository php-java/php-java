<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Processors\AbstractProcessor;
use PHPJava\Compiler\Lang\Assembler\Processors\ProcessorInterface;
use PHPJava\Compiler\Lang\Assembler\Store\Store;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait Bindable
{
    /**
     * @param AbstractProcessor|ProcessorInterface $processor
     * @return AbstractProcessor|ProcessorInterface
     */
    protected function bindRequired(AbstractProcessor $processor): AbstractProcessor
    {
        return $processor
            ->setNamespace($this->getNamespace())
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->setOperation($this->getOperation())
            ->setStore($this->getStore());
    }
}
