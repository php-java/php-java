<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\NormalizerException;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\Type;

class Normalizer
{
    /**
     * @param array|Collection $values
     * @throws NormalizerException
     * @return array|Collection
     */
    public static function normalizeValues($values, array $normalizeTypes)
    {
        if (count($values) !== count($normalizeTypes)) {
            throw new NormalizerException('Does not match arguments.');
        }

        foreach ($values as $key => &$value) {
            $realType = $normalizeTypes[$key] ?? null;
            if ($realType === null) {
                throw new NormalizerException('Broken arguments parser.');
            }
            /**
             * @var Collection|Type $value
             */
            if ($value instanceof Collection) {
                $value = static::normalizeValues(
                    $value,
                    array_fill(
                        0,
                        count($value),
                        $realType
                    )
                );
                continue;
            }
            if ($realType['type'] === 'class') {
                // TODO: implements up-cast and down-cast
                continue;
            }
            $initiateClass = TypeResolver::TYPES_MAP[$realType['type']];
            if ($value instanceof $initiateClass) {
                continue;
            }
            $value = new $initiateClass(
                Extractor::realValue($value)
            );
        }

        return $values;
    }
}
