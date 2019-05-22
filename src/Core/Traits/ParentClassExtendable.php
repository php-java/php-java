<?php
namespace PHPJava\Core\Traits;

use PHPJava\Core\JavaClassInterface;

trait ParentClassExtendable
{
    public function hasParentClass(): bool
    {
        return isset($this->parentClass);
    }

    public function setParentClass(JavaClassInterface $class): self
    {
        $this->parentClass = $class;
        return $this;
    }

    public function getParentClass(): JavaClassInterface
    {
        return $this->parentClass;
    }
}
