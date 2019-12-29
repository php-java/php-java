<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Internal;

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

    public function __construct(string $className)
    {
        $this->className = $className;
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
