<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Utilities\Extractor;

final class _lookupswitch implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $key = Extractor::getRealValue(
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
