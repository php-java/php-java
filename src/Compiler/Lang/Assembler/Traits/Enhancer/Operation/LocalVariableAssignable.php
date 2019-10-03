<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Bundler\Packages\_String;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\MnemonicResolver;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait LocalVariableAssignable
{
    public function assembleAssignVariable(string $variableName, $value): array
    {
        $operations = [];
        $type = null;
        if (is_int($value)) {
            $storeNumberOperation = $this->assembleStoreNumber(
                $value,
                $type
            )[0];

            $operations[] = $storeNumberOperation;
        } else {
            $this->getEnhancedConstantPool()
                ->addString($value);
            $type = _String::class;

            // Add to operation
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                OpCode::_ldc,
                Operand::factory(
                    Uint8::class,
                    $this->getConstantPoolFinder()
                        ->find(
                            StringInfo::class,
                            $value
                        )
                )
            );
        }

        $localStorageNumber = $this->getStore()->store(
            $variableName,
            [$type, $value]
        );

        // Add to operation code
        $storeOperation = MnemonicResolver::resolveStoreByNumberAndType(
            $localStorageNumber,
            $type
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
