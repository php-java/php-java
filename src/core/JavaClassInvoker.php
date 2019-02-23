<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Invoker\Invokable;
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

    public function getDynamicMethods(): Invokable
    {
        return new JVM\Invoker\DynamicMethodInvoker($this, $this->dynamicMethods);
    }

    public function getStaticMethods(): Invokable
    {

        return new JVM\Invoker\StaticMethodInvoker($this, $this->dynamicMethods);
    }
}
