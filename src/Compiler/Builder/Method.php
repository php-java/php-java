<?php
namespace PHPJava\Compiler\Builder;

use PHPJava\Compiler\Builder\Maps\EntryMap;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;

class Method implements BuilderInterface, EntryInterface
{
    use ConstantPoolManageable;
    use ConstantPoolEnhanceable;

    private $attributes = [];
    private $accessFlags = 0;

    /**
     * @var string
     */
    private $className;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $descriptor;

    public function __construct(
        int $accessFlags,
        string $className,
        string $name,
        string $descriptor
    ) {
        $this->accessFlags = $accessFlags;
        $this->className = $className;
        $this->name = $name;
        $this->descriptor = $descriptor;
    }

    public function getAccessFlags(): int
    {
        return $this->accessFlags;
    }

    public function getClassName(): string
    {
        return $this->className;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescriptor(): string
    {
        return $this->descriptor;
    }

    public function getNameIndex(): int
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->getEnhancedConstantPool()
            ->findUtf8($this->name)
            ->getResult();
        return $result
            ->getEntryIndex();
    }

    public function getDescriptorIndex(): int
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->getEnhancedConstantPool()
            ->findUtf8($this->descriptor)
            ->getResult();
        return $result
            ->getEntryIndex();
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function beginPreparation(): self
    {
        $this->getEnhancedConstantPool()
            ->addNameAndType(
                $this->getName(),
                $this->getDescriptor()
            );

        return $this;
    }
}
