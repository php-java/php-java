<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Cache;

class Cache
{
    /**
     * @var mixed[]
     */
    private $items = [];

    public function fetchOrPush(string $key, callable $pushFunction, ...$parameters)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        return $this->items[$key] = $pushFunction(...$parameters);
    }
}
