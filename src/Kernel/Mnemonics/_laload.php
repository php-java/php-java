<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _laload implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a long from an array
     */
    public function execute(): void
    {
        $index = $this->getStack();
        $arrayref = $this->getStack();

        $this->pushStack($arrayref[$index]);
    }
}
