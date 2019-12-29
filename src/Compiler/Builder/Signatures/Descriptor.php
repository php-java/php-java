<?php
declare(strict_types=1);

namespace PHPJava\Compiler\Builder\Signatures;

use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\Byte_;
use PHPJava\Kernel\Types\Char_;
use PHPJava\Kernel\Types\Double_;
use PHPJava\Kernel\Types\Float_;
use PHPJava\Kernel\Types\Int_;
use PHPJava\Kernel\Types\Long_;
use PHPJava\Kernel\Types\Short_;
use PHPJava\Kernel\Types\Void_;
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
                    [$type, $dimensionsOfArray] = $argument;
                    $string = str_repeat('[', $dimensionsOfArray);
                    $type = Formatter::convertPHPPrimitiveTypeToJavaType(
                        ltrim($type, '\\')
                    );
                    switch ($type) {
                        case Char_::class:
                        case Byte_::class:
                        case Double_::class:
                        case Float_::class:
                        case Long_::class:
                        case Short_::class:
                        case Int_::class:
                        case Void_::class:
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
