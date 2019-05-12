<?php
namespace PHPJava\Kernel\Mnemonics;

final class _lstore_2 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->setLocalStorage(2, $this->popFromOperandStack());
    }
}
