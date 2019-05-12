<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _dstore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * store a double value into a local variable #index.
     */
    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $value = Extractor::getRealValue($this->popFromOperandStack());

        $this->setLocalStorage(
            $index,
            $value
        );
    }
}
