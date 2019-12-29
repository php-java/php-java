<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _anewarray extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $indexbyte = $this->readUnsignedShort();

        return $this->operands = new Operands(
            ['indexbyte', $indexbyte, ['indexbyte1', 'indexbyte2']]
        );
    }

    /**
     * create a new array of references of length count and component
     * type identified by the class reference index (indexbyte1 << 8 + indexbyte2)
     * in the constant pool.
     */
    public function execute(): void
    {
        parent::execute();
        // Current class index for Constant Pool
        $this->getOperands()['indexbyte'];

        // Get an array size
        $count = Normalizer::getPrimitiveValue(
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
