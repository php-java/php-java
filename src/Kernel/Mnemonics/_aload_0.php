<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Imitation\java\lang\_Object;
use PHPJava\Utilities\BinaryTool;

final class _aload_0 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 0
     */
    public function execute(): void
    {
        $this->pushToOperandStack($this->getLocalStorage(0));
    }
}
