<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Utilities\BinaryTool;

final class _aload_1 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 1
     */
    public function execute(): void
    {
        $this->pushToOperandStack($this->getLocalStorage(1));
    }
}
