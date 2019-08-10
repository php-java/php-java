<?php
namespace PHPJava\Kernel\Mnemonics;

final class _dstore_2 extends AbstractOperationCode implements OperationCodeInterface
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
        parent::execute();
        $this->setLocalStorage(2, $this->popFromOperandStack());
    }
}
