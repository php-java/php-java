<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _getfield implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $cp = $cpInfo[$this->readUnsignedShort()];

        $get = $this->popFromOperandStack();

        $return = $get->getInstance($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString());

        if ($return !== null) {
            $this->pushToOperandStack($return);
            return;
        }
        throw new Exception('Cannot get to undefined Field ' . $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString() . '');
    }
}
