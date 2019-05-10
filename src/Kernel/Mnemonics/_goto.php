<?php
namespace PHPJava\Kernel\Mnemonics;

final class _goto implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $this->setOffset($this->getProgramCounter() + $offset);
    }
}
