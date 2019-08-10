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
        return $this->operands ?? new Operands();
    }

    /**
     * store a double value into a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->readUnsignedByte();
        $value = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $this->setLocalStorage(
            $index,
            $value
        );
    }
}
