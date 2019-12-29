<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JavaSimpleClass;
use PHPJava\Core\JVM\Field\PHPDynamicField;
use PHPJava\Core\JVM\Field\PHPStaticField;
use PHPJava\Core\JVM\Invoker\PHPClassDynamicMethodInvoker;
use PHPJava\Core\JVM\Invoker\PHPClassStaticMethodInvoker;
use PHPJava\Packages\java\lang\_Object;

class PHPClassInvoker implements ClassInvokerInterface
{
    use Extended\ProviderProvidable;
    use Extended\JavaClassProvidable;
    use Extended\DynamicAccessorProvidable;
    use Extended\StaticAccessorProvidable;

    /**
     * @var \ReflectionMethod[][]
     */
    private $dynamicMethods = [];

    /**
     * @var \ReflectionMethod[][]
     */
    private $staticMethods = [];

    /**
     * @var \ReflectionProperty[]
     */
    private $dynamicFields = [];

    /**
     * @var \ReflectionProperty[]
     */
    private $staticFields = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var _Object
     */
    private $classObject;

    public function __construct(
        JavaClassInterface $javaClass,
        array $options
    ) {
        /**
         * @var JavaSimpleClass $javaClass
         */
        $this->javaClass = $javaClass;
        $this->options = $options;

        foreach ($this->javaClass->getDefinedMethods() as $methodName => $methodList) {
            foreach ($methodList as $methodInfo) {
                /**
                 * @var \ReflectionMethod $methodInfo
                 */

                // Private methods become accessible
                $methodInfo->setAccessible(true);

                // Categorise by method accessibility.
                if ($methodInfo->isStatic()) {
                    $this->staticMethods[$methodName][] = $methodInfo;
                } else {
                    $this->dynamicMethods[$methodName][] = $methodInfo;
                }
            }
        }

        foreach ($this->javaClass->getDefinedFields() as $fieldName => $fieldInfo) {
            /**
             * @var \ReflectionProperty $fieldInfo
             */

            // Private fields become accessible
            $fieldInfo->setAccessible(true);

            // Categorise by field accessibility.
            if ($fieldInfo->isStatic()) {
                $this->staticFields[$fieldName] = $fieldInfo;
            } else {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            }
        }

        $this->dynamicAccessor = new Accessor(
            $this,
            PHPClassDynamicMethodInvoker::class,
            PHPDynamicField::class,
            $this->dynamicMethods,
            $this->dynamicFields,
            $this->options
        );

        $this->staticAccessor = new Accessor(
            $this,
            PHPClassStaticMethodInvoker::class,
            PHPStaticField::class,
            $this->staticMethods,
            $this->staticFields,
            $this->options
        );
    }

    public function construct(...$arguments): ClassInvokerInterface
    {
        $this->dynamicAccessor = new Accessor(
            $this,
            PHPClassDynamicMethodInvoker::class,
            PHPDynamicField::class,
            $this->dynamicMethods,
            $this->dynamicFields,
            $this->options
        );

        $className = $this->javaClass->getClassName();
        $this->classObject = new $className(
            ...$arguments
        );

        if (method_exists($this->classObject, 'setJavaClass')) {
            $this->classObject->setJavaClass(
                $this->getJavaClass()
            );
        }

        return $this;
    }

    public function getClassObject()
    {
        // TODO: add dynamically validation
        return $this->classObject;
    }
}
