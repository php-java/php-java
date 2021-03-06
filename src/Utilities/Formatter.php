<?php
declare(strict_types=1);
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\MethodInfo;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Packages\java\lang\String_;

class Formatter
{
    const BUILT_IN_PACKAGE = 'BUILT_IN_PACKAGE';
    const USER_DEFINED_PACKAGE = 'USER_DEFINED_PACKAGE';

    /**
     * @throws \PHPJava\Exceptions\TypeException
     */
    public static function parseSignature(string $signature, int $i = 0): array
    {
        $data = [];
        $dimensionsOfArray = 0;

        for ($size = strlen($signature); $i < $size;) {
            switch ($signature[$i]) {
                case 'B':
                case 'C':
                case 'D':
                case 'F':
                case 'I':
                case 'J':
                case 'S':
                case 'V':
                case 'Z':
                    $data[] = [
                        'type' => TypeResolver::getMappedSignatureType($signature[$i]),
                        'dimensions_of_array' => $dimensionsOfArray,
                    ];
                    $dimensionsOfArray = 0;
                    break;
                case 'L':
                    // class name
                    $build = '';
                    // read to ;
                    for ($i++; $i < $size && $signature[$i] !== ';'; $i++) {
                        $build .= $signature[$i];
                    }
                    [, $className] = Formatter::convertJavaNamespaceToPHP($build);
                    $data[] = [
                        'type' => $className,
                        'dimensions_of_array' => $dimensionsOfArray,
                    ];
                    $dimensionsOfArray = 0;

                    break;
                case '[':
                    // array
                    $dimensionsOfArray++;
                    for ($i++; $signature[$i] === '['; $i++) {
                        $dimensionsOfArray++;
                    }
                    // loop
                    continue 2;
                case '(':
                    $build = '';
                    // read to )
                    for ($i++; $i < $size && $signature[$i] !== ')'; $i++) {
                        $build .= $signature[$i];
                    }
                    $data['arguments'] = ($build !== '') ? static::parseSignature($build) : [];
                    $data['arguments_count'] = count($data['arguments']);
                    break;
            }
            $i++;
        }
        return $data;
    }

    public static function buildArgumentsSignature(array $signatures): string
    {
        $string = '';
        foreach ($signatures as $signature) {
            $build = str_repeat('[', $signature['dimensions_of_array']);
            if (!TypeResolver::isPrimitive($signature['type'])) {
                $build .= 'L' . str_replace('/', '.', $signature['type']);
            } else {
                $build .= TypeResolver::resolve($signature['type']);
            }
            $string .= $build . ';';
        }
        return $string;
    }

    public static function signatureConvertToAmbiguousForPHP(array $signatures): array
    {
        $result = [];
        foreach ($signatures as $signature) {
            $type = $signature['type'];
            if (!TypeResolver::isPrimitive($type)) {
                $result[] = $signature;
                continue;
            }
            $type = TypeResolver::convertJavaTypeSimplyForPHP($type);
            if ($type === String_::class) {
                $result[] = [
                    'type' => $type,
                    'dimensions_of_array' => $signature['dimensions_of_array'],
                ];
                continue;
            }
            $signature['type'] = $type;
            $result[] = $signature;
        }
        return $result;
    }

    public static function buildSignature(string $type, int $dimensionsOfArray): string
    {
        $hasSignatureType = array_flip(TypeResolver::SIGNATURE_MAP)[$type] ?? null;
        return str_repeat('[', $dimensionsOfArray) . ($hasSignatureType ?? 'L' . static::convertPHPNamespacesToJava($type) . ';');
    }

    public static function formatClassPath(string $className)
    {
        return str_replace('.', '/', $className);
    }

    public static function convertPHPNamespacesToJava(string $className, string $mergeChar = '.'): string
    {
        $className = Formatter::formatClassPath(str_replace('/', '\\', $className));
        if (TypeResolver::isPrimitive($className)) {
            return $className;
        }
        $newClassName = explode(
            '.',
            str_replace(
                [ltrim(Runtime::PHP_PACKAGES_NAMESPACE, '\\') . '\\', '\\'],
                ['', '.'],
                ltrim($className, '\\')
            )
        );
        foreach ($newClassName as $key => $value) {
            $newClassName[$key] = array_flip(Runtime::PHP_PACKAGES_MAPS)[$value] ?? $value;
        }

        return implode($mergeChar, $newClassName);
    }

