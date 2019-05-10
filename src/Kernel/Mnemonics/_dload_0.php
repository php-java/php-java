<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Double;

final class _dload_0 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->pushToOperandStack(
            new _Double(
                $this->getLocalStorage(0)
            )
        );
    }
}
