<?php
namespace PHPJava\Kernel\Provider;

interface ProviderInterface
{
    public function add($key, $value);
    public function get($key, ...$arguments);
}
