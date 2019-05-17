<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\FlexibleMethod;

class SuperClassResolver
{
    /**
     * @var PHPJava\Kernel\Structures\_MethodInfo[]
     */
    private $classes = [];

    /**
     * @var \PHPJava\Core\JVM\ConstantPool
     */
    private $constantPool;

    public function resolveMethod(string $methodName, JavaClassInterface $class)
    {
        $cpInfo = $class->getConstantPool();
        if ($class->getSuperClass() instanceof JavaClassInterface) {
            foreach ($class->getSuperClass()->getInvoker()->getDynamic()->getMethods()->getList() as $calleeMethodName => $callee) {
                if ($methodName !== $calleeMethodName) {
                    continue;
                }
                if (!isset($this->classes[$methodName])) {
                    $this->classes[$methodName] = [];
                }
                $this->classes[$methodName] = array_merge($this->classes[$methodName], $callee);
            }
            return $this->resolveMethod($methodName, $class->getSuperClass());
        }

        $prependItems = [];
        foreach ((new \ReflectionClass($class->getSuperClass()))->getMethods() as $callee) {
            $resolvedMethodName = $callee->getName();
            if (!isset($prependItems[$resolvedMethodName])) {
                $prependItems[$resolvedMethodName] = [];
            }
            $prependItems[$resolvedMethodName] = array_merge(
                $prependItems[$resolvedMethodName],
                [new FlexibleMethod($class->getSuperClass(), $callee)]
            );
        }
        return array_merge(
            $prependItems,
            $this->classes
        );
    }
}
