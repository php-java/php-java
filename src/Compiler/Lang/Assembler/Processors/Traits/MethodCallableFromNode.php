<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\ClassAssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Types\_Void;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Identifier;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ClassAssemblerInterface getClassAssembler()
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

        // TODO: Parse arguments and PHPDocs.
        return $this->assembleStaticCallMethodOperations(
            $callee,
            $methodName->name,
            (new Descriptor())
                ->setReturn(_Void::class)
                ->make()
        );
    }
}
