<?php
// String
namespace java\lang;

class String {

    private $Object = null;

    public function __construct ($Object) {

        $this->Object = $Object;

    }

    public function equals ($Object) {

        if ($this->Object instanceof \JavaStructureUtf8) {

            if ($Object instanceof \Java\lang\String) {

                if ($this->toString() === $Object->toString()) {

                    return true;

                }

            } else if ($this->toString() === $Object) {

                return true;

            }

        }

        return false;

    }

    public function toString () {

        return $this->Object->getString();

    }

    public function rawObject () {

        return $this->Object;

    }

    // php magic method
    public function __toString () {

        if (!($this->Object instanceof \JavaStructureUtf8)) {
            return (string) $this->Object;
        }
        
        return $this->Object->getString();

    }

}
