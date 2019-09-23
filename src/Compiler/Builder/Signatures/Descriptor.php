<?php

namespace PHPJava\Compiler\Builder\Signatures;

use PHPJava\Utilities\Formatter;

class Descriptor implements DescriptorInterface
{
    protected $return;
    protected $arguments = [];

    public function addArgument(string $type, int $deepArray = 0): self
    {
        $this->arguments[] = [$type, $deepArray];
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
            ';',
            array_map(
                static function (array $argument) {
                    [$type, $deepArray] = $argument;
                    $string = str_repeat('[', $deepArray);
                    switch ($type) {
                        default:
                            $path = str_replace('.', '/', Formatter::convertPHPNamespacesToJava($type));
                            $string .= 'L' . $path;
                            break;
                    }
                    return $string;
                },
                $this->arguments
            )
        ) . (!empty($this->arguments) ? ';' : '');

        if ($this->return === null) {
            return $arguments;
        }

        $return = Formatter::convertPrimitiveValueToJavaSignature($this->return);
        return '(' . $arguments . ')' . $return;
    }
}
