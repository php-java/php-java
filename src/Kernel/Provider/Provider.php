<?php
namespace PHPJava\Kernel\Provider;

use PHPJava\Exceptions\ProviderException;
use PHPJava\Utilities\ClassHandler;

class Provider implements ProviderInterface
{
    private $entries = [];

    /**
     * @return static
     */
    public function add($key, $value)
    {
        $this->entries[$key] = $value;
        return $this;
    }

    /**
     * @throws ProviderException
     */
    public function get($key, ...$arguments)
    {
        if (!isset($this->entries[$key])) {
            throw new ProviderException('Entry does not exist.');
        }
        if (is_callable($this->entries[$key])) {
            return ($this->entries[$key])(ClassHandler::DEFAULT_INITIALIZER, ...$arguments);
        }
        return $this->entries[$key];
    }
}
