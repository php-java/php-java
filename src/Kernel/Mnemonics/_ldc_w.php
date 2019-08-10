<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Structures\IntegerInfo;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;

final class _ldc_w extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $data = $cpInfo[$this->readUnsignedShort()];

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
