<?php
namespace PHPJava\Kernel\Types;

class _Void extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = null;
    protected $nameInJava = 'void';
    protected $nameInPHP = 'void';

    public static function isValid($value): bool
    {
        return true;
    }
}
