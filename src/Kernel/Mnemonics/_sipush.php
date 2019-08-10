<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Short;

final class _sipush extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $byte = $this->readShort();

        return $this->operands = new Operands(
            ['byte', $byte, ['byte1', 'byte2']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $this->pushToOperandStack(_Short::get($this->getOperands()['byte']));
    }
}
