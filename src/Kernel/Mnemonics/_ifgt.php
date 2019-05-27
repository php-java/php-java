<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _ifgt implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();
        $value = Normalizer::getPrimitiveValue($this->popFromOperandStack());
        if ($value > 0) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
