<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Structures\ClassInfo;
use PHPJava\Kernel\Structures\FloatInfo;
use PHPJava\Kernel\Structures\IntegerInfo;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Kernel\Types\_Int;

final class _ldc extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $index = $this->readUnsignedByte();

        return $this->operands = new Operands(
            ['index', $index, ['index']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $data = $cpInfo[$this->getOperands()['index']];

        $value = null;

        if ($data instanceof StringInfo) {
            $value = $cpInfo[$data->getStringIndex()];
            if ($value instanceof Utf8Info) {
                $value = $value->getStringObject();
            }
        } elseif ($data instanceof IntegerInfo) {
            $value = _Int::get($data->getBytes());
        } elseif ($data instanceof FloatInfo) {
            $value = \PHPJava\Kernel\Types\_Float::get($data->getBytes());
        } elseif ($data instanceof ClassInfo) {
            $value = $cpInfo[$data->getClassIndex()]->getStringObject();
        } else {
            $value = $cpInfo[$data->getStringIndex()];
        }

        $this->pushToOperandStack($value);
    }
}
