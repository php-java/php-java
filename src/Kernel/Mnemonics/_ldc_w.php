<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Structures\IntegerInfo;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;

final class _ldc_w extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

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

        if ($data instanceof StringInfo) {
            $value = $cpInfo[$data->getStringIndex()];

            if ($value instanceof Utf8Info) {
                $value = $value->getStringObject();
            }
        } elseif (($data instanceof IntegerInfo)) {
            $value = _Int::get($data->getBytes());
        } elseif ($data instanceof _Float) {
            $value = \PHPJava\Kernel\Types\_Float::get($data->getBytes());
        } else {
            $value = $cpInfo[$data->getStringIndex()];
        }

        $this->pushToOperandStack($value);
    }
}
