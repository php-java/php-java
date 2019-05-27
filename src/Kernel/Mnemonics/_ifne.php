<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _ifne implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $operand = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($operand != 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
