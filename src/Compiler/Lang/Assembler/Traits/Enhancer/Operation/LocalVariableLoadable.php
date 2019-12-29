<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Resolvers\MnemonicResolver;
use PHPJava\Packages\java\lang\String_;

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

        switch ($classType) {
            case String_::class:
                $loadOperation = MnemonicResolver::resolveLoadByNumberAndType($localStorageNumber, $classType);
                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    $loadOperation
                );
                break;
            default:
                throw new AssembleStructureException(
                    sprintf(
                        'Unsupported class type: %s',
                        $classType
                    )
                );
        }

        return $operations;
    }
}
