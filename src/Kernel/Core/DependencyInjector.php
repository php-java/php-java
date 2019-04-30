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
     * @param string $phpDocument
     * @return array
     * @throws NotSupportedInjectionTypesException
     */
    private function getNativeAnnotateInjections(string $phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        // Native annotation will dependency inject.
        if (!empty($documentBlock->getTagsByName('native'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('native') as $native) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Generic $native
                 */
                switch ($type = trim($native->getDescription())) {
                    case 'ConstantPool':
                        $injections[] = $this->getConstantPool();
                        break;
                    case 'JavaClass':
                        $injections[] = $this->javaClass;
                        break;
                    case 'JavaClassInvoker':
                        $injections[] = $this->javaClassInvoker;
                        break;
                    case 'Attributes':
                        $injections[] = $this->getAttributes();
                        break;
                    case 'OperandStacks':
                        $injections[] = $this->getStacks();
                        break;
                    case 'LocalStorages':
                        $injections[] = $this->getLocalStorages();
                        break;
                    case 'Options':
                        $injections[] = $this->options;
                        break;
                    default:
                        throw new NotSupportedInjectionTypesException('Not supported injection type: "' . $type . '"');
                }
            }
            return $injections;
        }
        return [];
    }

    /**
     * @param string $phpDocument
     * @return array
     */
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
