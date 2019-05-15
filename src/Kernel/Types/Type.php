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
            !static::isValid($value)
        ) {
            throw new TypeException(
                '"' . ((string) $value) . '" is not expected in ' . get_class($this) . '.'
            );
        }

        $this->value = static::filter(
            ($value instanceof self)
                ? $value->getValue()
                : $value
        );
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
        if (is_object($value)) {
            if ($value instanceof static) {
                return $value;
            }
            $identity = spl_object_hash($value);
        } else {
            $identity = (string) $value;
        }
        return $instantiated[$identity] = $instantiated[$identity] ?? new static($value);
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

    public static function isValid($value)
    {
        throw new TypeException('Not implemented type validation.');
    }

    protected static function filter($value)
    {
        return $value;
    }
}
