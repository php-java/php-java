<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _newarray implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $atype = $this->getByteCodeStream()->readUnsignedByte();
        $count = $this->getStack();
        
        // need reference
        $ref = new ArrayIterator(array_fill(0, $count, null));
        $this->pushStackByReference($ref);
    }
}
