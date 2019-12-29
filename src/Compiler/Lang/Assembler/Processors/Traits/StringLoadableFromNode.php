<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Packages\java\lang\_String;
use PhpParser\Node;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait StringLoadableFromNode
{
    public function assembleLoadStringFromNode(Node $expression, ?string &$classType = null): array
    {
        /**
         * @var \PhpParser\Node\Scalar\String_ $expression
         */
        $operations = $this->assembleLoadString($expression->value);
        $classType = _String::class;

        return $operations;
    }

    public function assembleLoadString(string $value): array
    {
        $operations = [];
        // Add to ConstantPool
        $this->getEnhancedConstantPool()
            ->addString($value);

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_ldc,
            Operand::factory(
                Uint8::class,
                $this->getConstantPoolFinder()->find(
                    StringInfo::class,
                    $value
                )
            )
        );

        return $operations;
    }
}
