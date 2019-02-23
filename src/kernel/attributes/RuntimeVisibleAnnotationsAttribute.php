<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class RuntimeVisibleAnnotationsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        throw new NotImplementedException(__CLASS__);
    }
}
