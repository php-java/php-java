<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Structures\Info;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Structures\InfoInterface;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Kernel\Maps\ConstantPoolTag;

class ClassInfo extends AbstractInfo implements InfoInterface, EntryInterface
{
    protected $tag = ConstantPoolTag::CONSTANT_Class;
    protected $structure = [
        [Uint16::class],
    ];

    public function __construct(FinderResultInterface $constantPoolIndex)
    {
        $this->entries[] = $constantPoolIndex;
    }
}
