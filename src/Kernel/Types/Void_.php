<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Types;

class Void_ extends Type implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = null;
    protected $nameInJava = 'void';
    protected $nameInPHP = 'void';

    public static function isValid($value): bool
    {
        return true;
    }
}
