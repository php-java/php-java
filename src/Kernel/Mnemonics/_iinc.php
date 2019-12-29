<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Int_;

final class _iinc extends AbstractOperationCode implements OperationCodeInterface
{
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

        $this->setLocalStorage($index, Int_::get($value + $const));
    }
}
