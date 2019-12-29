<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Extended;

use PHPJava\Core\JVM\AccessorInterface;

trait StaticAccessorProvidable
{
    /**
     * @var AccessorInterface
     */
    private $staticAccessor;

    public function getStatic(): AccessorInterface
    {
        $this->staticAccessor
            ->getMethods()
            ->callStaticInitializerIfNotInstantiated();

        return $this->staticAccessor;
    }
}
