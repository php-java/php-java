<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aconst_null extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    /**
     * store into a reference in an array.
     */
    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(null);
    }
}
