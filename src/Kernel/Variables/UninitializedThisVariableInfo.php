<?php
namespace PHPJava\Kernel\Variables;

class UninitializedThisVariableInfo implements VariableInfoInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
    }
}
