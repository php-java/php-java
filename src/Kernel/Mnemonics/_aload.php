<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from a local variable #index.
     */
    public function execute(): void
    {
        $index = $this->readByte();
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
