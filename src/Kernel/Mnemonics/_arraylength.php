<?php
namespace PHPJava\Kernel\Mnemonics;

final class _arraylength implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $arrayref = $this->popFromOperandStack();
        $this->pushToOperandStack(count($arrayref->toArray()));
    }
}
