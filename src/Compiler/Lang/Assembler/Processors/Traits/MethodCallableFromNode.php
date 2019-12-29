<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\ClassAssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Structure\Accessor\StructureAccessorsLocator;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Void_;
use PHPJava\Packages\java\lang\String_;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Identifier;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ClassAssemblerInterface getClassAssembler()
 * @method StructureAccessorsLocator getStructureAccessorsLocator()
 */
trait MethodCallableFromNode
{
    private function assembleDynamicMethodCallFromNode(MethodCall $expression): array
    {
        $var = $expression->var;
        $methodName = $expression->name;

        if (!($var instanceof Variable)) {
            throw new AssembleStructureException(
                'Unsupported callee type: ' . get_class($var)
            );
        }

        if (!($methodName instanceof Identifier)) {
            throw new AssembleStructureException(
                'Unsupported method name type: ' . get_class($methodName)
            );
        }

        [, $callFrom] = $this->getStore()->get($var->name);

        throw new AssembleStructureException(
            'The dynamic method call is not implemented.'
        );
    }

    private function assembleStaticMethodCallFromNode(StaticCall $expression): array
    {
        $targetClass = strtolower($expression->class->parts[0]);
        $methodName = $expression->name;

        if (!($methodName instanceof Identifier)) {
            throw new AssembleStructureException(
                'Unsupported method name type: ' . get_class($methodName)
            );
        }

        $callee = null;

        if ($targetClass === 'self') {
            $callee = $this->getClassAssembler()->getClassName();
        } elseif ($targetClass === 'static') {
            // TODO: Implement late static bindings.
            $callee = $this->getClassAssembler()->getClassName();
        } else {
            $callee = $targetClass;
        }

        $descriptorObject = (new Descriptor())
            ->setReturn(Void_::class);

        $operations = [];

        $methodStructure = $this->getStructureAccessorsLocator()
            ->getClassesStructureAccessor()
            ->find($this->getClassAssembler()->getClassName())
            ->find((string) $methodName);

        $parameters = array_values(
            $this->parseParameterFromNode(
                $methodStructure
            )
        );

        foreach ($expression->args as $index => $arg) {
            if (!($arg instanceof Arg)) {
                throw new AssembleStructureException(
                    'Does not support an argument type: ' . get_class($arg) . ' of #' . ($index + 1)
                );
            }
            $argValue = $arg->value;

            $descriptorObject->addArgument(
                $parameters[$index]['type']
            );

            $appendOperations = [];
            switch ($parameters[$index]['type']) {
                case String_::class:
                    $appendOperations = $this->assembleLoadString(
                        $argValue->value
                    );
                    break;
                case Int_::class:
                    $appendOperations = $this->assembleLoadNumber(
                        $argValue->value
                    );
                    break;
                default:
                    // TODO: support the other typed class.
                    throw new AssembleStructureException(
                        'Unsupported type ' . $parameters[$index]['type']
                    );
            }

            ArrayTool::concat(
                $operations,
                ...$appendOperations
            );
        }

        ArrayTool::concat(
            $operations,
            ...$this->assembleStaticCallMethodOperations(
                $callee,
                $methodName->name,
                $descriptorObject->make()
            )
        );

        return $operations;
    }
}
