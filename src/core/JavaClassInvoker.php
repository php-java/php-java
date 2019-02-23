<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Invoker\Invokable;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Kernel\Maps\AccessFlag;
use PHPJava\Kernel\Structures\_MethodInfo;

class JavaClassInvoker
{
    /**
     * @var JavaClass
     */
    private $javaClass;

    private $hiddenMethods = [];
    private $dynamicMethods = [];
    private $staticMethods = [];

    public function __construct(JavaClass $javaClass)
    {
        $this->javaClass = $javaClass;
        $cpInfo = $javaClass->getConstantPool()->getEntries();

        foreach ($javaClass->getMethods() as $methodInfo) {
            /**
             * @var _MethodInfo $methodInfo
             */
            $cpMethodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if ($methodInfo->getAccessFlag() === 0) {
                $this->hiddenMethods[] = $methodInfo;
            } elseif (($methodInfo->getAccessFlag() & AccessFlag::_Public) !== 0) {
                $this->dynamicMethods[] = $methodInfo;
            } elseif (($methodInfo->getAccessFlag() & AccessFlag::_Static) !== 0) {
                $this->staticMethods[] = $methodInfo;
            }
        }
    }

    public function getDynamicMethods(): InvokerInterface
    {
        return new JVM\Invoker\DynamicMethodInvoker($this->javaClass, $this->dynamicMethods);
    }

    public function getStaticMethods(): InvokerInterface
    {
        return new JVM\Invoker\StaticMethodInvoker($this->javaClass, $this->dynamicMethods);
    }
}
