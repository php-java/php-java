<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Structure\Accessor\Declares;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait DeclareManageable
{
    /**
     * @var Declares
     */
    protected $declaresAccessor;

    public function setDeclaresAccessor(?Declares $declaresAccessor): self
    {
        $this->declaresAccessor = $declaresAccessor;
        return $this;
    }

    public function getDeclaresAccessor(): ?Declares
    {
        return $this->declaresAccessor;
    }
}
