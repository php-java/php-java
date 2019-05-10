<?php
namespace PHPJava\Kernel\Mnemonics;

final class _istore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $this->setLocalStorage($index, $this->popFromOperandStack());
    }
}
