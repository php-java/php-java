<?php
namespace PHPJava\Compiler\Builder\Structures\Info;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Structures\InfoInterface;
use PHPJava\Compiler\Builder\Types\Bytes;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Kernel\Maps\ConstantPoolTag;

class Utf8Info extends AbstractInfo implements InfoInterface, EntryInterface
{
    protected $tag = ConstantPoolTag::CONSTANT_Utf8;

    protected $structure = [
        [Uint16::class],
        [Bytes::class],
    ];

    public function __construct(string $value)
    {
        $this->entries[] = strlen($value);
        $this->entries[] = $value;
    }
}
