<?php
namespace PHPJava\Kernel\Structures;

class _BootstrapMethod implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $bootstrapMethodRef;
    private $numBootstrapArguments = 0;
    private $bootstrapArguments = [];

    public function execute(): void
    {
        $this->bootstrapMethodRef = $this->readUnsignedShort();
        $this->numBootstrapArguments = $this->readUnsignedShort();

        $cp = $this->getConstantPool();
        for ($i = 0; $i < $this->numBootstrapArguments; $i++) {
            $this->bootstrapArguments[] = $cp[$this->readUnsignedShort()];
        }
    }

    public function getBootstrapMethodRef(): int
    {
        return $this->bootstrapMethodRef;
    }

    public function getBootstrapArguments(): array
    {
        return $this->bootstrapArguments;
    }
}
