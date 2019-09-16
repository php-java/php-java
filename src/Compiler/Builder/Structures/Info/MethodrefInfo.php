<?php
namespace PHPJava\Compiler\Builder\Structures\Info;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Structures\InfoInterface;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Kernel\Maps\ConstantPoolTag;

class MethodrefInfo extends AbstractInfo implements InfoInterface, EntryInterface
{
    protected $tag = ConstantPoolTag::CONSTANT_Methodref;

    protected $structure = [
        [Uint16::class],
        [Uint16::class],
    ];

    public function __construct(
        FinderResultInterface $constantPoolIndex1,
        FinderResultInterface $constantPoolIndex2
    ) {
        $this->entries[] = $constantPoolIndex1;
        $this->entries[] = $constantPoolIndex2;
    }
}
