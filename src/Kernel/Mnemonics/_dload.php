<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\BinaryTool;

final class _dload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a double value from a local variable #index
     */
    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $this->pushToOperandStack(
            new _Double(
                $this->getLocalStorage($index)
            )
        );
    }
}
