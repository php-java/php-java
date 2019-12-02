<?php
namespace PHPJava\Compiler\Builder;

use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Maps\EntryMap;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;

class Attribute implements BuilderInterface, EntryInterface
{
    use ConstantPoolManageable;
    use ConstantPoolEnhanceable;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var bool
     */
    protected $hasAttribute = false;

    /**
     * @var FinderResultInterface
     */
    protected $constantPoolIndex;

    public function getConstantPoolIndex(): int
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->constantPoolIndex->getResult();
        return $result
            ->getEntryIndex();
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function hasAttribute(): bool
    {
        return $this->hasAttribute;
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

    public function getName(): string
    {
        return current(
            array_slice(
                explode(
                    '\\',
                    get_class($this)
                ),
                -1,
                1
            )
        );
    }

    public function beginPreparation(): Attribute
    {
        $attributeName = $this->getName();

        $this->getEnhancedConstantPool()
            ->addUtf8($attributeName);

        $this->constantPoolIndex = $this->getEnhancedConstantPool()
            ->findUtf8($attributeName);

        return $this;
    }
}
