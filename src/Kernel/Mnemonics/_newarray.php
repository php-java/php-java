<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\RuntimeException;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Types\Array_\Collection;

final class _newarray extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $atype = $this->readUnsignedByte();

        return $this->operands = new Operands(
            ['atype', $atype, ['atype']]
        );
    }

    public function execute(): void
    {
        parent::execute();
        $atype = $this->getOperands()['atype'];
        $count = Normalizer::getPrimitiveValue($this->popFromOperandStack());

        $array = array_fill(0, $count, null);

        // need reference
        $className = null;

        switch ($atype) {
            case 4: // T_BOOLEAN
                $className = 'Boolean_';
                break;
            case 5: // T_CHAR
                $className = 'Char_';
                break;
            case 6: // T_FLOAT
                $className = 'Float_';
                break;
            case 7: // T_DOUBLE
                $className = 'Double_';
                break;
            case 8: // T_BYTE
                $className = 'Byte_';
                break;
            case 9: // T_SHORT
                $className = 'Short_';
                break;
            case 10: // T_INT
                $className = 'Int_';
                break;
            case 11: // T_LONG
                $className = 'Long_';
                break;
            default:
                throw new RuntimeException('Unknown array type ' . $atype);
                break;
        }

        $className = '\\PHPJava\\Kernel\\Types\\' . $className;
        foreach ($array as &$item) {
            $item = new $className(null);
        }

        $ref = new Collection($array);

        $this->pushToOperandStackByReference($ref);
    }
}
