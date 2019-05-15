<?php
namespace PHPJava\Kernel\Mnemonics;

final class _multianewarray implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cp = $this->getConstantPool();
        $index = $this->readUnsignedShort();
        $dimensions = $this->readByte();

        $descriptor = $cp[$cp[$index]->getClassIndex()]->getString();

        var_dump($descriptor, $dimensions);
        exit();
    }
}
