<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Core\JVM\Invoker\InvokerInterface;

trait StaticConstructorInitializable
{
    /**
     * @var bool
     */
    private $isInstantiatedStaticInitializer = false;

    public function callStaticInitializerIfNotInstantiated(): InvokerInterface
    {
        if ($this->isInstantiatedStaticInitializer) {
            return $this;
        }
        $this->isInstantiatedStaticInitializer = true;
        if ($this->javaClassInvoker->getStatic()->getMethods()->has('<clinit>')) {
            $this->javaClassInvoker
                ->getStatic()
                ->getMethods()
                ->call(
                    '<clinit>'
                );
        }
        return $this;
    }
}
