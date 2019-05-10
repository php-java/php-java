<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Short;

final class _sipush implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->pushToOperandStack(new _Short($this->readShort()));
    }
}
