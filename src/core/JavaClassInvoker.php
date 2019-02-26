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

    private $debugTraces;

    /**
     * @var JVM\Invoker\DynamicMethodInvoker
     */
    private $dynamicMethodAccessor;

    /**
     * @var JVM\Invoker\StaticMethodInvoker
     */
    private $staticMethodAccessor;

    /**
     * @var JVM\Field\DynamicField
     */
    private $dynamicFieldAccessor;

    /**
     * @var JVM\Field\StaticField
     */
    private $staticFieldAccessor;

    private $specialInvoked = [];

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
                $this->staticMethods[$methodName][] = $methodInfo;
            } elseif ($methodInfo->getAccessFlag() === 0 || ($methodInfo->getAccessFlag() & AccessFlag::_Public) !== 0) {
                $this->dynamicMethods[$methodName][] = $methodInfo;
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

        $this->dynamicMethodAccessor = new JVM\Invoker\DynamicMethodInvoker(
            $this,
            $this->dynamicMethods
        );

        $this->staticMethodAccessor = new JVM\Invoker\StaticMethodInvoker(
            $this,
            $this->staticMethods
        );

        $this->dynamicFieldAccessor = new JVM\Field\DynamicField(
            $this,
            []
        );

        $this->staticFieldAccessor = new JVM\Field\StaticField(
            $this
        );

        // call <clinit>
        if (isset($this->staticMethods['<clinit>'])) {
            $this->getStaticMethods()->call('<clinit>');
        }
    }

    public function construct(): self
    {

        // reset dynamic fields
        $this->dynamicFieldAccessor = new JVM\Field\DynamicField(
            $this,
            []
        );

        $this->dynamicMethodAccessor = new JVM\Invoker\DynamicMethodInvoker(
            $this,
            $this->dynamicMethods
        );

        if (isset($this->dynamicMethods['<init>'])) {
            $this->getDynamicMethods()->call(
                '<init>'
            );
        }

        return $this;
    }

    public function getJavaClass(): JavaClass
    {
        return $this->javaClass;
    }

    public function getDynamicMethods(): InvokerInterface
    {
        return $this->dynamicMethodAccessor;
    }

    public function getStaticMethods(): InvokerInterface
    {
        return $this->staticMethodAccessor;
    }

    public function getDynamicFields(): FieldInterface
    {
        return $this->dynamicFieldAccessor;
    }

    public function getStaticFields(): JVM\Field\StaticField
    {
        return $this->staticFieldAccessor;
    }

    public function isInvoked(string $name, string $signature): bool
    {
        return in_array($signature, $this->specialInvoked[$name] ?? [], true);
    }

    public function addToSpecialInvokedList(string $name, string $signature): self
    {
        $this->specialInvoked[$name][] = $signature;
        return $this;
    }

}
