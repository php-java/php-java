<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\OperationException;
use PHPJava\Kernel\Maps\OpCode;

abstract class AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var null|Operands
     */
    protected $operands;

    protected $returnValue;

    /**
     * @var bool
     */
    protected $isExecuted = false;

    /**
     * @var array
     */
    protected $freezeOperandStacks = [];

    protected $isStackingOperation = false;

    public function getOperands(): ?Operands
    {
        return $this->operands ?? null;
    }

    /**
     * Execute.
     */
    public function execute(): void
    {
        $this->beforeExecute();
        $this->isExecuted = true;
    }

    public function returnValue()
    {
        return $this->returnValue;
    }

    public function isExecuted(): bool
    {
        return $this->isExecuted;
    }

    public function isStackingOperation(): bool
    {
        return $this->isStackingOperation;
    }

    public function getName(): string
    {
        return ltrim(
            preg_replace(
                '/.+\\\\([^$]+)$/',
                '$1',
                get_class($this)
            ),
            '_'
        );
    }

    public function getCode(): int
    {
        return (new \ReflectionClassConstant(
            OpCode::class,
            preg_replace(
                '/.+\\\\([^$]+)$/',
                '$1',
                get_class($this)
            )
        ))->getValue();
    }

    /**
     * Prepare an execution.
     */
    public function beforeExecute(): void
    {
    }

    /**
     * After treatment an execution.
     */
    public function afterExecute(): void
    {
        // Clear references.
        $this->poppedOperandStacks = [];
        $this->pushedOperandStacks = [];
    }

    public function getPoppedOperandStacks(): array
    {
        if (!$this->isExecuted) {
            throw new OperationException(
                __METHOD__ . ' cannot call before executing an operation because PHPJava cannot understands that popping several operand stacks beforehand.'
            );
        }
        return $this->poppedOperandStacks;
    }

    public function getPushedOperandStacks(): array
    {
        if (!$this->isExecuted) {
            throw new OperationException(
                __METHOD__ . ' cannot call before executing an operation because PHPJava cannot understands that pushing several operand stacks beforehand.'
            );
        }
        return $this->pushedOperandStacks;
    }
}
