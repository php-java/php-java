<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Utilities\BinaryTool;

final class _lload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->readUnsignedByte();

        $this->pushToOperandStack(
            new _Long(
                $this->getLocalStorage($index)
            )
        );
    }
}
