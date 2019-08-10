<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;

final class _dload extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    /**
     * load a double value from a local variable #index.
     */
    public function execute(): void
    {
        parent::execute();
        $index = $this->readUnsignedByte();
        $this->pushToOperandStack(
            _Double::get(
                $this->getLocalStorage($index)
            )
        );
    }
}
