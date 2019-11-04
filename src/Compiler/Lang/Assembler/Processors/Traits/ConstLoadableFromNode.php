<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Utilities\ArrayTool;
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

        $packageInstance = \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Constants::factory()
            ->setConstantPool($this->getConstantPool());

        $result = ArrayTool::containInMultipleDimension($packageInstance->getDefinedConstants(), 0, $constName);
        if ($result === null) {
            throw new AssembleStructureException(
                'The constant is not provided on PHP_STANDARD class ('
                . Runtime::PHP_STANDARD_CLASS_NAME
                . Runtime::PHP_STANDARD_CLASS_METHOD_PREFIX
                . $constName . ')'
            );
        }

        [, , $signature] = $result;

        $this->getEnhancedConstantPool()
            ->addFieldref(
                Runtime::PHP_STANDARD_CLASS_NAME,
                $constName,
                (new Descriptor())
                    ->addArgument($signature)
                    ->make()
            );

        ArrayTool::concat(
            $operations,
            ...$this->assembleLoadStaticField(
                Runtime::PHP_STANDARD_CLASS_NAME,
                $constName,
                $signature
            )
        );

        return $operations;
    }
}
