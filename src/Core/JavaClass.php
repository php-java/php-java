<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\JavaClassInvokerInterface;
use PHPJava\Core\Traits\ClassInvokable;

class JavaClass implements JavaClassInterface
{
    use ClassInvokable;

    /**
     * @var JavaGenericClassInterface
     */
    private $genericClass;

    /**
     * @var array
     */
    private $options = [];

    public function __construct(JavaGenericClassInterface $genericClass)
    {
        $this->genericClass = $genericClass;
    }

    public function getClassName(bool $shortName = false): string
    {
        return $this->genericClass->getClassName($shortName);
    }

    public function getPackageName(): ?string
    {
        return $this->genericClass->getPackageName();
    }

    /**
     * @return PHPJava\Kernel\Structures\_Classes[]
     */
    public function getInnerClasses(): array
    {
        return $this->genericClass->getInnerClasses();
    }

    /**
     * @return PHPJava\Core\JVM\_FieldInfo[]
     */
    public function getDefinedFields(): array
    {
        return $this->genericClass->getDefinedFields();
    }

    /**
     * @return PHPJava\Core\JVM\_MethodInfo[]
     */
    public function getDefinedMethods(): array
    {
        return $this->genericClass->getDefinedMethods();
    }

    public function getInvoker(): JavaClassInvokerInterface
    {
        return $this->genericClass->getInvoker();
    }

    public function getSuperClass()
    {
        return $this->genericClass->getSuperClass();
    }

    /**
     * @return PHPJava\Core\JVM\_AttributeInfo[]
     */
    public function getAttributes(): array
    {
        return $this->genericClass->getAttributes();
    }

    public function getClass()
    {
        return $this->genericClass->getClass();
    }

    public function getOptions($key = null)
    {
        return $this->genericClass->getOptions($key);
    }

    public function hasParentClass(): bool
    {
        return $this->genericClass->hasParentClass();
    }

    public function setParentClass(JavaClassInterface $class): self
    {
        $this->genericClass->setParentClass($class);
        return $this;
    }

    public function getParentClass(): JavaClassInterface
    {
        return $this->genericClass->getParentClass();
    }

    public function getConstantPool(): ConstantPool
    {
        return $this->genericClass->getConstantPool();
    }

    public function appendDebug($log): self
    {
        $this->genericClass->appendDebug($log);
        return $this;
    }

    public function debug(): void
    {
        $this->genericClass->debug();
    }
}
