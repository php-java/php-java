<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _anewarray implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * create a new array of references of length count and component
     * type identified by the class reference index (indexbyte1 << 8 + indexbyte2)
     * in the constant pool.
     */
    public function execute(): void
    {
        // Current class index for Constant Pool
        $this->readUnsignedShort();

        // Get an array size
        $count = Extractor::getRealValue(
            $this->popFromOperandStack()
        );

        // Make an array with object.
        $array = new \ArrayIterator(
            array_fill(
                0,
                $count,
                null
            )
        );

        $this->pushToOperandStackByReference(
            $array
        );
    }
}
