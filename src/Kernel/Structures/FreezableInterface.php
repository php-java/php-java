<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

interface FreezableInterface
{
    public function freeze(): void;
}
