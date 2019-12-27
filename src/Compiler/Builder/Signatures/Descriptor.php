<?php

namespace PHPJava\Compiler\Builder\Signatures;

use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Double;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Utilities\Formatter;

class Descriptor implements DescriptorInterface
{
    protected $return;
    protected $arguments = [];

    public static function factory()
    {
        return new static();
    }

    public function addArgument(string $type, int $dimensionsOfArray = 0): self
    {
        $this->arguments[] = [$type, $dimensionsOfArray];
        return $this;
    }

    public function setReturn(string $type): self
    {
        $this->return = $type;
        return $this;
    }

    public function make(): string
    {
        $arguments = implode(
            array_map(
                static function (array $argument) {
                    [$type, $deepArray] = $argument;
                    $string = str_repeat('[', $deepArray);
                    $type = Formatter::convertStringifiedPrimitiveTypeToKernelType(
                        ltrim($type, '\\')
                    );
                    switch ($type) {
                        case _Char::class:
                        case _Byte::class:
                        case _Double::class:
                        case _Float::class:
                        case _Long::class:
                        case _Short::class:
                        case _Int::class:
                        case _Void::class:
                            $string .= TypeResolver::resolveSignatureByType($type);
                            break;
                        default:
                            $path = Formatter::convertPHPNamespacesToJava(
                                $type,
                                '/'
                            );
                            $string .= 'L' . $path . ';';
                            break;
                    }
                    return $string;
                },
                $this->arguments
            )
        );

        if ($this->return === null) {
            return $arguments;
        }

        $returnSignature = Formatter::convertPrimitiveValueToJavaSignature(
            $this->return
        );

        if ($returnSignature === null) {
            $returnSignature = TypeResolver::resolve(
                Formatter::convertPHPNamespacesToJava(
                    $this->return,
                    '/'
                )
            );

            if ($returnSignature[0] === 'L') {
                $returnSignature .= ';';
            }
        }
        return '(' . $arguments . ')' . $returnSignature;
    }
}
