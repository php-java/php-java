<?php
namespace PHPJava\Compiler\Builder\Generator\Operation;

class Operand
{
    protected $type;
    protected $value;

    public static function factory(string $type, $value): self
    {
        $scopedValue = $value;
        return new static($type, $scopedValue);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __construct(string $type, &$value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function make(): array
    {
        return [
            $this->type,
            $this->value,
        ];
    }
}
