<?php
namespace PHPJava\Kernel\Structures;

class _Float implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $bytes;

    /**
     * @var int
     */
    private $realByte;

    public function execute(): void
    {
        $this->bytes = $this->readUnsignedInt();
    }

    public function getBytes(): float
    {
        if ($this->realByte) {
            return $this->realByte;
        }
        $bits = $this->bytes;
        $s = ($bits >> 31) == 0 ? 1 : -1;
        $e = ($bits >> 23) & 0xff;
        $m = ($e == 0) ? (($bits & 0x7fffff) << 1) : ($bits & 0x7fffff) | 0x800000;
        return $this->realByte = ($s * $m * pow(2, $e - 150));
    }
}
