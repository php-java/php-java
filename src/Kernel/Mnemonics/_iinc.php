<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _iinc implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $const = $this->readByte();

        $value = Normalizer::getPrimitiveValue($this->getLocalStorage($index));

        $this->setLocalStorage($index, _Int::get($value + $const));
    }
}
