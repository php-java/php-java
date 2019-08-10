<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Int;

final class _iinc extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $index = $this->readUnsignedByte();
        $const = $this->readByte();

        return $this->operands = new Operands(
            ['index', $index, ['index']],
            ['const', $const, ['const']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $index = $this->getOperands()['index'];
        $const = $this->getOperands()['const'];

        $value = Normalizer::getPrimitiveValue($this->getLocalStorage($index));

        $this->setLocalStorage($index, _Int::get($value + $const));
    }
}
