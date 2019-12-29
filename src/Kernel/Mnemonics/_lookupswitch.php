<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;

final class _lookupswitch extends AbstractOperationCode implements OperationCodeInterface
{
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

        $default = $this->readInt();
        $npairs = $this->readUnsignedInt();
        $offsets = [];

        for ($i = 0; $i < $npairs; $i++) {
            $label = $this->readUnsignedInt();
            $offsets[(string) $label] = $this->readInt();
        }

        return $this->operands = new Operands(
            ['default', $default, ['defaultbyte1', 'defaultbyte2', 'defaultbyte3', 'defaultbyte4']],
            ['npairs', $npairs, ['npairs1', 'npairs2', 'npairs3', 'npairs4']],
            ['offsets', $offsets, ['match-offset']]
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
