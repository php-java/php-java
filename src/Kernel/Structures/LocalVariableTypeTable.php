<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

class LocalVariableTypeTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $startPc = 0;

    /**
     * @var int
     */
    private $length = 0;

    /**
     * @var int
     */
    private $nameIndex = 0;

    /**
     * @var int
     */
    private $descriptorIndex = 0;

    /**
     * @var int
     */
    private $index = 0;

    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->length = $this->readUnsignedShort();
        $this->nameIndex = $this->readUnsignedShort();
        $this->descriptorIndex = $this->readUnsignedShort();
        $this->index = $this->readUnsignedShort();
    }
}
