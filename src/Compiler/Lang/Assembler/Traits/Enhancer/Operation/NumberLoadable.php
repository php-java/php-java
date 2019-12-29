<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Short_;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait NumberLoadable
{
    public function assembleLoadNumber(int $value, string &$type = null): array
    {
        $loadOperation = null;
        $loadOperand = null;

        if ($value === 0) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_0;
        } elseif ($value === 1) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_1;
        } elseif ($value === 2) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_2;
        } elseif ($value === 3) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_3;
        } elseif ($value === 4) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_4;
        } elseif ($value === 5) {
            $type = Byte_::class;
            $loadOperation = OpCode::_iconst_5;
        } elseif ($value >= Byte_::MIN && $value <= Byte_::MAX) {
            $type = Byte_::class;
            $loadOperation = OpCode::_bipush;
            $loadOperand = $value;
        } elseif ($value >= Short_::MIN && $value <= Short_::MAX) {
            $type = Short_::class;
            $loadOperation = OpCode::_sipush;
            $loadOperand = $value;
        } elseif ($value >= Int_::MIN && $value <= Int_::MAX) {
            $this->getEnhancedConstantPool()
                ->addInteger($value);
            $type = Int_::class;
            $loadOperation = OpCode::_ldc;
            $loadOperand = $this->getConstantPoolFinder()
                ->find(
                    IntegerInfo::class,
                    $value
                );
        } else {
            throw new AssembleStructureException(
                sprintf(
                    'Unable to kind integer value: ' . $value
                )
            );
        }

        $operations = [];

        if ($loadOperand !== null) {
            $size = null;
            switch ($loadOperation) {
                case OpCode::_ldc:
                case OpCode::_bipush:
                    $size = Uint8::class;
                    break;
                case OpCode::_sipush:
                    $size = Uint16::class;
                    break;
                default:
                    throw new AssembleStructureException(
                        'Unsupported load operation: ' . $size
                    );
            }

            $loadOperand = Operand::factory(
                $size,
                $loadOperand
            );
        }

        // Add to operation

        if ($loadOperand === null) {
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                $loadOperation
            );
        } else {
            $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                $loadOperation,
                $loadOperand
            );
        }

        return $operations;
    }
}
