<?php
namespace PHPJava\Kernel\Mnemonics;

final class _dup implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->stacks[] = $this->stacks[$this->getCurrentStackIndex()] ?? null;
    }
}
