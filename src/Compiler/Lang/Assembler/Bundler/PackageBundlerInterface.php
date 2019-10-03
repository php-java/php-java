<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler;

interface PackageBundlerInterface
{
    public static function factory(AbstractBundler $bundler): PackageBundlerInterface;

    public function getDefinedMethods(): array;

    public function getBundler(): AbstractBundler;
}
