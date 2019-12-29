<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Exceptions\ResolverException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Float_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Long_;
use PHPJava\Kernel\Types\Short_;

class MnemonicResolver
{
    public static function resolveTypeByOpCode(Operation $operation): string
    {
        switch ($operation->getOpCode()) {
            case OpCode::_iload:
            case OpCode::_iload_0:
            case OpCode::_iload_1:
            case OpCode::_iload_2:
            case OpCode::_iload_3:
            case OpCode::_iconst_0:
            case OpCode::_iconst_1:
            case OpCode::_iconst_2:
            case OpCode::_iconst_3:
            case OpCode::_iconst_4:
            case OpCode::_iconst_5:
            case OpCode::_irem:
            case OpCode::_iadd:
            case OpCode::_isub:
            case OpCode::_idiv:
            case OpCode::_imul:
                return Int_::class;
            case OpCode::_fload:
            case OpCode::_fload_0:
            case OpCode::_fload_1:
            case OpCode::_fload_2:
            case OpCode::_fload_3:
                return Float_::class;
            case OpCode::_dload:
            case OpCode::_dload_0:
            case OpCode::_dload_1:
            case OpCode::_dload_2:
            case OpCode::_dload_3:
                return Double_::class;
            case OpCode::_lload:
            case OpCode::_lload_0:
            case OpCode::_lload_1:
            case OpCode::_lload_2:
            case OpCode::_lload_3:
                return Long_::class;
        }

        throw new ResolverException(
            sprintf(
                'Unable to resolve type by opcode: 0x%X',
                $operation->getOpCode()
            )
        );
    }

    public static function resolveStoreByNumberAndType(int $number, string $classType): int
    {
        $prefix = static::getAmbiguousOperationCodePrefixByType($classType);
        $suffix = '';
        if (static::inDefaultLocalStorageNumber($number)) {
            $suffix = '_' . $number;
        }

        $operationName = $prefix . 'store' . $suffix;

        return (new OpCode())
            ->getValue(
                '_' . $operationName
            );
    }

    public static function resolveLoadByNumberAndType(int $number, string $classType): int
    {
        $prefix = static::getAmbiguousOperationCodePrefixByType($classType);
        $suffix = '';
        if (static::inDefaultLocalStorageNumber($number)) {
            $suffix = '_' . $number;
        }

        $operationName = $prefix . 'load' . $suffix;

        return (new OpCode())
            ->getValue(
                '_' . $operationName
            );
    }

    protected static function getAmbiguousOperationCodePrefixByType(string $classType): string
    {
        $prefix = 'a';
        switch ($classType) {
            case Int_::class:
            case Short_::class:
            case Byte_::class:
            case Char_::class:
                $prefix = 'i';
                break;
            case Long_::class:
                $prefix = 'l';
                break;
            case Float_::class:
                $prefix = 'f';
                break;
            case Double_::class:
                $prefix = 'd';
                break;
        }

        return $prefix;
    }

    public static function isLDCOperation(int $opcode)
    {
        return $opcode === OpCode::_ldc
            || $opcode === OpCode::_ldc_w
            || $opcode === OpCode::_ldc2_w;
    }

    public static function inDefaultLocalStorageNumber(int $localStorageNumber): bool
    {
        return $localStorageNumber <= 3;
    }
}
