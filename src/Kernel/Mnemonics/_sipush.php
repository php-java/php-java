<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Short;

final class _sipush extends AbstractOperationCode implements OperationInterface
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
        $this->pushToOperandStack(_Short::get($this->readShort()));
    }
}
