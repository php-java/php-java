<?php

namespace PHPJava\Compiler\Builder\Signatures;

use PHPJava\Kernel\Maps\FieldAccessFlag as Flag;

class FieldAccessFlag extends AbstractAccessFlag implements AccessFlagInterface
{
    public function enablePublic(): self
    {
        $this->flagValue |= Flag::ACC_PUBLIC;
        return $this;
    }

    public function enableStatic(): self
    {
        $this->flagValue |= Flag::ACC_STATIC;
        return $this;
    }

    public function enableFinal(): self
    {
        $this->flagValue |= Flag::ACC_FINAL;
        return $this;
    }

    public function enableProtected(): self
    {
        $this->flagValue |= Flag::ACC_PROTECTED;
        return $this;
    }

    public function enablePrivate(): self
    {
        $this->flagValue |= Flag::ACC_PRIVATE;
        return $this;
    }

    public function enableSynthetic(): self
    {
        $this->flagValue |= Flag::ACC_SYNTHETIC;
        return $this;
    }

    public function enableTransient(): self
    {
        $this->flagValue |= Flag::ACC_TRANSIENT;
        return $this;
    }

    public function enableEnum(): self
    {
        $this->flagValue |= Flag::ACC_ENUM;
        return $this;
    }
}
