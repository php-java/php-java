<?php
namespace PHPJava\Kernel\Mnemonics;

final class _dup extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $dup = $this->stacks[$this->getCurrentStackIndex()];
        $this->pushToOperandStackByReference($dup);
    }
}
