<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\_BootstrapMethod;

final class BootstrapMethodsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var _BootstrapMethod[]
     */
    private $bootstrapMethods = [];

    public function execute(): void
    {
        $numBootstrapMethods = $this->readUnsignedShort();

        for ($i = 0; $i < $numBootstrapMethods; $i++) {
            $bootstrapMethod = new _BootstrapMethod($this->reader);
            $bootstrapMethod
                ->setDebugTool($this->getDebugTool())
                ->setConstantPool($this->getConstantPool())
                ->execute();
            $this->bootstrapMethods[] = $bootstrapMethod;
        }
    }

    /**
     * @return _BootstrapMethod[]
     */
    public function getBootstrapMethods(): array
    {
        return $this->bootstrapMethods;
    }
}
