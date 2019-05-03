<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Extractor;

final class _newarray implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $atype = $this->readUnsignedByte();
        $count = Extractor::getRealValue($this->popFromOperandStack());

        $array = array_fill(0, $count, null);

        // need reference
        $className = null;

        switch ($atype) {
            case 4: // T_BOOLEAN
                $className = '_Boolean';
                break;
            case 5: // T_CHAR
                $className = '_Char';
                break;
            case 6: // T_FLOAT
                $className = '_Float';
                break;
            case 7: // T_DOUBLE
                $className = '_Double';
                break;
            case 8: // T_BYTE
                $className = '_Byte';
                break;
            case 9: // T_SHORT
                $className = '_Short';
                break;
            case 10: // T_INT
                $className = '_Int';
                break;
            case 11: // T_LONG
                $className = '_Long';
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
