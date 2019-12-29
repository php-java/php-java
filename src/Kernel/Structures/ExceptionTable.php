<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures;

class ExceptionTable implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $startPc;

    /**
     * @var int
     */
    private $endPc;

    /**
     * @var int
     */
    private $handlerPc;

    /**
     * @var int
     */
    private $catchType;

    public function execute(): void
    {
        $this->startPc = $this->readUnsignedShort();
        $this->endPc = $this->readUnsignedShort();
        $this->handlerPc = $this->readUnsignedShort();
        $this->catchType = $this->readUnsignedShort();
    }

    public function getStartPc(): int
    {
        return $this->startPc;
    }

    public function getEndPc(): int
    {
        return $this->endPc;
    }

    public function getHandlerPc(): int
    {
        return $this->handlerPc;
    }

    public function getCatchType(): int
    {
        return $this->catchType;
    }
}
