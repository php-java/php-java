<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\DynamicAccessor;
use PHPJava\Core\JVM\StaticAccessor;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Kernel\Maps\FieldAccessFlag;
use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Provider\ProviderInterface;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\Normalizer;

class JavaClassInvoker
{
    /**
     * @var JavaClass
     */
    private $javaClass;

    /**
     * @var _MethodInfo[]
     */
    private $dynamicMethods = [];

    /**
     * @var _MethodInfo[]
     */
    private $staticMethods = [];

    /**
     * @var _FieldInfo[]
     */
    private $dynamicFields = [];

    /**
     * @var _FieldInfo[]
     */
    private $staticFields = [];

    /**
     * @var DynamicAccessor
     */
    private $dynamicAccessor;

    /**
     * @var StaticAccessor
     */
    private $staticAccessor;

    /**
     * @var string[][]
     */
    private $specialInvoked = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var ProviderInterface[]
     */
    private $providers = [];

    public function __construct(
        JavaClass $javaClass,
        array $options
    ) {
        $this->javaClass = $javaClass;

        $this->options = $options;
        $cpInfo = $javaClass->getConstantPool();

        foreach ($javaClass->getDefinedMethods() as $methodInfo) {
            /**
             * @var _MethodInfo $methodInfo
             */
            $methodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if (($methodInfo->getAccessFlag() & MethodAccessFlag::ACC_STATIC) !== 0) {
                $this->staticMethods[$methodName][] = $methodInfo;
            } else {
                $this->dynamicMethods[$methodName][] = $methodInfo;
            }
        }

        foreach ($javaClass->getDefinedFields() as $fieldInfo) {
            /**
             * @var _FieldInfo $fieldInfo
             */
            $fieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if (($fieldInfo->getAccessFlag() & FieldAccessFlag::ACC_STATIC) !== 0) {
                $this->staticFields[$fieldName] = $fieldInfo;
            } else {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            }
        }

        $this->dynamicAccessor = new DynamicAccessor(
            $this,
            $this->dynamicMethods,
            [],
            $this->options
        );

        $this->staticAccessor = new StaticAccessor(
            $this,
            $this->staticMethods,
            Normalizer::normalizeFields(
                $this->staticFields,
                $this->javaClass
            ),
            $this->options
        );
    }

    /**
     * @return JavaClassInvoker
     */
    public function construct(...$arguments): self
    {
        $this->dynamicAccessor = new DynamicAccessor(
            $this,
            $this->dynamicMethods,
            Normalizer::normalizeFields(
                $this->dynamicFields,
                $this->javaClass
            ),
            $this->options
        );

        $this->getDynamic()->getMethods()->call(
            '<init>',
            ...$arguments
        );

        return $this;
    }

    public function getJavaClass(): JavaClass
    {
        return $this->javaClass;
    }

    public function getDynamic(): DynamicAccessor
    {
        return $this->dynamicAccessor;
    }

    public function getStatic(): StaticAccessor
    {
        $this->staticAccessor
            ->getMethods()
            ->callStaticInitializerIfNotInstantiated();

        return $this->staticAccessor;
    }

    /**
     * @throws IllegalJavaClassException
     */
    public function getProvider(string $providerName): ProviderInterface
    {
        if (!isset($this->providers[$providerName])) {
            throw new IllegalJavaClassException($providerName . ' not provided.');
        }

        return $this->providers[$providerName];
    }
}
