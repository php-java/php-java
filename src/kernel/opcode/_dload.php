<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _dload implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a double value from a local variable #index
     */
    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $this->pushStack($this->getLocalstorage($index));
    }
}
