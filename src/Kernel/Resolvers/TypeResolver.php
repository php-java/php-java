<?php
namespace PHPJava\Kernel\Resolvers;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\TypeException;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Utilities\Formatter;

class TypeResolver
{
    const IS_CLASS = 'IS_CLASS';
    const IS_PRIMITIVE = 'IS_PRIMITIVE';
    const IS_ARRAY = 'IS_ARRAY';

    const PHP_TYPE_MAP = [
        'integer' => 'I',
        'float' => 'F',
        'double' => 'F',
        'string' => 'Ljava.lang.String',
        'boolean' => 'Z',
    ];

    const AMBIGUOUS_TYPES_ON_PHP = [
        _Long::class => _Int::class,
        _Double::class => _Float::class,
        // Char is same as Int on Java, but strict mode cannot decide Int or String on PHPJava.
        // 'char'   => 'int',
        _Byte::class => _Int::class,
        _Short::class => _Int::class,
    ];

    const SIGNATURE_MAP = [
        'B' => _Byte::class,
        'C' => _Char::class,
        'D' => _Double::class,
        'F' => _Float::class,
        'I' => _Int::class,
        'J' => _Long::class,
        'S' => _Short::class,
        'V' => _Void::class,
        'Z' => _Boolean::class,
        'L' => 'class',
    ];

    const TYPES_MAP = [
        'byte' => _Byte::class,
        'char' => _Char::class,
        'double' => _Double::class,
        'float' => _Float::class,
        'int' => _Int::class,
        'long' => _Long::class,
        'short' => _Short::class,
        'boolean' => _Boolean::class,
        'void' => _Void::class,
    ];

    const PHP_SCALAR_MAP = [
        // [ TypeClass, Instantiation ]
        'float' => [_Float::class, false],
        'double' => [_Float::class, false],
        'integer' => [_Int::class, false],
        'boolean' => [_Boolean::class, false],
    ];

    const PHP_TO_JAVA_MAP = [
        'integer' => _Int::class,
        'string' => _String::class,
        'float' => _Double::class,
        'double' => _Double::class,
    ];

    /**
     * @throws TypeException
     */
    public static function getMappedSignatureType(string $signature): string
    {
        if (isset(static::SIGNATURE_MAP[$signature])) {
            return static::SIGNATURE_MAP[$signature];
        }
        throw new TypeException('Passed undefined signature ' . $signature);
    }

    public static function resolveSignatureByType(string $classType): string
    {
        $signatureMap = array_flip(static::SIGNATURE_MAP);
        $signatureName = $signatureMap[$classType] ?? null;

        if ($signatureName === null) {
            throw new TypeException('Unknown signature: ' . $classType);
        }

        return $signatureName;
    }

    public static function resolve(string $type): string
    {
        $flipped = array_flip(static::SIGNATURE_MAP);
        if (isset($flipped[$type])) {
            if (!(GlobalOptions::get('strict') ?? Runtime::STRICT)) {
                $ambiguousType = static::AMBIGUOUS_TYPES_ON_PHP[$type] ?? $type;
                return $flipped[$ambiguousType] ?? ('L' . $ambiguousType);
            }
            return $flipped[$type];
        }
        return 'L' . $type;
    }

    public static function extractPrimitiveValueFromType(Type $value)
    {
        $extractedValue = (string) $value->getValue();
        if ($value instanceof _Int || $value instanceof _Long || $value instanceof _Byte) {
            return (int) $extractedValue;
        }
        if ($value instanceof _Float || $value instanceof _Double) {
            return (float) $extractedValue;
        }
        if ($value instanceof _Boolean) {
            return $extractedValue === 'true' ? true : false;
        }

        return $extractedValue;
    }

    /**
     * @param array $signatureArray a formatted signature array
     * @throws TypeException
     * @return string[]
     */
    public static function getType(array $signatureArray): array
    {
        $typeName = $type = $signatureArray['type'];
        $signatureType = static::IS_PRIMITIVE;
        if (!static::isPrimitive($type)) {
            $signatureType = static::IS_CLASS;
        }
        if ($signatureArray['deep_array'] > 0) {
            $signatureType = static::IS_ARRAY;
        }
        if ($typeName === null) {
            throw new TypeException('Unknown type: ' . $type);
        }
        return [
            $signatureType,
            $typeName,
            $signatureArray['deep_array'],
        ];
    }

    /**
     * @return null|mixed|string
     */
    public static function resolveFromPHPType($value)
    {
        $type = gettype($value);
        $type = static::PHP_TYPE_MAP[$type][0];
        if ($type === 'L') {
            return substr(static::PHP_TYPE_MAP[$type], 1);
        }
        return static::SIGNATURE_MAP[$type] ?? null;
    }

    public static function convertJavaTypeSimplyForPHP(string $type): string
    {
        return static::AMBIGUOUS_TYPES_ON_PHP[$type] ?? $type;
    }

