<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Byte;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait ConstLoadableFromNode
{
    /**
     * @throws AssembleStructureException
     */
    private function assembleLoadConstFromNode(Node $expression, ?string &$classType = null): array
    {
        $operations = [];

        /**
         * @var \PhpParser\Node\Expr\ConstFetch $expression
         */
        $constName = $expression->name->parts[0];

        if (strtolower($constName) === 'true') {
            $classType = _Byte::class;
            return [
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_iconst_1
                ),
            ];
        }
        if (strtolower($constName) === 'false') {
            $classType = _Byte::class;
            return [
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_iconst_0
                ),
            ];
        }

        $basedClass = str_replace(
            Runtime::BUILD_PACKAGE_NAMESPACE,
            '',
            \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Map\Constants::BASED
        );
        $constantMappedMethodName = \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Map\Constants::MAP[$constName] ?? null;

        if ($constantMappedMethodName === null) {
            throw new AssembleStructureException(
                'The constant is not provided on PHP_STANDARD class ('
                . Runtime::PHP_STANDARD_CLASS_NAME
                . Runtime::PHP_STANDARD_CLASS_METHOD_PREFIX
                . $constName . ')'
            );
        }

        [$methodName, $arguments, $return] = $constantMappedMethodName;

        // Overwrite class type
        $classType = $return;

        $methodName = Runtime::PHP_STANDARD_CLASS_METHOD_PREFIX . $methodName;

        $this->getEnhancedConstantPool()
            ->addClass(Runtime::PHP_STANDARD_CLASS_NAME)
            ->addMethodref(
                Runtime::PHP_STANDARD_CLASS_NAME,
                $methodName,
                (new Descriptor())
                    ->setReturn($return)
                    ->make()
            );

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_invokestatic,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findMethod(
                        Runtime::PHP_STANDARD_CLASS_NAME,
                        $methodName,
                        (new Descriptor())
                            ->setReturn($return)
                            ->make()
                    )
            )
        );

        return $operations;
    }
}
