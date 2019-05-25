<?php
namespace PHPJava\Kernel\Core;

trait DependencyInjector
{
    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return (
     *           \PHPJava\Core\JVM\ConstantPool|
     *           \PHPJava\Core\JavaClass|
     *           \PHPJava\Core\JavaClassInvoker|
     *           \PHPJava\Kernel\Attributes\AttributeInfo|
     *           \PHPJava\Kernel\Provider\ProviderInterface|
     *           array
     *           )[]
     */
    public function getAnnotateInjections(array $annotations): array
    {
        return array_merge(
            $this->getNativeAnnotateInjections($annotations),
            $this->getProviderAnnotateInjections($annotations)
        );
    }

    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return (
     *           \PHPJava\Core\JVM\ConstantPool|
     *           \PHPJava\Core\JavaClass|
     *           \PHPJava\Core\JavaClassInvoker|
     *           \PHPJava\Kernel\Attributes\AttributeInfo|
     *           array
     *           )[]
     */
    private function getNativeAnnotateInjections(array $annotations): array
    {
        // Native annotation will inject a dependency.
        $injections = [];
        foreach (($annotations['native'] ?? []) as $native) {
            $injections[] = $this->dependencyInjectionProvider
                ->get(
                    trim($native)
                );
        }
        return $injections;
    }

    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return \PHPJava\Kernel\Provider\ProviderInterface[]
     */
    private function getProviderAnnotateInjections(array $annotations): array
    {
        $injections = [];
        foreach (($annotations['provider'] ?? []) as $provider) {
            $injections[] = $this->javaClassInvoker
                ->getProvider(
                    trim($provider)
                );
        }
        return $injections;
    }
}
