<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Structure\Accessor\StructureAccessorsLocator;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait StructureAccessorsLocatorManageable
{
    /**
     * @var StructureAccessorsLocator
     */
    protected $structureAccessorsLocator;

    public function setStructureAccessorsLocator(StructureAccessorsLocator $structureAccessorsLocator): self
    {
        $this->structureAccessorsLocator = $structureAccessorsLocator;
        return $this;
    }

    public function getStructureAccessorsLocator(): StructureAccessorsLocator
    {
        return $this->structureAccessorsLocator;
    }
}
