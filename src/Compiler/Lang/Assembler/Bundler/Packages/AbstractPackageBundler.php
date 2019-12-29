<?php
declare(strict_types=1);

namespace PHPJava\Compiler\Lang\Assembler\Bundler\Packages;

use PHPJava\Compiler\Lang\Assembler\Bundler\PackageBundlerInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;

abstract class AbstractPackageBundler implements PackageBundlerInterface
{
    use ConstantPoolManageable;

    public static function factory(): PackageBundlerInterface
    {
        return new static();
    }

    public function getDefinedConstants(): array
    {
        $constants = [];
        $reflectionClass = new \ReflectionClass($this);
        foreach ($reflectionClass->getConstants() as $name => $value) {
            $constantInfo = new \ReflectionClassConstant($this, $name);
            try {
                if ($phpDocument = $constantInfo->getDocComment()) {
                    $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
                        ->create($phpDocument);

                    // Need @export flag.
                    if (!$documentBlock->hasTag('export') || !$documentBlock->hasTag('var')) {
                        continue;
                    }

                    /**
                     * @var \phpDocumentor\Reflection\DocBlock\Tags\Var_ $varType
                     */
                    $varType = current($documentBlock->getTagsByName('var'));
                    $constants[] = [
                        $name,
                        $value,
                        ltrim((string) $varType->getType(), '\\'),
                    ];
                }
            } catch (\InvalidArgumentException $e) {
            }
        }

        return $constants;
    }

    public function getDefinedMethods(): array
    {
        $methods = [];
        $reflectionClass = new \ReflectionClass($this);
        foreach ($reflectionClass->getMethods() as $method) {
        }
        return $methods;
    }
}
