<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload_1 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 1.
     */
    public function execute(): void
    {
        $index = 1;
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
