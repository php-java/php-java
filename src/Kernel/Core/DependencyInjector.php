<?php
namespace PHPJava\Kernel\Core;

trait DependencyInjector
{
    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return (
     *           \PHPJava\Core\JVM\ConstantPool|
     *           \PHPJava\Core\JavaFileClass|
     *           \PHPJava\Core\JavaClassInvoker|
     *           \PHPJava\Kernel\Attributes\AttributeInfo|
     *           \PHPJava\Kernel\Provider\ProviderInterface|
     *           array
     *           )[]
     */
    public function getAnnotateInjections(string $phpDocument): array
    {
        return array_merge(
            $this->getNativeAnnotateInjections($phpDocument),
            $this->getProviderAnnotateInjections($phpDocument)
        );
    }

    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return (
     *           \PHPJava\Core\JVM\ConstantPool|
     *           \PHPJava\Core\JavaFileClass|
     *           \PHPJava\Core\JavaClassInvoker|
     *           \PHPJava\Kernel\Attributes\AttributeInfo|
     *           array
     *           )[]
     */
    private function getNativeAnnotateInjections(string $phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        // Native annotation will inject a dependency.
        if (!empty($documentBlock->getTagsByName('native'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('native') as $native) {
                $injections[] = $this->dependencyInjectionProvider->get(trim($native));
            }
            return $injections;
        }
        return [];
    }

    /**
     * @throws \PHPJava\Exceptions\ProviderException
     * @return \PHPJava\Kernel\Provider\ProviderInterface[]
     */
    private function getProviderAnnotateInjections(string $phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        if (!empty($documentBlock->getTagsByName('provider'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('provider') as $provider) {
                $injections[] = $this->javaClassInvoker->getProvider(trim($provider));
            }
            return $injections;
        }
        return [];
    }
}
