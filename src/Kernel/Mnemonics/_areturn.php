<?php
namespace PHPJava\Kernel\Mnemonics;

final class _areturn implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute()
    {
        return $this->popFromOperandStack();
    }
}
