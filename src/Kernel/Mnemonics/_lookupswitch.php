<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _lookupswitch extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

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
        $key = Normalizer::getPrimitiveValue(
            $this->popFromOperandStack()
        );

        // padding data
        $paddingData = 4 - (($this->getOffset()) % 4);
        if ($paddingData != 4) {
            $this->read($paddingData);
        }

        $offsets = [];
        $offsets['default'] = $this->readInt();
        $switchSize = $this->readUnsignedInt();

        for ($i = 0; $i < $switchSize; $i++) {
            $label = $this->readUnsignedInt();
            $offsets[(string) $label] = $this->readInt();
        }

        if (isset($offsets[$key])) {
            // goto PC
            $this->setOffset($this->getProgramCounter() + $offsets[$key]);
            return;
        }

        // goto default
        $this->setOffset($this->getProgramCounter() + $offsets['default']);
    }
}