    /**
     * @throws TypeException
     * @return (int|string)[]
     */
    public static function convertPHPtoJava($arguments, string $defaultJavaArgumentType = _String::class): array
    {
        $phpType = gettype($arguments);
        $deepArray = 0;
        if ($phpType === 'array') {
            $deepArray++;
            $getNestedValues = [];
            foreach ($arguments as $argument) {
                $getNestedValues[] = static::convertPHPtoJava($argument, $defaultJavaArgumentType);
            }
            if (empty($getNestedValues)) {
                $flipped = array_flip(static::PHP_TYPE_MAP);
                $resolveType = static::SIGNATURE_MAP[static::resolve($defaultJavaArgumentType)[0]];
                if (!static::isPrimitive($resolveType)) {
                    return [
                        'type' => $defaultJavaArgumentType,
                        'deep_array' => $deepArray,
                    ];
                }
                return [
                    'type' => $resolveType,
                    'deep_array' => $deepArray,
                ];
            }
            $firstParameter = $getNestedValues[0];

            // TODO: Validate Parameters
            $firstParameter['deep_array'] += $deepArray;
            return $firstParameter;
        }
        if ($phpType === 'object') {
            if ($arguments instanceof JavaClassInterface) {
                return [
                    'type' => Formatter::convertPHPNamespacesToJava(
                        $arguments->getClassName()
                    ),
                    'deep_array' => $deepArray,
                ];
            }
            if ($arguments instanceof PrimitiveValueInterface) {
                return [
                    'type' => get_class($arguments),
                    'deep_array' => $deepArray,
                ];
            }
            if ($arguments instanceof Collection) {
                return [
                    'type' => $arguments->getType($defaultJavaArgumentType),
                    'deep_array' => $deepArray,
                ];
            }
            throw new TypeException(get_class($arguments) . ' does not supported to convert to Java\'s argument.');
        }
        $resolveType = static::SIGNATURE_MAP[static::PHP_TYPE_MAP[$phpType][0]] ?? null;

        if (!static::isPrimitive($resolveType)) {
            return [
                'type' => substr(static::PHP_TYPE_MAP[$phpType], 1),
                'deep_array' => $deepArray,
            ];
        }

        return [
            'type' => $resolveType,
            'deep_array' => $deepArray,
        ];
    }

    /**
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function compare(JavaClassInterface $javaClass, string $a, string $b): bool
    {
        if ($a === $b) {
            return true;
        }

        $a = static::getExtendedClasses($javaClass, $a);
        $b = static::getExtendedClasses($javaClass, $b);

        $resultClassesComparison = [];
        $resultInterfacesComparison = [];
        for ($i = 0, $size = max(count($a), count($b)); $i < $size; $i++) {
            if (!isset($a[$i], $b[$i])) {
                // No match absolutely.
                return false;
            }

            [$aClasses, $aInterfaces] = $a[$i];
            [$bClasses, $bInterfaces] = $b[$i];

            $resultClassesComparison[] = count(array_intersect($aClasses, $bClasses)) > 0;
            $resultInterfacesComparison[] = count(array_intersect($aInterfaces, $bInterfaces)) > 0;
        }

        return !in_array(false, $resultClassesComparison, true) ||
            !in_array(false, $resultInterfacesComparison, true);
    }

    /**
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function getExtendedClasses(JavaClassInterface $javaClass, string $class): array
    {
        static $loadedExtendedRoots = [];
        $result = [];
        foreach (Formatter::parseSignature($class) as $signature) {
            if (static::isPrimitive($signature['type'])) {
                $result[] = [[$signature['type']], []];
                continue;
            }

            $javaClass = JavaClass::load($signature['type'], [], false);
            $extendedClasses = $javaClass->getDefinedExtendedClasses();
            $interfaces = $javaClass->getDefinedInterfaceClasses();
            $result[] = $loadedExtendedRoots[$signature['type']] = [$extendedClasses, $interfaces];
        }

        array_walk_recursive($result, function (&$className) {
            $className = Formatter::convertPHPNamespacesToJava($className);
        });

        return $result;
    }

    /**
     * @throws TypeException
     * @return _Boolean|_Double|_Float|_Int|_String|Collection
     */
    public static function convertPHPTypeToJavaType($value)
    {
        $type = gettype($value);
        if ((static::PHP_SCALAR_MAP[$type] ?? null) !== null) {
            /**
             * @var Type $typeClass
             * @var bool $instantiation
             */
            [$typeClass, $instantiation] = static::PHP_SCALAR_MAP[$type];
            if ($instantiation) {
                return new $typeClass($value);
            }
            return $typeClass::get($value);
        }

        switch ($type) {
            case 'string':
                return JavaClass::load('java.lang.String')
                    ->getInvoker()
                    ->construct($value)
                    ->getJavaClass();
            case 'object':
                return $value;
            case 'array':
                $collectionData = [];
                foreach ($value as $item) {
                    $collectionData[] = static::convertPHPTypeToJavaType($item);
                }
                return new Collection($collectionData);
        }
        throw new TypeException('Cannot convert your definition');
    }

    public static function isPrimitive(string $value): bool
    {
        return in_array(
            Formatter::convertStringifiedPrimitiveTypeToKernelType($value),
            array_values(static::TYPES_MAP),
            true
        );
    }
}
