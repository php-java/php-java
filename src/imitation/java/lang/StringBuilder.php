<?php

namespace PHPJava\Imitation\java\lang;

class StringBuilder extends _Object
{
    private $sequence = '';

    public function append($arg)
    {
        if ($arg instanceof _String) {
            $this->sequence .= $arg->toString();
        } else {
            if (is_array($arg)) {
                $arg = implode($arg);
            }
            $this->sequence .= $arg;
        }
        return $this;
    }

    public function toString(): string
    {
        return $this->sequence;
    }

    public function __toString(): string
    {
        return $this->sequence;
    }
}
