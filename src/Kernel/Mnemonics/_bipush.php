<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;

final class _bipush extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $byte = $this->readByte();

        return $this->operands = new Operands(
            ['byte', $byte, ['byte']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(_Int::get($this->getOperands()['byte']));
    }
}
