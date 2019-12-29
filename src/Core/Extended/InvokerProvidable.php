<?php
declare(strict_types=1);
namespace PHPJava\Core\Extended;

use PHPJava\Core\JVM\ClassInvokerInterface;

trait InvokerProvidable
{
    /**
     * @var ClassInvokerInterface
     */
    private $invoker;

    public function getInvoker(): ClassInvokerInterface
    {
        return $this->invoker;
    }
}
