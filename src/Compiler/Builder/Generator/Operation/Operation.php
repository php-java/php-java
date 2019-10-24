<?php
namespace PHPJava\Compiler\Builder\Generator\Operation;

use PHPJava\Kernel\Maps\OpCode;

class Operation implements OperationGeneratorInterface
{
    protected $opcode;
    protected $mnemonic;
    protected $operands = [];
    protected $enableEffectiveProgramCounter = false;

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

    public function enableEffectiveProgramCounter(bool $enable): self
    {
        $this->enableEffectiveProgramCounter = $enable;
        return $this;
    }

    public function isEffectiveProgramCounter(): bool
    {
        return $this->enableEffectiveProgramCounter;
    }

    public function getOperandTypes(): array
    {
        return array_map(
            static function (Operand $operand) {
                // return type
                return $operand
                    ->getType();
            },
            $this->operands
        );
    }

    public function getMnemonic()
    {
        return '_' . $this->mnemonic;
    }

    public function __construct(int $opcode, ?Operand ...$operands)
    {
        $this->opcode = $opcode;
        $this->operands = $operands;
        $this->mnemonic = ltrim((new OpCode())->getName($opcode), '_');
    }

    public function make(): array
    {
        return [
            $this->getOpCode(),
            $this->getOperands(),
        ];
    }
}
