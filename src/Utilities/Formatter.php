<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\FormatterException;
use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Kernel\Types\PrimitiveValueInterface;
use PHPJava\Packages\java\lang\_String;

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
        $deepArray = 0;

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
                        'deep_array' => $deepArray,
                    ];
                    $deepArray = 0;
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
                        'deep_array' => $deepArray,
                    ];
                    $deepArray = 0;

                    break;
                case '[':
                    // array
                    $deepArray++;
                    for ($i++; $signature[$i] === '['; $i++) {
                        $deepArray++;
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
            $build = str_repeat('[', $signature['deep_array']);
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
            if ($type === _String::class) {
                $result[] = [
                    'type' => $type,
                    'deep_array' => $signature['deep_array'],
                ];
                continue;
            }
            $signature['type'] = $type;
            $result[] = $signature;
        }
        return $result;
    }

    public static function buildSignature(string $type, int $deepArray): string
    {
        switch ($type) {
            default:
                return str_repeat('[', $deepArray) . 'L' . static::convertPHPNamespacesToJava($type) . ';';
        }
        throw new FormatterException(
            sprintf(
                'Cannot build a signature (type: %s, array depth: %s)',
                $type,
                $deepArray
            )
        );
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
    public static function beatifyMethodFromConstantPool(_MethodInfo $method, ConstantPool $constantPool): string
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
                        return static::convertVisuallyJavaSignature($argument['type']) . str_repeat('[]', $argument['deep_array']);
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
}
