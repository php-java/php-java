<?php
namespace PHPJava\Kernel\Variables;

class UninitializedVariableInfo implements VariableInfoInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag;
    private $offset;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
        $this->offset = $this->readUnsignedShort();
    }
}
