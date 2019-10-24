<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Exceptions\ResolverException;
use PHPJava\Kernel\Resolvers\MnemonicResolver;
use PHPJava\Kernel\Types\_Void;

/**
 * @method array coordinateCastTypeOperation(string $classType)
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait StringConcatable
{
    public function assembleConcatStringOperation(...$arguments): array
    {
        if (count($arguments) === 1) {
            try {
                return $this->assembleCastToString(
                    MnemonicResolver::isLDCOperation($arguments[0]->getOpCode())
                        ? $arguments[0]->getOperand(0)->getValue()->getType()
                        : MnemonicResolver::resolveTypeByOpCode($arguments[0]),
                    ...$arguments
                );
            } catch (ResolverException $e) {
            }

            return $arguments;
        }

        $descriptor = Descriptor::factory()
            ->addArgument(
                \PHPJava\Packages\java\lang\String::class
            )
            ->setReturn(
                \PHPJava\Packages\java\lang\StringBuilder::class
            )
            ->make();

        $operations = [];

        array_push(
            $operations,
            ...$this->assembleClassConstructor(
                \PHPJava\Packages\java\lang\StringBuilder::class,
                Descriptor::factory()
                    ->setReturn(
                        _Void::class
                    )
                    ->make(),
                true
            )
        );

        foreach ($arguments as $operation) {
            try {
                $convertedOperations = $this->assembleCastToString(
                    MnemonicResolver::isLDCOperation($operation->getOpCode())
                        ? $operation->getOperand(0)->getValue()->getType()
                        : MnemonicResolver::resolveTypeByOpCode($operation),
                    $operation
                );
            } catch (ResolverException $e) {
                $convertedOperations = [$operation];
            }

            array_push(
                $operations,
                // Load value.
                ...$convertedOperations,
                // Call the append method.
                ...$this->assembleCallMethodOperations(
                    \PHPJava\Packages\java\lang\StringBuilder::class,
                    'append',
                    $descriptor
                )
            );
        }

        array_push(
            $operations,
            ...$this->assembleCallMethodOperations(
                \PHPJava\Packages\java\lang\StringBuilder::class,
                'toString',
                Descriptor::factory()
                    ->setReturn(
                        \PHPJava\Packages\java\lang\String::class
                    )
                    ->make()
            )
        );

        return $operations;
    }
}
