<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\FormatterException;

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

    public static function javaClassNameFromFilePath($fileName): string
    {
        return $fileName;
    }
}
