<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _idiv implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $value2 = $this->getStack();
        $value1 = $this->getStack();

        $this->pushStack(
            new _Double(
                BinaryTool::div(
                    Extractor::realValue($value1),
                    Extractor::realValue($value2)
                )
            )
        );
    }
}
