<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Structure\Accessor\Imports;
use PHPJava\Exceptions\NotFoundImportException;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait ImportManageable
{
    /**
     * @var Imports
     */
    protected $importsAccessor;

    public function setImportsAccessor(?Imports $importsAccessor): self
    {
        $this->importsAccessor = $importsAccessor;
        return $this;
    }

    public function getImportsAccessor(): ?Imports
    {
        return $this->importsAccessor;
    }

    public function convertWithImport(string $omittedImportPath): string
    {
        try {
            return $this
                ->getImportsAccessor()
                ->resolvePath(
                    $omittedImportPath
                );
        } catch (NotFoundImportException $e) {
            return ltrim($omittedImportPath, '\\');
        }
    }
}
