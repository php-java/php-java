<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\TypeException;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Kernel\Types\_Array\Collection;
use PHPJava\Kernel\Types\_Boolean;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\Type;

class TypeResolver
{
    const PHP_TYPE_MAP = [
        'integer' => 'I',
        'float' => 'F',
        'double' => 'F',
        'string' => 'Ljava.lang.String',
    ];

    const AMBIGUOUS_TYPES_ON_PHP = [
        'long'   => 'int',
        'double' => 'float',
        // Char is same as Int on Java, but strict mode cannot decide Int or String on PHPJava.
        // 'char'   => 'int',
        'byte'   => 'int',
        'short'  => 'int',
    ];

    const SIGNATURE_MAP = [
        'B' => 'byte',
        'C' => 'char',
        'D' => 'double',
        'F' => 'float',
        'I' => 'int',
        'J' => 'long',
        'S' => 'short',
        'V' => 'void',
        'Z' => 'boolean',
        'L' => 'class',
    ];

    const TYPES_MAP = [
        'byte'    => _Byte::class,
        'char'    => _Char::class,
        'double'  => _Double::class,
        'float'   => _Float::class,
        'int'     => _Int::class,
        'long'    => _Long::class,
        'short'   => _Short::class,
        'boolean' => _Boolean::class,
    ];

    const PHP_TO_JAVA_MAP = [
        'integer' => 'int',
        'string' => 'java.lang.String',
        'float' => 'double',
        'double' => 'double',
    ];

    /**
     * @param $signature
     * @return string
     * @throws TypeException
     */
    public static function getMappedSignatureType($signature): string
    {
        if (isset(static::SIGNATURE_MAP[$signature])) {
            return static::SIGNATURE_MAP[$signature];
        }
        throw new TypeException('Passed undefined signature ' . $signature);
    }

    /**
     * @param $type
     * @return string
     */
    public static function resolve($type): string
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

    /**
     * @param $value
     * @return bool|mixed|string
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

    /**
     * @param $type
     * @return string
     */
    public static function convertJavaTypeSimplyForPHP($type): string
    {
        return static::AMBIGUOUS_TYPES_ON_PHP[$type] ?? $type;
    }

    /**
     * @param $arguments
     * @param string $defaultJavaArgumentType
     * @return array
     * @throws TypeException
     */
    public static function convertPHPtoJava($arguments, $defaultJavaArgumentType = 'java.lang.String'): array
    {
        $phpType = gettype($arguments);
        $deepArray = 0;
        if ($phpType === 'array') {
            $deepArray++;
            $getNestedValues = [];
            foreach ($arguments as $argument) {
                $getNestedValues[] = static::convertPHPtoJava($argument);
            }
            if (empty($getNestedValues)) {
                $flipped = array_flip(static::PHP_TYPE_MAP);
                $resolveType = static::SIGNATURE_MAP[static::resolve($defaultJavaArgumentType)[0]];
                if ($resolveType === 'class') {
                    return [
                        'type' => $resolveType,
                        'class_name' => $defaultJavaArgumentType,
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
            if ($arguments instanceof JavaClass) {
                return [
                    'type' => 'class',
                    'class_name' => $arguments->getClassName(false),
                    'deep_array' => $deepArray,
                ];
            }
            if ($arguments instanceof Type) {
                return [
                    'type' => $arguments->getTypeNameInJava(),
                    'deep_array' => $deepArray,
                ];
            }
            if ($arguments instanceof _Object) {
                return [
                    'type' => 'class',
                    'class_name' => ClassResolver::resolveNameByPath($arguments),
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

        if ($resolveType === 'class') {
            return [
                'type' => $resolveType,
                'class_name' => substr(static::PHP_TYPE_MAP[$phpType], 1),
                'deep_array' => $deepArray,
            ];
        }
        return [
            'type' => $resolveType,
            'deep_array' => $deepArray,
        ];
    }

    /**
     * @param string $a
     * @param string $b
     * @return bool
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function compare(string $a, string $b): bool
    {
        if ($a === $b) {
            return true;
        }

        $a = static::getExtendedClasses($a);
        $b = static::getExtendedClasses($b);
        
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
     * @param $class
     * @return array
     * @throws TypeException
     * @throws \ReflectionException
     */
    public static function getExtendedClasses($class): array
    {
        static $loadedExtendedRoots = [];
        $result = [];

        foreach (Formatter::parseSignature($class) as $signature) {
            if ($signature['type'] !== 'class') {
                $result[] = [[$signature['type']], []];
                continue;
            }
            $path = [];
            foreach (explode('.', $signature['class_name']) as $name) {
                $path[] = Runtime::PHP_PACKAGES_MAPS[$name] ?? $name;
            }
            $classPath = Runtime::PHP_PACKAGES_DIRECTORY . '\\' . implode('\\', $path);

            // Remove duplicated prefix
            $classPath = preg_replace(
                '/^(?:' . preg_quote(Runtime::PHP_PACKAGES_DIRECTORY, '/') . ')+/',
                Runtime::PHP_PACKAGES_DIRECTORY,
                $classPath
            );

            if (isset($loadedExtendedRoots[$classPath])) {
                $result[] = $loadedExtendedRoots[$classPath];
                continue;
            }

            $extendedClasses = array_merge(array_values(class_parents($classPath, true)), [$classPath]);
            $interfaces = array_values(class_implements($classPath, true));

            if (class_exists($classPath)) {
                $reflectionClass = new \ReflectionClass($classPath);
                if ($document = $reflectionClass->getDocComment()) {
                    $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
                        ->create($document);
                    if (!empty($documentBlock->getTagsByName('highPriority'))) {
                        $extendedClasses = array_map(
                            function (\phpDocumentor\Reflection\DocBlock\Tags\Generic $item) {
                                return (string) $item->getDescription();
                            },
                            $documentBlock->getTagsByName('parent')
                        );

                        $interfaces = array_map(
                            function (\phpDocumentor\Reflection\DocBlock\Tags\Generic $item) {
                                return (string) $item->getDescription();
                            },
                            $documentBlock->getTagsByName('interface')
                        );
                    }
                }
            }

            $result[] = $loadedExtendedRoots[$classPath] = [$extendedClasses, $interfaces];
        }

        array_walk_recursive($result, function (&$className) {
            $className = Formatter::convertPHPNamespacesToJava($className);
        });

        return $result;
    }

    /**
     * @param $value
     * @return _String|_Boolean|_Double|_Float|_Int|Collection
     * @throws TypeException
     */
    public static function convertPHPTypeToJavaType($value)
    {
        $type = gettype($value);
        switch ($type) {
            case 'string':
                return new _String($value);
            case 'int':
            case 'integer':
                return new _Int($value);
            case 'bool':
            case 'boolean':
                return new _Boolean($value);
            case 'float':
                return new _Float($value);
            case 'double':
                return new _Double($value);
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
}
