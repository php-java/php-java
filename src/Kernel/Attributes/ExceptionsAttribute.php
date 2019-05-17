<?php
namespace PHPJava\Kernel\Attributes;

final class ExceptionsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $numberOfExceptions;

    /**
     * @var int[]
     */
    private $exceptionIndexTable = [];

    public function execute(): void
    {
        $this->numberOfExceptions = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfExceptions; $i++) {
            $this->exceptionIndexTable[] = $this->readUnsignedShort();
        }
    }
}
