<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

interface AttributeInterface
{
    public function execute(): void;
}
