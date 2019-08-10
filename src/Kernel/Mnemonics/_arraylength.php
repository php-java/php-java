<?php
namespace PHPJava\Kernel\Mnemonics;

final class _arraylength extends AbstractOperationCode implements OperationCodeInterface
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
        $arrayref = $this->popFromOperandStack();
        $this->pushToOperandStack(
            count($arrayref)
        );
    }
}
