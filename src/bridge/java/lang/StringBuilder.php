<?php

namespace PHPJava\Bridge\java\lang;

class StringBuilder
{
    private $sequence = '';
    public function append($arg)
    {
        if ($arg instanceof _String) {
            $this->sequence .= $arg->toString();
        } else {
            $this->sequence .= $arg;
        }
        return $this;

    }

    public function toString($arg = null)
    {
        return $this->sequence;
    }

    public function __toString()
    {
        return $this->sequence;

    }

}