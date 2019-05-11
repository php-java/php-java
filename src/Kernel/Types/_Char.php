<?php

namespace PHPJava\Kernel\Types;

class _Char extends Type
{
    protected $nameInJava = 'char';
    protected $nameInPHP = 'string';

    public function __toString()
    {
        $value = $this->getValue();
        return ctype_digit($value)
            ? chr($value)
            : $value;
    }
}
