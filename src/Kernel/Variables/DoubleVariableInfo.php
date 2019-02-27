<?php
namespace PHPJava\Kernel\Variables;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class DoubleVariableInfo implements VariableInfoInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag = null;
    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
    }
}
