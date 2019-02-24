<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Invoker\Invokable;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Kernel\Maps\AccessFlag;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\Formatter;

class JavaClassInvoker
{
    /**
     * @var JavaClass
     */
    private $javaClass;

    private $hiddenMethods = [];
    private $dynamicMethods = [];
    private $staticMethods = [];

    private $hiddenFields = [];
    private $dynamicFields = [];
    private $staticFields = [];

    private $debugTraces ;

    public function __construct(JavaClass $javaClass)
    {
        $this->javaClass = $javaClass;
        $cpInfo = $javaClass->getConstantPool()->getEntries();

        foreach ($javaClass->getMethods() as $methodInfo) {
            /**
             * @var _MethodInfo $methodInfo
             */
            $methodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if (($methodInfo->getAccessFlag() & AccessFlag::_Static) !== 0) {
                $this->staticMethods[$methodName] = $methodInfo;
            } elseif ($methodInfo->getAccessFlag() === 0 || ($methodInfo->getAccessFlag() & AccessFlag::_Public) !== 0) {
                $this->dynamicMethods[$methodName] = $methodInfo;
            }
        }

        foreach ($javaClass->getFields() as $fieldInfo) {
            /**
             * @var _FieldInfo $fieldInfo
             */
            $fieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if ($fieldInfo->getAccessFlag() === 0) {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            } elseif (($fieldInfo->getAccessFlag() & AccessFlag::_Static) !== 0) {
                $this->staticFields[$fieldName] = $fieldInfo;
            }
        }

        // call <clinit>
        if (isset($this->staticMethods['<clinit>'])) {
            $this->getStaticMethods()->{'<clinit>'}();
        }
    }

    public function getJavaClass(): JavaClass
    {
        return $this->javaClass;
    }

    public function getDynamicMethods(): InvokerInterface
    {
        return new JVM\Invoker\DynamicMethodInvoker(
            $this,
            $this->dynamicMethods
        );
    }

    public function getStaticMethods(): InvokerInterface
    {
        return new JVM\Invoker\StaticMethodInvoker(
            $this,
            $this->staticMethods
        );
    }

    public function getDynamicFields(): FieldInterface
    {
        return new JVM\Field\DynamicField(
            $this
        );
    }

    public function getStaticFields(): JVM\Field\StaticField
    {
        return new JVM\Field\StaticField();
    }

}
