<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\EntryPointClassAssembler;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait EntryPointClassAssemblerManageable
{
    /**
     * @var EntryPointClassAssembler
     */
    protected $entryPointClassAssembler;

    public function setEntryPointClassAssembler(?EntryPointClassAssembler $entryPointClassAssembler): self
    {
        $this->entryPointClassAssembler = $entryPointClassAssembler;
        return $this;
    }

    public function getEntryPointClassAssembler(): ?EntryPointClassAssembler
    {
        return $this->entryPointClassAssembler;
    }
}
