<?php

namespace PHPJava\Imitation\java\lang;

class StringBuilder
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

    public function toString()
    {
        return $this->sequence;
    }

    public function __toString()
    {
        return $this->sequence;
    }

}