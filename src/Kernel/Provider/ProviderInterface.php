<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Provider;

interface ProviderInterface
{
    public function add($key, $value);

    public function get($key, ...$arguments);
}
