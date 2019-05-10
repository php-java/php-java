<?php
namespace PHPJava\Kernel\Mnemonics;

final class _istore_1 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->setLocalStorage(1, $this->popFromOperandStack());
    }
}
