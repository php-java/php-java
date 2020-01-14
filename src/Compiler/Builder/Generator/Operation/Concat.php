<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Generator\Operation;

class Concat
{
    protected $operations = [];

    public static function factory(Operation ...$operations): self
    {
        return new static(...$operations);
    }

    public function __construct(Operation ...$operations)
    {
        $this->operations = $operations;
    }

    public function __debugInfo()
    {
        return [
            'size' => count($this->operations),
            'operations' => '(omitted...)',
        ];
    }

    public function append(Operation ...$operations): self
    {
        $this->operations = array_merge(
            $this->operations,
            $operations
        );
        return $this;
    }

    public function expand(): array
    {
        return $this->operations;
    }
}
