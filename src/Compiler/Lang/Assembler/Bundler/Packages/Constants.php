<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler\Packages;

use PHPJava\Compiler\Lang\Assembler\Bundler\PackageBundlerInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodConstantValueReturnable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberStorable;

class Constants extends AbstractPackageBundler implements PackageBundlerInterface
{
    use ConstantPoolEnhanceable;
    use MethodConstantValueReturnable;
    use NumberStorable;

    public function getPHPVersion(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_VERSION
        );
    }

    public function getPHPMajorVersion(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_MAJOR_VERSION
        );
    }

    public function getPHPMinorVersion(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_MINOR_VERSION
        );
    }

    public function getPHPReleaseVersion(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_RELEASE_VERSION
        );
    }

    public function getPHPVersionID(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_VERSION_ID
        );
    }

    public function getPHPExtraVersion(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_EXTRA_VERSION
        );
    }

    public function getPHPEOL(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            PHP_EOL
        );
    }

    public function getPHPIntMax(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            (string) PHP_INT_MAX
        );
    }

    public function getPHPIntMin(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            (string) PHP_INT_MIN
        );
    }

    public function getPHPFloatEpsilon(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            (string) PHP_FLOAT_EPSILON
        );
    }

    public function getPHPFloatMin(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            (string) PHP_FLOAT_MIN
        );
    }

    public function getPHPFloatMax(): array
    {
        return $this->assembleSimpleMethodConstantValueReturn(
            (string) PHP_FLOAT_MAX
        );
    }
}
