<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Resolvers\MnemonicResolver;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait VariableLoadableFromNode
{
    /**
     * @throws AssembleStructureException
     */
    private function assembleLoadVariableFromNode(Node $expression, ?string &$classType = null): array
    {
        $operations = [];

        /**
         * @var \PhpParser\Node\Expr\Variable $expression
         */
        $variableName = $expression->name;
        [$storedNumber, $classType] = $this
            ->getStore()
            ->get($variableName);

        $loadOperation = MnemonicResolver::resolveLoadByNumberAndType($storedNumber, $classType);

        if (MnemonicResolver::inDefaultLocalStorageNumber($storedNumber)) {
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                $loadOperation
            );
        } else {
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                $loadOperation,
                Operand::factory(
                    Uint16::class,
                    $storedNumber
                )
            );
        }

        return $operations;
    }
}
