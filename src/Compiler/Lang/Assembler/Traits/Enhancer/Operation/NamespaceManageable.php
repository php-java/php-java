<?php
declare(strict_types=1);

namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait NamespaceManageable
{
    protected $namespace;

    public function setNamespace(?array $namespace): self
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function getNamespace(): ?array
    {
        return $this->namespace;
    }
}
