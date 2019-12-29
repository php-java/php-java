<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\ClassAssembler;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Packages\java\lang\_String;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait MagicConstLoadableFromNode
{
    private function assembleLoadMagicConstFromNode(Node $expression, ?string &$classType = null): array
    {
        $operations = [];
        switch (get_class($expression)) {
            case \PhpParser\Node\Scalar\MagicConst\Class_::class: // __CLASS__
                /**
                 * @var ClassAssembler $class
                 */
                $class = $this->getClassAssembler();

                $this->getEnhancedConstantPool()
                    ->addString($class->getClassName());

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $class->getClassName()
                        )
                    )
                );
                break;
            case \PhpParser\Node\Scalar\MagicConst\Method::class: // __METHOD__
                /**
                 * @var ClassAssembler $class
                 */
                $class = $this->getClassAssembler();

                /**
                 * @var MethodAssembler $method
                 */
                $method = $this->getMethodAssembler();

                $methodName = $class->getClassName() . '::' . $method->getMethodName();

                $this->getEnhancedConstantPool()
                    ->addString($methodName);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $methodName
                        )
                    )
                );
                break;
            case \PhpParser\Node\Scalar\MagicConst\Namespace_::class: // __NAMESPACE__
                $namespace = '\\' . implode('\\', $this->getNamespace() ?? []);
                $this->getEnhancedConstantPool()
                    ->addString($namespace);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $namespace
                        )
                    )
                );

                break;
            case \PhpParser\Node\Scalar\MagicConst\Dir::class: // __DIR__
                $filePath = dirname($this->getStreamReader()->getFilePath());
                $this->getEnhancedConstantPool()
                    ->addString($filePath);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $filePath
                        )
                    )
                );
                break;
            case \PhpParser\Node\Scalar\MagicConst\File::class: // __FILE__
                $filePath = $this->getStreamReader()->getFilePath();
                $this->getEnhancedConstantPool()
                    ->addString($filePath);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $filePath
                        )
                    )
                );
                break;
            case \PhpParser\Node\Scalar\MagicConst\Function_::class: // __FUNCTION__
                /**
                 * @var MethodAssembler $method
                 */
                $method = $this->getMethodAssembler();

                $methodName = $method->getMethodName();

                $this->getEnhancedConstantPool()
                    ->addString($methodName);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            StringInfo::class,
                            $methodName
                        )
                    )
                );
                break;
            case \PhpParser\Node\Scalar\MagicConst\Trait_::class: // __TRAIT__
                throw new AssembleStructureException(
                    'The __TRAIT__ is not implemented yet.'
                );
            case \PhpParser\Node\Scalar\MagicConst\Line::class: // __LINE__
                $line = $expression->getLine();
                $this->getEnhancedConstantPool()
                    ->addInteger($line);

                $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_ldc,
                    Operand::factory(
                        Uint8::class,
                        $this->getConstantPoolFinder()->find(
                            IntegerInfo::class,
                            $line
                        )
                    )
                );

                break;
        }

        $classType = _String::class;

        return $operations;
    }
}
