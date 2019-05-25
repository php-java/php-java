<?php
namespace PHPJava\Core\JVM\Extended;

use PHPJava\Core\JVM\AccessorInterface;

trait DynamicAccessorProvidable
{
    /**
     * @var AccessorInterface
     */
    private $dynamicAccessor;

    public function getDynamic(): AccessorInterface
    {
        return $this->dynamicAccessor;
    }
}
