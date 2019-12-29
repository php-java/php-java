<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Int_;

final class _iushr extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $value2 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());
        $value1 = (int) Normalizer::getPrimitiveValue($this->popFromOperandStack());

        // See: https://stackoverflow.com/questions/14428193/php-unsigned-right-shift-malfunctioning
        $this->pushToOperandStack(
            Int_::get(($value1 >> $value2) & ~(1 << (8 * PHP_INT_SIZE - 1) >> ($value2 - 1)))
        );
    }
}
