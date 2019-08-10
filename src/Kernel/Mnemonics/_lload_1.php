<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;

final class _lload_1 extends AbstractOperationCode implements OperationInterface
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
        $this->pushToOperandStack(
            _Long::get(
                $this->getLocalStorage(1)
            )
        );
    }
}
