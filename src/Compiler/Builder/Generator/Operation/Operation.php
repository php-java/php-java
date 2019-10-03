<?php
namespace PHPJava\Compiler\Builder\Generator\Operation;

class Operation
{
    protected $opcode;
    protected $operands = [];

    public static function create(int $opcode, ?Operand ...$operands): self
    {
        return new static($opcode, ...$operands);
    }

    public function getOpCode(): int
    {
        return $this->opcode;
    }

    public function getOperand(int $index): ?Operand
    {
        return $this->operands[$index] ?? null;
    }

    public function getOperands(): array
    {
        return array_reduce(
            $this->operands,
            static function ($carry, ?Operand $operand) {
                if ($operand === null) {
                    return $carry;
                }
                $carry[] = $operand
                    ->make();
                return $carry;
            },
            []
        );
    }

    public function __construct(int $opcode, ?Operand ...$operands)
    {
        $this->opcode = $opcode;
        $this->operands = $operands;
    }

    public function make(): array
    {
        return [
            $this->getOpCode(),
            $this->getOperands(),
        ];
    }
}
