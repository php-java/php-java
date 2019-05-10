<?php
namespace PHPJava\Kernel\Mnemonics;

final class _aload_3 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 3.
     */
    public function execute(): void
    {
        $index = 3;
        $this->pushToOperandStack($this->getLocalStorage($index));
    }
}
