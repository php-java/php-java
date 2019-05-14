<?php
namespace PHPJava\Kernel\Types;

use PHPJava\Exceptions\TypeException;

class Type
{
    protected $value;
    protected $nameInJava;
    protected $nameInPHP;

    public function __construct($value)
    {
        if (!($value instanceof self) &&
            $value !== null &&
            !$this->isValid($value)
        ) {
            $type = gettype($value);
            throw new TypeException(
                '"' . ((string) $value) . '" is not expected in ' . get_class($this) . '.'
            );
        }

        $this->value = ($value instanceof self)
            ? $value->getValue()
            : $this->filter($value);
    }

    public function __debugInfo()
    {
        return [
            'value' => $this->value,
        ];
    }

    /**
     * @param $value
     * @throws TypeException
     * @return Type
     */
    public static function get($value)
    {
        static $instantiated = null;
        $identity = (string) $value;
        return $instantiated[$identity] = $instantiated[$identity] ?? new static($identity);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getTypeNameInJava()
    {
        return $this->nameInJava;
    }

    public function getTypeNameInPHP()
    {
        return $this->nameInPHP;
    }

    public function __toString()
    {
        return (string) $this->getValue();
    }

    protected function isValid($value)
    {
        return false;
    }

    protected function filter($value)
    {
        return $value;
    }
}
