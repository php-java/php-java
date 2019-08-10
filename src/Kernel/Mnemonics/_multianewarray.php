<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Utilities\Formatter;

final class _multianewarray extends AbstractOperationCode implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $cp = $this->getConstantPool();
        $index = $this->readUnsignedShort();
        $dimensions = $this->readByte();

        $descriptor = Formatter::parseSignature(
            $cp[$cp[$index]->getClassIndex()]->getString()
        );

        $counts = array_fill(0, $dimensions, 0);

        for ($i = $dimensions - 1; $i >= 0; $i--) {
            $counts[$i] = Normalizer::getPrimitiveValue(
                $this->popFromOperandStack()
            );
        }

        $data = null;
        $multiDimensionArray = $this->makeMultiDimensionArray(
            $data,
            $counts,
            $descriptor[0]['class_name'] ?? $descriptor[0]['type'],
            0,
            $dimensions
        );

        $this->pushToOperandStackByReference($multiDimensionArray);
    }

    /**
     * @param $array
     * @return $this
     */
    private function makeMultiDimensionArray($array, array $counts, string $type, int $currentDimension, int $maxDimension)
    {
        $newArray = (new Collection())->setType($type);
        for ($i = 0; $i < $counts[$currentDimension]; $i++) {
            if ($currentDimension === $maxDimension - 1) {
                $newArray[$i] = null;
                continue;
            }
            $collection = (new Collection())->setType($type);
            $newArray[$i] = $this->makeMultiDimensionArray(
                $collection,
                $counts,
                $type,
                $currentDimension + 1,
                $maxDimension
            );
        }
        return $newArray;
    }
}
