<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Kernel\Resolvers\MnemonicResolver;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait LocalVariableAssignable
{
    public function assembleAssignVariable(string $variableName, string $classType, int $dimensionsOfArray = 0): array
    {
        $localStorageNumber = $this->getStore()->store(
            $variableName,
            $classType,
            $dimensionsOfArray
        );

        return $this->assembleStoreOperation(
            $localStorageNumber,
            $classType
        );
    }

    public function assembleStoreOperation(int $localStorageNumber, string $classType)
    {
        $operations = [];

        // Add to operation code
        $storeOperation = MnemonicResolver::resolveStoreByNumberAndType(
            $localStorageNumber,
            $classType
        );

        $operands = [];

        // Add a localstorage number operand.
        if (!MnemonicResolver::inDefaultLocalStorageNumber($localStorageNumber)) {
            $operands[] = Operand::factory(
                Uint16::class,
                $localStorageNumber
            );
        }

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            $storeOperation,
            ...$operands
        );

        return $operations;
    }
}
