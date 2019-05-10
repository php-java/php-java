<?php

namespace PHPJava\Kernel\Types;

class _Boolean extends Type
{
    protected $nameInJava = 'boolean';
    protected $nameInPHP = 'boolean';

    const TRUE = 'true';
    const FALSE = 'false';

    public function __toString()
    {
        $value = (int) $this->getValue();
        return $value === 1
            ? static::TRUE
            : static::FALSE;
    }
}
