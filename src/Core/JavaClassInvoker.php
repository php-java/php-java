<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\DynamicAccessor;
use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Invoker\Invokable;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\StaticAccessor;
use PHPJava\Kernel\Maps\FieldAccessFlag;
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
     * @var DynamicAccessor
     */
    private $dynamicAccessor;

    /**
     * @var StaticAccessor
     */
    private $staticAccessor;

    private $specialInvoked = [];

    private $options = [];

    /**
     * @param JavaClass $javaClass
     * @param array $options
     */
    public function __construct(JavaClass $javaClass, array $options)
    {
        $this->javaClass = $javaClass;
        $this->options = $options;
        $cpInfo = $javaClass->getConstantPool();

        foreach ($javaClass->getDefinedMethods() as $methodInfo) {
            /**
             * @var _MethodInfo $methodInfo
             */
            $methodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if (($methodInfo->getAccessFlag() & FieldAccessFlag::ACC_STATIC) !== 0) {
                $this->staticMethods[$methodName][] = $methodInfo;
            } elseif ($methodInfo->getAccessFlag() === 0 || ($methodInfo->getAccessFlag() & FieldAccessFlag::ACC_PUBLIC) !== 0) {
                $this->dynamicMethods[$methodName][] = $methodInfo;
            }
        }

        foreach ($javaClass->getDefinedFields() as $fieldInfo) {
            /**
             * @var _FieldInfo $fieldInfo
             */
            $fieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if ($fieldInfo->getAccessFlag() === 0) {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            } elseif (($fieldInfo->getAccessFlag() & FieldAccessFlag::ACC_STATIC) !== 0) {
                $this->staticFields[$fieldName] = $fieldInfo;
            }
        }

        $this->dynamicAccessor = new DynamicAccessor(
            $this,
            $this->dynamicMethods,
            $this->options
        );

        $this->staticAccessor = new StaticAccessor(
            $this,
            $this->staticMethods,
            $this->options
        );
    }

    /**
     * @param array $arguments
     * @return JavaClassInvoker
     */
    public function construct(...$arguments): self
    {
        $this->dynamicAccessor = new DynamicAccessor(
            $this,
            $this->dynamicMethods,
            $this->options
        );

        if (isset($this->dynamicMethods['<init>'])) {
            $this->getDynamic()->getMethods()->call('<init>', ...$arguments);
        }

        return $this;
    }

    /**
     * @return JavaClass
     */
    public function getJavaClass(): JavaClass
    {
        return $this->javaClass;
    }

    /**
     * @return DynamicAccessor
     */
    public function getDynamic(): DynamicAccessor
    {
        return $this->dynamicAccessor;
    }

    /**
     * @return StaticAccessor
     */
    public function getStatic(): StaticAccessor
    {
        return $this->staticAccessor;
    }

    /**
     * @param string $name
     * @param string $signature
     * @return bool
     */
    public function isInvoked(string $name, string $signature): bool
    {
        return in_array($signature, $this->specialInvoked[$name] ?? [], true);
    }

    /**
     * @param string $name
     * @param string $signature
     * @return JavaClassInvoker
     */
    public function addToSpecialInvokedList(string $name, string $signature): self
    {
        $this->specialInvoked[$name][] = $signature;
        return $this;
    }
}
