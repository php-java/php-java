<?php

namespace PHPJava\Compiler\Builder\Signatures;

use PHPJava\Kernel\Maps\ClassAccessFlag as Flag;

class ClassAccessFlag extends AbstractAccessFlag implements AccessFlagInterface
{
    public function enablePublic(): self
    {
        $this->flagValue |= Flag::ACC_PUBLIC;
        return $this;
    }

    public function enableSuper(): self
    {
        $this->flagValue |= Flag::ACC_SUPER;
        return $this;
    }

    public function enableFinal(): self
    {
        $this->flagValue |= Flag::ACC_FINAL;
        return $this;
    }

    public function enableInterface(): self
    {
        $this->flagValue |= Flag::ACC_INTERFACE;
        return $this;
    }

    public function enableAbstract(): self
    {
        $this->flagValue |= Flag::ACC_ABSTRACT;
        return $this;
    }

    public function enableSynthetic(): self
    {
        $this->flagValue |= Flag::ACC_SYNTHETIC;
        return $this;
    }

    public function enableAnnotation(): self
    {
        $this->flagValue |= Flag::ACC_ANNOTATION;
        return $this;
    }

    public function enableEnum(): self
    {
        $this->flagValue |= Flag::ACC_ENUM;
        return $this;
    }

    public function enableModule(): self
    {
        $this->flagValue |= Flag::ACC_MODULE;
        return $this;
    }
}
