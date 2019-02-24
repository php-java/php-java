<?php
namespace PHPJava\Bridge\java\lang;

use PHPJava\Kernel\Structures\_Utf8;

class _String
{
    private $object = null;

    public function __construct($object = null)
    {
        $this->object = $object;
    }

    public function equals($object)
    {

        if (!($this->object instanceof _Utf8)) {
            return false;
        }

        if ($object instanceof _String) {
            return $this->toString() === $object->toString();
        }

        return $this->toString() === $object;
    }

    public function toString()
    {
        return $this->__toString();

    }

    public function __toString()
    {
        if (!($this->object instanceof _Utf8)) {
            return (string) $this->object;
        }
        return $this->object->getString();
    }

}
