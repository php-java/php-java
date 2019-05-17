<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Utilities\ClassResolver;

final class InstanceDeferredLoader
{
    /**
     * @var object
     */
    private $instance;

    /**
     * @var \PHPJava\Core\JavaClass|string
     */
    private $classObject;

    /**
     * @var string
     */
    private $resourceType;

    /**
     * @var string
     */
    private $className;

    /**
     * @param \PHPJava\Core\JavaClass|string $classObject
     */
    public function __construct(
        $classObject,
        string $resourceType,
        string $className
    ) {
        $this->classObject = $classObject;
        $this->resourceType = $resourceType;
        $this->className = $className;
    }

    public function instantiate(string $methodName, ...$arguments): object
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

    public function getInstance(): object
    {
        return $this->instance;
    }
}
