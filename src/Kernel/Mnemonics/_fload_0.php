<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Float;

final class _fload_0 extends AbstractOperationCode implements OperationCodeInterface
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
        $this->pushToOperandStack(
            _Float::get(
                $this->getLocalStorage(0)
            )
        );
    }
}
