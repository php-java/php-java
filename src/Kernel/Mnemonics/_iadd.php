<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\BinaryTool;

final class _iadd implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $rightValue = $this->getStack();
        $leftValue = $this->getStack();

        if ($leftValue instanceof _Int) {
            $leftValue = $leftValue->getValue();
        }

        if ($rightValue instanceof _Int) {
            $rightValue = $rightValue->getValue();
        }

        $this->pushStack(BinaryTool::add($leftValue, $rightValue));
    }
}
