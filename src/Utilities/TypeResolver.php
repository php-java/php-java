<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\TypeException;
use PHPJava\Imitation\java\lang\_Object;
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
        'char'   => 'java.lang.String',
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

    public static function resolve($type): string
    {
        $flipped = array_flip(static::SIGNATURE_MAP);
        if (isset($flipped[$type])) {
            return $flipped[$type];
        }
        return 'L' . $type;
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
     */
    public static function compare(string $a, string $b): bool
    {
        if ($a === $b) {
            return true;
        }

        $a = static::getExtendedClasses($a);
        $b = static::getExtendedClasses($b);

        if (count($a) !== count($b)) {
            return false;
        }

        $resultComparison = [];
        for ($i = 0, $size = count($a); $i < $size; $i++) {
            $resultComparison[] = count(array_intersect($a[$i], $b[$i])) > 0;
        }

        return !in_array(
            false,
            $resultComparison,
            true
        );
    }

    /**
     * @param $class
     * @return array
     * @throws TypeException
     */
    public static function getExtendedClasses($class): array
    {
        $result = [];
        foreach (Formatter::parseSignature($class) as $signature) {
            if ($signature['type'] !== 'class') {
                $result[] = [$signature['type']];
                continue;
            }
            $path = [];
            foreach (explode('.', $signature['class_name']) as $name) {
                $path[] = Runtime::PHP_IMITATION_MAPS[$name] ?? $name;
            }
            $classPath = Runtime::PHP_IMITATION_DIRECTORY . '\\' . implode('\\', $path);

            // Remove duplicated prefix
            $classPath = preg_replace(
                '/^(?:' . preg_quote(Runtime::PHP_IMITATION_DIRECTORY, '/') . ')+/',
                Runtime::PHP_IMITATION_DIRECTORY,
                $classPath
            );

            $extendedClasses = [];
            $extendedClasses[] = $rootClass = $classPath;
            while (($getRootClass = get_parent_class($rootClass)) !== false) {
                $extendedClasses[] = $rootClass = '\\' . $getRootClass;
            }

            $result[] = $extendedClasses;

        }

        array_walk_recursive($result, function (&$className) {
            $newClassName = explode(
                '.',
                str_replace(
                    [Runtime::PHP_IMITATION_DIRECTORY . '\\', '\\'],
                    ['', '.'],
                    $className
                )
            );
            foreach ($newClassName as $key => $value) {
                $newClassName[$key] = array_flip(Runtime::PHP_IMITATION_MAPS)[$value] ?? $value;
            }

            $newClassName = implode('.', $newClassName);
            $className = $newClassName;
        });

        return $result;
    }
}
