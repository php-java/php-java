<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload_2 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 2.
     */
    public function execute(): void
    {
        $index = 2;
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
