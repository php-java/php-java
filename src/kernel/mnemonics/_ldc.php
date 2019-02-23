<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;

final class _ldc implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $cpInfo = $this->getCpInfo();

        $data = $cpInfo[$this->getByteCodeStream()->readUnsignedByte()];

        $value = null;

        if ($data instanceof \JavaStructureString) {

            $value = $cpInfo[$data->getStringIndex()];

            if ($value instanceof \JavaStructureUtf8) {

                // convert java string
                $this->getInvoker()->loadPlatform('java.lang.String');

                $value = new \java\lang\String($value);

            }

        } else if (($data instanceof \JavaStructureInteger) || ($data instanceof \JavaStructureFloat)) {

            $value = $data->getBytes();

        } else {

            $value = $cpInfo[$cpInfo[$this->getByteCodeStream()->readUnsignedByte()]->getStringIndex()];

        }

        $this->pushStack($value);

    }

}
