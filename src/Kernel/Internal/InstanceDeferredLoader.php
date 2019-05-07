<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\NotInstantiatedException;
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
     * @param mixed ...$arguments
     * @return mixed
     */
    public function instantiate(...$arguments)
    {
        $object = $this->classObject;
        switch ($this->resourceType) {
            case ClassResolver::RESOLVED_TYPE_CLASS:
                $this->instance = $object(...$arguments);
                break;
            case ClassResolver::RESOLVED_TYPE_PACKAGES:
                $this->instance = new $object(...$arguments);
                break;
        }

        return $this->instance;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return $this->instance;
    }
}
