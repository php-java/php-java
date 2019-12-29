<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

trait PHPMethodAnnotationAffectable
{
    public function getAnnotations(string $name): array
    {
        /**
         * @var \ReflectionMethod $method
         */
        $method = $this->findMethod($name);
        $annotations = [];
        if ($phpDocument = $method->getDocComment()) {
            $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
                ->create($phpDocument);

            foreach ($documentBlock->getTags() as $tag) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tag $tag
                 */
                $name = $tag->getName();
                if (!isset($annotations[$name])) {
                    $annotations[$name] = [];
                }
                $annotations[$name][] = $tag;
            }
        }
        return $annotations;
    }
}
