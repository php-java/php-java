<?php
namespace PHPJava\Compiler\Builder;

use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Maps\EntryMap;

class Attribute implements BuilderInterface, EntryInterface
{
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

    public function __construct(FinderResultInterface $constantPoolIndex)
    {
        $this->constantPoolIndex = $constantPoolIndex;
    }

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

    public function setValue(string $value): EntryInterface
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

    public function setAttributes(array $attributes): EntryInterface
    {
        $this->attributes = $attributes;
        return $this;
    }
}
