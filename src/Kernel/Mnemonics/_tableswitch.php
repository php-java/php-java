<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _tableswitch extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }

        // padding data
        $paddingData = 4 - (($this->getOffset()) % 4);
        if ($paddingData != 4) {
            $this->read($paddingData);
        }

        $offsets = [];
        $offsets['default'] = $default = $this->readInt();
        $lowByte = $this->readInt();
        $highByte = $this->readInt();

        for ($i = $lowByte; $i <= $highByte; $i++) {
            $offsets[$i] = $this->readInt();
        }

        return $this->operands = new Operands(
            ['default', $default, ['defaultbyte1', 'defaultbyte2', 'defaultbyte3', 'defaultbyte4']],
            ['lowByte', $lowByte, ['lowbyte1', 'lowbyte2', 'lowbyte3', 'lowbyte4']],
            ['highByte', $lowByte, ['highByte1', 'highByte2', 'highByte3', 'highByte4']],
            ['offsets', $offsets, ['jump offsets']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $key = Normalizer::getPrimitiveValue(
            $this->popFromOperandStack()
        );

        $offsets = $this->getOperands()['offsets'];

        if (isset($offsets[$key])) {
            // goto PC
            $this->setOffset($this->getProgramCounter() + $offsets[$key]);
            return;
        }

        // goto default
        $this->setOffset($this->getProgramCounter() + $this->getOperands()['default']);
    }
}
