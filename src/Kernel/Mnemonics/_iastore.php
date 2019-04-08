<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _iastore implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $data = Extractor::realValue($this->popFromOperandStack());
        $arrayref = Extractor::realValue($this->popFromOperandStack());
        $value = $this->popFromOperandStack();

        $value[$arrayref] = $data;
        $this->pushToOperandStack($value);
    }
}
