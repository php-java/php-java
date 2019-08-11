<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Packages\java\lang\UnsupportedOperationException;

final class _ldc2_w extends AbstractOperationCode implements OperationCodeInterface
{
    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $indexbyte = $this->readUnsignedShort();

        return $this->operands = new Operands(
            ['indexbyte', $indexbyte, ['indexbyte1', 'indexbyte2']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $data = $cpInfo[$this->getOperands()['indexbyte']];
        $value = null;

        if (($data instanceof \PHPJava\Kernel\Structures\LongInfo)) {
            $value = _Long::get($data->getBytes());
        } elseif ($data instanceof \PHPJava\Kernel\Structures\DoubleInfo) {
            $value = _Double::get($data->getBytes());
        } else {
            throw new UnsupportedOperationException('Unsupported operation.');
        }

        $this->pushToOperandStack($value);
    }
}
