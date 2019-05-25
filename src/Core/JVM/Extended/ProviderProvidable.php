<?php
namespace PHPJava\Core\JVM\Extended;

use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Kernel\Provider\ProviderInterface;

trait ProviderProvidable
{
    /**
     * @var ProviderInterface[]
     */
    private $providers = [];

    /**
     * @throws IllegalJavaClassException
     */
    public function getProvider(string $providerName): ProviderInterface
    {
        if (!isset($this->providers[$providerName])) {
            throw new IllegalJavaClassException($providerName . ' not provided.');
        }

        return $this->providers[$providerName];
    }
}
