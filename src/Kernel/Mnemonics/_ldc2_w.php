<?php
namespace PHPJava\Kernel\Mnemonics;

final class _ldc2_w implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $data = $cpInfo[$this->readUnsignedShort()];

        $this->pushToOperandStack($data->getBytes());
    }
}
