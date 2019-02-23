<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _lushr implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $value1 = $this->getStack();
        $value2 = $this->getStack();

        $this->pushStack(BinaryTool::unsignedShiftRight($value1, $value2, 8));
    }
}
