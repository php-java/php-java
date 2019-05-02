<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\ConverterException;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\Type;

class Normalizer
{

    /**
     * @param array $arguments
     * @param array $acceptedArguments
     * @return array
     * @throws ConverterException
     */
    public static function normalizeArguments(array $arguments, array $acceptedArguments): array
    {
        if (count($arguments) !== count($acceptedArguments)) {
            throw new ConverterException('Does not match arguments.');
        }

        foreach ($arguments as $key => &$argument) {
            /**
             * @var Type|Collection $argument
             */
            if ($argument instanceof Collection) {
                // TODO: convert an array contents.
                continue;
            }
            $realType = $acceptedArguments[$key] ?? null;
            if ($realType === null) {
                throw new ConverterException('Broken arguments parser.');
            }
            if ($realType['type'] === 'class') {
                // TODO: implements up-cast and down-cast
                continue;
            }
            $initiateClass = TypeResolver::TYPES_MAP[$realType['type']];
            if ($argument instanceof $initiateClass) {
                continue;
            }
            $argument = new $initiateClass(Extractor::realValue($argument));
        }

        return $arguments;
    }
}
