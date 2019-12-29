<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Structures\Info;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Structures\InfoInterface;
use PHPJava\Compiler\Builder\Types\Uint32;
use PHPJava\Kernel\Maps\ConstantPoolTag;

class IntegerInfo extends AbstractInfo implements InfoInterface, EntryInterface
{
    protected $tag = ConstantPoolTag::CONSTANT_Integer;

    protected $structure = [
        [Uint32::class],
    ];

    public function __construct(int $value)
    {
        $this->entries[] = $value;
    }
}
