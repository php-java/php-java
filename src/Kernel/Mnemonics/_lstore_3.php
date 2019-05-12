<?php
namespace PHPJava\Kernel\Mnemonics;

final class _lstore_3 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->setLocalStorage(3, $this->popFromOperandStack());
    }
}
