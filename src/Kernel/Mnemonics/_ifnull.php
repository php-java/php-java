<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _ifnull implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $branch = Extractor::getRealValue($this->popFromOperandStack());

        if ($branch === null) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
