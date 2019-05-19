<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\NormalizerException;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_Object;

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

            /**
             * @var Type $initiateClass
             */
            $value = $initiateClass::get(
                Extractor::getRealValue($value)
            );
        }

        return $values;
    }

    public static function normalizeFields(array $fields, JavaClassInterface $fromJavaClass = null): array
    {
        $newFields = [];
        foreach ($fields as $name => $value) {
            /**
             * @var _FieldInfo $value
             */
            $cp = $value->getConstantPool();
            $descriptor = Formatter::parseSignature($cp[$value->getDescriptorIndex()]->getString());
            [$type, $class] = TypeResolver::getType($descriptor[0]);
            switch ($type) {
                case TypeResolver::IS_PRIMITIVE:
                    /**
                     * @var Type $class
                     */
                    $newFields[$name] = $class::get();
                    break;
                case TypeResolver::IS_CLASS:
                    $newFields[$name] = ClassHandler::initialize(
                        _Object::class
                    );
                    break;
                default:
                    throw new NormalizerException('Failed to normalize fields.');
            }
        }
        return $newFields;
    }
}
