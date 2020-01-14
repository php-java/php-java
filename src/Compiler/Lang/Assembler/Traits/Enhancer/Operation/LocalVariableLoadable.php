<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Kernel\Resolvers\MnemonicResolver;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait LocalVariableLoadable
{
    public function assembleLoadLocalVariable(string $variableName): array
    {
        [$localStorageNumber, $classType] = $this->getStore()->get(
            $variableName,
            false
        );

        $operations = [];

        $loadOperation = MnemonicResolver::resolveLoadByNumberAndType(
            $localStorageNumber,
            $classType
        );
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            $loadOperation
        );

        return $operations;
    }
}
