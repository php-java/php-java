<?php
namespace PHPJava\Kernel\Provider;

use PHPJava\Exceptions\ProviderException;

class Provider implements ProviderInterface
{
    private $entries = [];

    public function add($key, $value)
    {
        $this->entries[$key] = $value;
        return $this;
    }

    public function get($key, ...$arguments)
    {
        if (!isset($this->entries[$key])) {
            throw new ProviderException('Entry does not exist.');
        }
        if (is_callable($this->entries[$key])) {
            return ($this->entries[$key])(...$arguments);
        }
        return $this->entries[$key];
    }
}
