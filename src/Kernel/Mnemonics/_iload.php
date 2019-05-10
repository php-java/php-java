<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;

final class _iload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->readUnsignedByte();

        $this->pushToOperandStack(
            new _Int(
                $this->getLocalStorage($index)
            )
        );
    }
}
