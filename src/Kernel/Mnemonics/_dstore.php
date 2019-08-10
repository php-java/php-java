<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _dstore extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $index = $this->readUnsignedByte();

        return $this->operands = new Operands(
            ['index', $index, ['index']]
        );
    }

    /**
     * store a double value into a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];
        $value = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->setLocalStorage(
            $index,
            $value
        );
    }
}
