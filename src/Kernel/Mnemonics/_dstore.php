<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

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
        $value = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->setLocalStorage(
            $index,
            $value
        );
    }
}
