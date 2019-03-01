<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Imitation\java\lang\_Object;

class SuperClassResolver
{
    private $classes = [];
    private $constantPool;

    public function resolveMethod($methodName, JavaClass $class)
    {
        $cpInfo = $class->getConstantPool()->getEntries();
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
// TODO: Will implement extends imitation classes
//        elseif (!($class->getSuperClass() instanceof _Object)) {
//            $this->classes = array_merge($this->classes, array_map(
//                function ($method) use ($class) {
//                    return static::convertToCallable($method, $class->getSuperClass());
//                },
//                (new \ReflectionClass($class->getSuperClass()))->getMethods()
//            ));
//            return $this->resolveAll($class->getSuperClass());
//        }
//        $this->classes = array_merge($this->classes, array_map(
//            function ($method) use ($class) {
//                return static::convertToCallable($method, $class->getSuperClass());
//            },
//            (new \ReflectionClass($class->getSuperClass()))->getMethods()
//        ));
        return $this->classes;
    }
}
