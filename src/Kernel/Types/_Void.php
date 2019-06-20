<?php
namespace PHPJava\Kernel\Types;

class _Void implements PrimitiveValueInterface
{
    const DEFAULT_VALUE = null;
    protected $nameInJava = 'void';
    protected $nameInPHP = 'void';
}
