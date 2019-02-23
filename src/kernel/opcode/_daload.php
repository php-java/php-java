<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _daload implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a double from an array
     */
    public function execute(): void
    {
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);
    }
}
