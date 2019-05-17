<?php
namespace PHPJava\Kernel\Variables;

class UninitializedVariableInfo implements VariableInfoInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * @var int
     */
    private $tag;

    /**
     * @var int
     */
    private $offset;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
        $this->offset = $this->readUnsignedShort();
    }
}