    public static function convertPrimitiveValueToJavaSignature(string $className): ?string
    {
        $signatureMap = array_flip(TypeResolver::SIGNATURE_MAP);
        $typeMap = array_flip(TypeResolver::TYPES_MAP);

        return $signatureMap[$typeMap[$className] ?? null] ?? null;
    }

    public static function convertJavaNamespaceToPHP(string $className): array
    {
        $className = str_replace('.', '/', $className);
        $newClassName = explode(
            '/',
            $className
        );

        foreach ($newClassName as $key => $value) {
            $newClassName[$key] = Runtime::PHP_PACKAGES_MAPS[$value] ?? $value;
        }

        $newClassName = explode('$', implode('\\', $newClassName));
        $inPackage = Runtime::PHP_PACKAGES_NAMESPACE . '\\' . $newClassName[0];
        if (class_exists($inPackage)) {
            return [static::BUILT_IN_PACKAGE, $inPackage];
        }
        return [static::USER_DEFINED_PACKAGE, implode('$', $newClassName)];
    }

    /**
     * @throws \PHPJava\Exceptions\TypeException
     */
    public static function beatifyMethodFromConstantPool(MethodInfo $method, ConstantPool $constantPool): string
    {
        $cpInfo = $constantPool->getEntries();
        $methodAccessFlags = $method->getAccessFlag();
        $accessFlags = [];
        $accessFlag = new MethodAccessFlag();
        foreach ($accessFlag->getValues() as $value) {
            if (($methodAccessFlags & $value) !== 0) {
                $accessFlags[] = strtolower(str_replace('ACC_', '', $accessFlag->getName($value)));
            }
        }

        $methodName = $cpInfo[$method->getNameIndex()]->getString();
        $descriptor = Formatter::parseSignature($cpInfo[$method->getDescriptorIndex()]->getString());
        $formattedArguments = str_replace(
            '/',
            '.',
            implode(
                ', ',
                array_map(
                    function ($argument) {
                        return static::convertVisuallyJavaSignature($argument['type']) . str_repeat('[]', $argument['dimensions_of_array']);
                    },
                    $descriptor['arguments']
                )
            )
        );

        $type = str_replace('/', '.', static::convertVisuallyJavaSignature($descriptor[0]['type']));
        $methodAccessibility = implode(' ', $accessFlags);

        return ltrim("{$methodAccessibility} {$type} {$methodName}({$formattedArguments})");
    }

    public static function convertVisuallyJavaSignature(string $type): string
    {
        $convertedType = static::convertPHPNamespacesToJava($type);
        $typeMap = array_flip(TypeResolver::TYPES_MAP);
        return $typeMap[$convertedType] ?? $convertedType;
    }

    public static function beatifyOperandStackItems(array $operandStacks = []): string
    {
        $formattedItems = [];

        foreach ($operandStacks as $operandStack) {
            if ($operandStack instanceof JavaClass) {
                $formattedItems[] = '< class: ' . ((string) $operandStack->getClassName()) . ' >';
                continue;
            }
            if ($operandStack instanceof PrimitiveValueInterface) {
                $formattedItems[] = '< primitive value: ' . ((string) $operandStack) . ' >';
                continue;
            }
            if ($operandStack instanceof \ArrayIterator) {
                $formattedItems[] = '< array: ' . implode(
                    ', ',
                    array_map(
                        function ($value) {
                            return static::beatifyOperandStackItems([$value]);
                        },
                        $operandStack->getArrayCopy()
                    )
                ) . ' >';
                continue;
            }
            $formattedItems[] = '< unknown: ' . ((string) $operandStack) . ' >';
        }

        return '[' . implode(', ', $formattedItems) . ']';
    }

    public static function getNamespaceAndClassName(string $classPath): array
    {
        $namespace = explode('.', $classPath);
        $className = array_pop($namespace);
        return [$namespace, $className];
    }

    public static function convertStringifiedPrimitiveTypeToKernelType(string $type)
    {
        return TypeResolver::TYPES_MAP[strtolower($type)] ?? $type;
    }

    public static function convertPHPPrimitiveTypeToJavaType(string $phpPrimitiveType)
    {
        $convertedPrimitiveType = static::convertStringifiedPrimitiveTypeToKernelType(
            $phpPrimitiveType
        );
        if ($phpPrimitiveType !== $convertedPrimitiveType) {
            return $convertedPrimitiveType;
        }
        switch ($phpPrimitiveType) {
            case 'string':
                return String_::class;
        }
        return $phpPrimitiveType;
    }
}
