<?php
namespace PHPJava\Kernel\Internal;

use PHPJava\Kernel\Resolvers\ClassResolver;

final class InstanceDeferredLoader
{
    /**
     * @var object
     */
    private $instance;

    /**
     * @var \PHPJava\Core\JavaFileClass|string
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
     * @param \PHPJava\Core\JavaFileClass|string $classObject
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

    public function instantiate(...$arguments): object
    {
        $object = $this->classObject;
        switch ($this->resourceType) {
            case ClassResolver::RESOLVED_TYPE_CLASS:
                $this->instance = $object;
                break;
            case ClassResolver::RESOLVED_TYPE_PACKAGES:
                $this->instance = new $object(...$arguments);
                break;
        }

        return $this->instance;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function getInstance(): object
    {
        return $this->instance;
    }
}
