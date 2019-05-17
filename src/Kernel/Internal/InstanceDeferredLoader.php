<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Utilities\ClassResolver;

final class InstanceDeferredLoader
{
    private $instance;
    private $classObject;
    private $resourceType;
    private $className;

    /**
     * InstanceDeferredLoader constructor.
     * @param $classObject
     * @param $resourceType
     * @param $className
     */
    public function __construct(
        $classObject,
        $resourceType,
        $className
    ) {
        $this->classObject = $classObject;
        $this->resourceType = $resourceType;
        $this->className = $className;
    }

    /**
     * @param $methodName
     * @param mixed ...$arguments
     */
    public function instantiate($methodName, ...$arguments)
    {
        $object = $this->classObject;
        switch ($this->resourceType) {
            case ClassResolver::RESOLVED_TYPE_CLASS:
                $this->instance = $object($methodName, ...$arguments);
                break;
            case ClassResolver::RESOLVED_TYPE_PACKAGES:
                $this->instance = new $object($methodName, ...$arguments);
                break;
        }

        return $this->instance;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function getClassObject(): JavaClassInterface
    {
        return $this->classObject;
    }

    public function getInstance()
    {
        return $this->instance;
    }
}
