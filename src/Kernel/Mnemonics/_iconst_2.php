<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;

final class _iconst_2 extends AbstractOperationCode implements OperationCodeInterface
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
        $this->pushToOperandStack(_Int::get(2));
    }
}
