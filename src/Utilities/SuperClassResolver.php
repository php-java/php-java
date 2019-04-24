<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\FlexibleMethod;
use PHPJava\Packages\java\lang\_Object;

class SuperClassResolver
{
    private $classes = [];
    private $constantPool;

    public function resolveMethod($methodName, JavaClass $class)
    {
        $cpInfo = $class->getConstantPool();
        if ($class->getSuperClass() instanceof JavaClass) {
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
        return array_merge($prependItems, $this->classes);
    }
}
