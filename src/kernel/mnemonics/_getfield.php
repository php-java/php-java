<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _getfield implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $cpInfo = $this->getCpInfo();

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
