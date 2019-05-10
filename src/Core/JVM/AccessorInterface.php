<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Invoker\InvokerInterface;

interface AccessorInterface
{
    public function getFields(): FieldInterface;

    public function getMethods(): InvokerInterface;
}
