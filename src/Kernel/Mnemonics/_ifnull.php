<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _ifnull implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $branch = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        if ($branch === null) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
