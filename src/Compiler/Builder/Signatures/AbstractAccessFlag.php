<?php

namespace PHPJava\Compiler\Builder\Signatures;

abstract class AbstractAccessFlag implements AccessFlagInterface
{
    protected $flagValue = 0;

    public function make(): int
    {
        return $this->flagValue;
    }
}
