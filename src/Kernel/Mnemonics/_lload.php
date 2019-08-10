<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Long;

final class _lload extends AbstractOperationCode implements OperationCodeInterface
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

    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];

        $this->pushToOperandStack(
            _Long::get(
                $this->getLocalStorage($index)
            )
        );
    }
}
