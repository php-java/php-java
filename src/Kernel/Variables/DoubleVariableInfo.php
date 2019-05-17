<?php
namespace PHPJava\Kernel\Variables;

class DoubleVariableInfo implements VariableInfoInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * @var int
     */
    private $tag;

    public function execute(): void
    {
        $this->tag = $this->readUnsignedByte();
    }
}
