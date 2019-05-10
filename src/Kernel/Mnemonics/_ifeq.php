<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _ifeq implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();
        $operand = Extractor::realValue($this->popFromOperandStack());

        if ($operand == 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
