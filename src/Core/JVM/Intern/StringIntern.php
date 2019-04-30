<?php
namespace PHPJava\Core\JVM\Intern;

use PHPJava\Exceptions\NotAllowedNumberOfTypesException;

class StringIntern implements InternInterface, \ArrayAccess, \Countable
{
    private $entries = [];

    public function __construct()
    {
    }

    public function getEntries()
    {
        return $this->entries;
    }

    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->entries[$offset];
    }

    public function count()
    {
        return count($this->entries);
    }

    public function offsetSet($offset, $value)
    {
        $this->entries[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->entries[$offset]);
    }
}
