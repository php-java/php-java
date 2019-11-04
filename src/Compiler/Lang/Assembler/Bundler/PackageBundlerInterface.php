<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Lang\Assembler\Bundler\Packages\AbstractPackageBundler;

/**
 * @method AbstractPackageBundler setConstantPool(ConstantPool $constantPool)
 * @method ConstantPool getConstantPool()
 */
interface PackageBundlerInterface
{
    public static function factory(): PackageBundlerInterface;

    public function getDefinedMethods(): array;

    public function getDefinedConstants(): array;
}
