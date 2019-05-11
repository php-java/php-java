<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Extractor;

final class _iinc implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $index = $this->readUnsignedByte();
        $const = $this->readByte();

        $value = Extractor::getRealValue($this->getLocalStorage($index));

        $this->setLocalStorage($index, _Int::get($value + $const));
    }
}
