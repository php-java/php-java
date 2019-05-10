<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Exceptions\NotSupportedInjectionTypesException;

trait DependencyInjector
{
    public function getAnnotateInjections(string $phpDocument): array
    {
        return array_merge(
            $this->getNativeAnnotateInjections($phpDocument),
            $this->getProviderAnnotateInjections($phpDocument)
        );
    }

    /**
     * @throws NotSupportedInjectionTypesException
     */
    private function getNativeAnnotateInjections(string $phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        // Native annotation will inject a dependency.
        if (!empty($documentBlock->getTagsByName('native'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('native') as $native) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Generic $native
                 */
                $injections[] = $this->dependencyInjectionProvider->get(trim($native));
            }
            return $injections;
        }
        return [];
    }

    private function getProviderAnnotateInjections(string $phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        if (!empty($documentBlock->getTagsByName('provider'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('provider') as $provider) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Generic $provider
                 */
                $injections[] = $this->javaClassInvoker->getProvider(trim($provider));
            }
            return $injections;
        }
        return [];
    }
}
