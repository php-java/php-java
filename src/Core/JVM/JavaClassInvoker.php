<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\Field\JavaDynamicField;
use PHPJava\Core\JVM\Field\JavaStaticField;
use PHPJava\Core\JVM\Invoker\JavaClassDynamicMethodInvoker;
use PHPJava\Core\JVM\Invoker\JavaClassStaticMethodInvoker;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Maps\FieldAccessFlag;
use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Structures\FieldInfo;
use PHPJava\Kernel\Structures\MethodInfo;

class JavaClassInvoker implements ClassInvokerInterface
{
    use Extended\ProviderProvidable;
    use Extended\JavaClassProvidable;
    use Extended\DynamicAccessorProvidable;
    use Extended\StaticAccessorProvidable;

    /**
     * @var MethodInfo[]
     */
    private $dynamicMethods = [];

    /**
     * @var MethodInfo[]
     */
    private $staticMethods = [];

    /**
     * @var FieldInfo[]
     */
    private $dynamicFields = [];

    /**
     * @var FieldInfo[]
     */
    private $staticFields = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var array
     */
    private $innerClasses = [];

    /**
     * @throws \PHPJava\Exceptions\NormalizerException
     */
    public function __construct(JavaClassInterface $javaClass, array $options)
    {
        $this->javaClass = $javaClass;
        $this->options = $options;
        $cpInfo = $this->javaClass->getConstantPool();

        foreach ($this->javaClass->getDefinedMethods() as $methodInfo) {
            /**
             * @var MethodInfo $methodInfo
             */
            $methodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if (($methodInfo->getAccessFlag() & MethodAccessFlag::ACC_STATIC) !== 0) {
                $this->staticMethods[$methodName][] = $methodInfo;
            } else {
                $this->dynamicMethods[$methodName][] = $methodInfo;
            }
        }

        foreach ($this->javaClass->getDefinedFields() as $fieldInfo) {
            /**
             * @var FieldInfo $fieldInfo
             */
            $fieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if (($fieldInfo->getAccessFlag() & FieldAccessFlag::ACC_STATIC) !== 0) {
                $this->staticFields[$fieldName] = $fieldInfo;
            } else {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            }
        }

        $this->dynamicAccessor = new Accessor(
            $this,
            JavaClassDynamicMethodInvoker::class,
            JavaDynamicField::class,
            $this->dynamicMethods,
            Normalizer::normalizeFields(
                $this->dynamicFields,
                $this->javaClass
            ),
            $this->options
        );

        $this->staticAccessor = new Accessor(
            $this,
            JavaClassStaticMethodInvoker::class,
            JavaStaticField::class,
            $this->staticMethods,
            Normalizer::normalizeFields(
                $this->staticFields,
                $this->javaClass
            ),
            $this->options
        );
    }

    public function construct(...$arguments): ClassInvokerInterface
    {
        $this->dynamicAccessor = new Accessor(
            $this,
            JavaClassDynamicMethodInvoker::class,
            JavaDynamicField::class,
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

    /**
     * @return JavaClassInterface
     */
    public function getClassObject()
    {
        return $this->javaClass;
    }
}
