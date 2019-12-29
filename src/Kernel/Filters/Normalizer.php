<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Filters;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\NormalizerException;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Formatter;

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
            if (!TypeResolver::isPrimitive($realType['type'])) {
                // TODO: implements up-cast and down-cast
                continue;
            }
            $initiateClass = $realType['type'];
            if ($value instanceof $initiateClass) {
                continue;
            }

            /**
             * @var Type $initiateClass
             */
            $value = $initiateClass::get(
                static::getPrimitiveValue($value)
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
            [$type, $class, $dimensionsOfArray] = TypeResolver::getType($descriptor[0]);

            switch ($type) {
                case TypeResolver::IS_PRIMITIVE:
                    $newFields[$name] = $class::get();
                    break;
                case TypeResolver::IS_CLASS:
                    $newFields[$name] = JavaClass::load('java.lang.Object');
                    break;
                case TypeResolver::IS_ARRAY:
                    $newFields[$name] = null;
                    break;
                default:
                    throw new NormalizerException('Failed to normalize fields.');
            }
        }
        return $newFields;
    }

    /**
     * @throws \PHPJava\Exceptions\TypeException
     * @return Type
     */
    public static function normalizeReturnValue($value, array $signatureArray)
    {
        /**
         * @var Type $typeClass
         */
        [$type, $typeClass] = TypeResolver::getType($signatureArray);

        return $type === TypeResolver::IS_PRIMITIVE
            ? $typeClass::get($value)
            : $value;
    }

    /**
     * @param $value
     * @return bool|float|int|string
     */
    public static function getPrimitiveValue($value)
    {
        if ($value instanceof PrimitiveValueInterface) {
            return TypeResolver::extractPrimitiveValueFromType($value);
        }
        return $value;
    }
}
