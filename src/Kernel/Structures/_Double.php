<?php
namespace PHPJava\Kernel\Structures;

class _Double implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $highBytes;
    private $lowBytes;
    private $realByte;

    public function execute(): void
    {
        $this->highBytes = $this->readUnsignedInt();
        $this->lowBytes = $this->readUnsignedInt();
    }

    public function getBytes()
    {
        if ($this->realByte) {
            return $this->realByte;
        }
        $bits = ($this->highBytes << 32) + $this->lowBytes;
        $s = ($bits >> 63) == 0 ? 1 : -1;
        $e = ($bits >> 52) & 0x7ff;
        $m = ($e == 0) ? (($bits & 0xfffffffffffff) << 1) : ($bits & 0xfffffffffffff) | 0x10000000000000;
        return $this->realByte = ($s * $m * pow(2, $e - 1075));
    }
}
