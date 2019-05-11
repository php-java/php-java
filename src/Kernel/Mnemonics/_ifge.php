<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _ifge implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $value = Extractor::getRealValue($this->popFromOperandStack());

        if ($value >= 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
