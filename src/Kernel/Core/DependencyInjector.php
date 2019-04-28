<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Exceptions\NotSupportedInjectionTypesException;

trait DependencyInjector
{
    public function getNativeAnnotateInjections($phpDocument): array
    {
        $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create($phpDocument);

        // Native annotation will dependency inject.
        if (!empty($documentBlock->getTagsByName('native'))) {
            $injections = [];
            foreach ($documentBlock->getTagsByName('native') as $nativeClass) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Generic $nativeClass
                 */
                switch ($type = trim($nativeClass->getDescription())) {
                    case 'ConstantPool';
                        $injections[] = $this->getConstantPool();
                        break;
                    case 'JavaClass';
                        $injections[] = $this->javaClass;
                        break;
                    case 'JavaClassInvoker';
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
}
