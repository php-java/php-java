<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _iinc implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->getByteCodeStream()->readUnsignedByte();
        $const = $this->getByteCodeStream()->readByte();

        $this->setLocalstorage($index, $this->getLocalstorage($index) + $const);
    }
}
