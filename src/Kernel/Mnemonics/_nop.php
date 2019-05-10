<?php
namespace PHPJava\Kernel\Mnemonics;

final class _nop implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
    }
}
