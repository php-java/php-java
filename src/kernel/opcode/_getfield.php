<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _getfield implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();

        $cp = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $get = $this->getStack();

        $return = $get->getInstance($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString());

        if ($return !== null) {
            $this->pushStack($return);
        } else {
            throw new Exception('Cannot get ' . $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString() . '');
        }
    }
}
