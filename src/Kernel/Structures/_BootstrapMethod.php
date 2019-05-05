<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

class _BootstrapMethod implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $bootstrapMethodRef = null;
    private $numBootstrapArguments = 0;
    private $bootstrapArguments = [];

    public function execute(): void
    {
        $this->bootstrapMethodRef = $this->readUnsignedShort();
        $this->numBootstrapArguments = $this->readUnsignedShort();

        $cp = $this->getConstantPool();
        for ($i = 0; $i < $this->numBootstrapArguments; $i++) {
            $this->bootstrapArguments[] = $cp[$cp[$this->readUnsignedShort()]->getStringIndex()];
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
