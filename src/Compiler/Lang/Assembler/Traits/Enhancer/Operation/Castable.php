<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Utilities\ArrayTool;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait Castable
{
    public function assembleCastToString(
        string $classType,
        \PHPJava\Compiler\Builder\Generator\Operation\Operation ...$arguments
    ): array {
        $objectClass = null;
        switch ($classType) {
            case _Int::class:
            case IntegerInfo::class:
                $classType = _Int::class;
                $objectClass = \PHPJava\Packages\java\lang\Integer::class;
                break;
            case StringInfo::class:
                // Nothing to do.
                return $arguments;
            default:
                throw new AssembleStructureException(
                    sprintf(
                        'Not supported cast: %s',
                        $classType
                    )
                );
        }

        $operations = [];

        ArrayTool::concat(
            $operations,
            ...$this->assembleClassConstructor(
                $objectClass,
                Descriptor::factory()
                    ->addArgument($classType)
                    ->setReturn(_Void::class)
                    ->make(),
                true,
                ...$arguments
            ),
            ...$this->assembleCallMethodOperations(
                $objectClass,
                'toString',
                Descriptor::factory()
                    ->setReturn(
                        \PHPJava\Packages\java\lang\String::class
                    )
                    ->make(),
                ...$arguments
            )
        );

        return $operations;
    }
}
