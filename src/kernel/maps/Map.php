<?php
namespace PHPJava\Kernel\Maps;

class Map
{
    public function getName(string $value): ?string
    {
        try {
            if (($key = array_search($value, (new \ReflectionClass($this))->getConstants(), true)) !== false) {
                return $key;
            }
        } catch (\ReflectionException $e) {
        }
        return null;
    }

    public function getValues(): array
    {
        try {
            $reflectionClass = new \ReflectionClass($this);
            return array_values($reflectionClass->getConstants());
        } catch (\ReflectionException $e) {
        }
        return [];
    }
}
