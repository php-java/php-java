<?php
namespace PHPJava\Kernel\Mnemonics;

final class _goto extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        $offset = $this->readShort();

        $this->setOffset($this->getProgramCounter() + $offset);
    }
}
