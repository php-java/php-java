<?php
namespace PHPJava\Utilities;

use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\FormatterException;
use PHPJava\Kernel\Maps\FieldAccessFlag;
use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Structures\_MethodInfo;

class Formatter
{
    /**
     * @param $signature
     * @param int $i
     * @return array
     * @throws \PHPJava\Exceptions\TypeException
     */
    public static function parseSignature($signature, $i = 0): array
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
                    $data[] = [
                        'type' => 'class',
                        'deep_array' => $deepArray,
                        'class_name' => $build,
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

    public static function buildArgumentsSignature($signatures): string
    {
        $string = '';
        foreach ($signatures as $signature) {
            $build = str_repeat('[', $signature['deep_array']);
            if ($signature['type'] === 'class') {
                $build .= 'L' . str_replace('/', '.', $signature['class_name']);
            } else {
                $build .= TypeResolver::resolve($signature['type']);
            }
            $string .= $build . ';';
        }
        return $string;
    }

    public static function signatureConvertToAmbiguousForPHP($signatures)
    {
        $result = [];
        foreach ($signatures as $signature) {
            $type = $signature['type'];
            if ($type === 'class') {
                $result[] = $signature;
                continue;
            }
            $type = TypeResolver::convertJavaTypeSimplyForPHP($type);
            if ($type === 'java.lang.String') {
                $result[] = [
                    'type' => 'class',
                    'deep_array' => $signature['deep_array'],
                    'class_name' => $type,
                ];
                continue;
            }
            $signature['type'] = $type;
            $result[] = $signature;
        }
        return $result;
    }

    /**
     * @param $className
     * @return string
     */
    public static function convertPHPNamespacesToJava($className): string
    {
        $className = str_replace('/', '\\', $className);
        $newClassName = explode(
            '.',
            str_replace(
                [ltrim(Runtime::PHP_PACKAGES_DIRECTORY, '\\') . '\\', '\\'],
                ['', '.'],
                ltrim($className, '\\')
            )
        );
        foreach ($newClassName as $key => $value) {
            $newClassName[$key] = array_flip(Runtime::PHP_PACKAGES_MAPS)[$value] ?? $value;
        }

        return implode('.', $newClassName);
    }

    /**
     * @param $className
     * @return string
     */
    public static function convertJavaNamespaceToPHP($className): string
    {
        $className = str_replace('.', '/', $className);
        $newClassName = explode(
            '/',
            $className
        );

        foreach ($newClassName as $key => $value) {
            $newClassName[$key] = Runtime::PHP_PACKAGES_MAPS[$value] ?? $value;
        }

        return Runtime::PHP_PACKAGES_DIRECTORY . '\\' . implode('\\', $newClassName);
    }

    /**
     * @param _MethodInfo $method
     * @param ConstantPool $constantPool
     * @return string
     * @throws \PHPJava\Exceptions\TypeException
     */
    public static function beatifyMethodFromConstantPool(_MethodInfo $method, ConstantPool $constantPool): string
    {
        $cpInfo = $constantPool->getEntries();
        $methodAccessFlags = $method->getAccessFlag();
        $accessFlags = [];
        $accessFlag = new FieldAccessFlag();
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
                        $arrayBrackets = str_repeat('[]', $argument['deep_array']);
                        if ($argument['type'] === 'class') {
                            return $argument['class_name'] . $arrayBrackets;
                        }
                        return $argument['type'] . $arrayBrackets;
                    },
                    $descriptor['arguments']
                )
            )
        );

        $type = $descriptor[0]['type'];
        if ($type === 'class') {
            $type = $descriptor[0]['class_name'];
        }

        $type = str_replace('/', '.', $type);
        $methodAccessibility = implode(' ', $accessFlags);

        return ltrim("$methodAccessibility $type $methodName($formattedArguments)");
    }
}
