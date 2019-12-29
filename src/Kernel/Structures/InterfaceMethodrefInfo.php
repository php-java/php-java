<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

class InterfaceMethodrefInfo implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $classIndex;

    /**
     * @var int
     */
    private $nameAndTypeIndex;

    public function execute(): void
    {
        $this->classIndex = $this->readUnsignedShort();
        $this->nameAndTypeIndex = $this->readUnsignedShort();
    }

    public function getClassIndex(): int
    {
        return $this->classIndex;
    }

    public function getNameAndTypeIndex(): int
    {
        return $this->nameAndTypeIndex;
    }
}
