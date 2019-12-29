<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

/**
 * @see https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-4.html#jvms-4.7.6
 */
class InnerClasses implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $innerClassInfoIndex = 0;

    /**
     * @var int
     */
    private $outerClassInfoIndex = 0;

    /**
     * If this class is an anonymous, value is must be zero.
     *
     * @var int
     */
    private $innerNameIndex = 0;

    /**
     * @var int
     */
    private $innerClassAccessFlag = 0;

    public function execute(): void
    {
        $this->innerClassInfoIndex = $this->readUnsignedShort();
        $this->outerClassInfoIndex = $this->readUnsignedShort();
        $this->innerNameIndex = $this->readUnsignedShort();
        $this->innerClassAccessFlag = $this->readUnsignedShort();
    }

    public function getInnerClassInfoIndex(): int
    {
        return $this->innerClassInfoIndex;
    }

    public function getOuterClassInfoIndex(): int
    {
        return $this->outerClassInfoIndex;
    }

    public function getInnerNameIndex(): int
    {
        return $this->innerNameIndex;
    }

    public function getInnerClassAccessFlag(): int
    {
        return $this->innerClassAccessFlag;
    }
}
