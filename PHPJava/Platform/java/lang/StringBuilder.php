<?php

namespace java\lang;

class StringBuilder {

    private $sequence = '';

    public function __construct () {

    }

    public function append ($arg) {

        if ($arg instanceof \java\lang\String) {

            $this->sequence .= $arg->toString();

        } else {

            $this->sequence .= $arg;

        }

        return $this;

    }

    public function toString ($arg = null) {

        return $this->sequence;

    }

    // php magic method
    public function __toString () {

        return $this->sequence;

    }

}