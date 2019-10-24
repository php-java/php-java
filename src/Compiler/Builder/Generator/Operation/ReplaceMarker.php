<?php
namespace PHPJava\Compiler\Builder\Generator\Operation;

class ReplaceMarker implements OperationGeneratorInterface
{
    protected $marker;
    protected $operandTypes = [];

    public static function create(int $marker, string ...$operandTypes): self
    {
        return new static($marker, ...$operandTypes);
    }

    public function getOpCode(): int
    {
        return $this->marker;
    }

    public function __construct(int $marker, string ...$operandTypes)
    {
        $this->marker = $marker;
        $this->operandTypes = $operandTypes;
    }

    public function is(string $marker): bool
    {
        return $this->marker === $marker;
    }

    public function getOperandTypes(): array
    {
        return $this->operandTypes;
    }
}
