<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Variables;

class UninitializedThisVariableInfo implements VariableInfoInterface
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
