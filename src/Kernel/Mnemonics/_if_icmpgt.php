<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _if_icmpgt implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $offset = $this->readShort();

        $rightOperand = Extractor::realValue($this->getStack());
        $leftOperand = Extractor::realValue($this->getStack());

        if ($leftOperand > $rightOperand) {
            $this->setOffset($this->getProgramCounter() + $offset);
        }
    }
}
