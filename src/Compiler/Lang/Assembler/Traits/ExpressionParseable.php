<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\ClassAssembler;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\CoordinateStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\MnemonicResolver;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Packages\java\lang\_String;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
trait ExpressionParseable
{
    protected function parseExpression(array $expressions, ?callable $callback = null): array
    {
        $operations = [];
        $classType = null;
        foreach ($expressions as $expression) {
            $coordinatedOperationCode = null;
            $nodeType = get_class($expression);
            switch ($nodeType) {
                case \PhpParser\Node\Scalar\String_::class:
                    $coordinatedOperationCode = $this
                        ->assembleStringNodeToOperationCode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Scalar\LNumber::class:
                    $coordinatedOperationCode = $this->assembleLoadNumber(
                        $expression->value,
                        $classType
                    );
                    break;
                case \PhpParser\Node\Expr\Variable::class:
                    $coordinatedOperationCode = $this
                        ->assembleVariableNodeToOperationCode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Expr\ConstFetch::class:
                    $coordinatedOperationCode = $this
                        ->assembleConstFetchNodeToOperationCode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Scalar\MagicConst\Class_::class: // __CLASS__
                case \PhpParser\Node\Scalar\MagicConst\Method::class: // __METHOD__
                case \PhpParser\Node\Scalar\MagicConst\Namespace_::class: // __NAMESPACE__
                case \PhpParser\Node\Scalar\MagicConst\Dir::class: // __DIR__
                case \PhpParser\Node\Scalar\MagicConst\File::class: // __FILE__
                case \PhpParser\Node\Scalar\MagicConst\Function_::class: // __FUNCTION__
                case \PhpParser\Node\Scalar\MagicConst\Trait_::class: // __TRAIT__
                case \PhpParser\Node\Scalar\MagicConst\Line::class: // __LINE__
                    $coordinatedOperationCode = $this
                        ->assembleMagicConstNodeToOperationCode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Concat::class:
                    $coordinatedOperationCode = $this
                        ->parseExpression(
                            [
                                $expression->left,
                                $expression->right,
                            ],
                            $callback
                        );
                    break;
                default:
                    throw new CoordinateStructureException(
                        'Unsupported expression: ' . get_class($expression)
                    );
            }
            if (empty($coordinatedOperationCode)) {
                continue;
            }

            array_push(
                $operations,
                ...$coordinatedOperationCode
            );

            if ($callback !== null
                && !in_array(
                    $nodeType,
                    [
                        \PhpParser\Node\Expr\BinaryOp\Concat::class,
                    ],
                    true
                )
            ) {
                $callback(
                    $classType,
                    $coordinatedOperationCode
                );
            }
        }
        return $operations;
    }

    private function assembleStringNodeToOperationCode(Node $expression, ?string &$classType = null): array
    {
        $operations = [];
        /**
         * @var \PhpParser\Node\Scalar\String_ $expression
         */
        $value = $expression->value;

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

        $classType = _String::class;

        return $operations;
    }

    /**
     * @throws CoordinateStructureException
     */
    private function assembleVariableNodeToOperationCode(Node $expression, ?string &$classType = null): array
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

    /**
     * @throws CoordinateStructureException
     */
    private function assembleConstFetchNodeToOperationCode(Node $expression, ?string &$classType = null): array
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
            throw new CoordinateStructureException(
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

    private function assembleMagicConstNodeToOperationCode(Node $expression, ?string &$classType = null): array
    {
        $operations = [];
        switch (get_class($expression)) {
            case \PhpParser\Node\Scalar\MagicConst\Class_::class: // __CLASS__
                /**
                 * @var ClassAssembler $class
                 */
                $class = $this->recurseParentUntilBy(
                    ClassAssembler::class
                );

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
                $class = $this->recurseParentUntilBy(
                    ClassAssembler::class
                );

                /**
                 * @var MethodAssembler $method
                 */
                $method = $this->recurseParentUntilBy(
                    MethodAssembler::class
                );

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
                $method = $this->recurseParentUntilBy(
                    MethodAssembler::class
                );

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
                throw new CoordinateStructureException(
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
