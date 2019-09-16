<?php
namespace PHPJava\Compiler\Builder\Structures;

use PHPJava\Compiler\Builder\BuilderInterface;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Maps\EntryMap;

class ClassFileStructure implements BuilderInterface
{
    private $minorVersion;
    private $majorVersion;

    /**
     * @var FinderResultInterface
     */
    private $thisClass;

    /**
     * @var FinderResultInterface
     */
    private $superClass;
    private $constantPool = [];
    private $accessFlags = 0;
    private $fields = [];
    private $methods = [];
    private $interfaces = [];
    private $attributes = [];

    public function setMinorVersion(int $version): self
    {
        $this->minorVersion = $version;
        return $this;
    }

    public function setMajorVersion(int $version): self
    {
        $this->majorVersion = $version;
        return $this;
    }

    public function setConstantPool(array $cp): self
    {
        $this->constantPool = $cp;
        return $this;
    }

    public function setThisClass(FinderResultInterface $constantPoolIndex): self
    {
        $this->thisClass = $constantPoolIndex;
        return $this;
    }

    public function setSuperClass(FinderResultInterface $constantPoolIndex): self
    {
        $this->superClass = $constantPoolIndex;
        return $this;
    }

    public function setInterfaces(array $interfaces): self
    {
        $this->interfaces = $interfaces;
        return $this;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function setMethods(array $methods): self
    {
        $this->methods = $methods;
        return $this;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function setAccessFlags(int $accessFlags): self
    {
        $this->accessFlags = $accessFlags;
        return $this;
    }

    public function getMinorVersion(): int
    {
        return $this->minorVersion;
    }

    public function getMajorVersion(): int
    {
        return $this->majorVersion;
    }

    public function getConstantPool(): array
    {
        return $this->constantPool;
    }

    public function getThisClass(): int
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->thisClass->getResult();
        return $result
            ->getEntryIndex();
    }

    public function getSuperClass(): int
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->superClass->getResult();
        return $result
            ->getEntryIndex();
    }

    public function getInterfaces(): array
    {
        return $this->interfaces;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getMethods(): array
    {
        return $this->methods;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getAccessFlags(): int
    {
        return $this->accessFlags;
    }
}
