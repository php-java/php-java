<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\BootstrapMethod;

final class BootstrapMethodsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var BootstrapMethod[]
     */
    private $bootstrapMethods = [];

    public function execute(): void
    {
        $numBootstrapMethods = $this->readUnsignedShort();

        for ($i = 0; $i < $numBootstrapMethods; $i++) {
            $bootstrapMethod = new BootstrapMethod($this->reader);
            $bootstrapMethod
                ->setDebugTool($this->getDebugTool())
                ->setConstantPool($this->getConstantPool())
                ->execute();
            $this->bootstrapMethods[] = $bootstrapMethod;
        }
    }

    /**
     * @return BootstrapMethod[]
     */
    public function getBootstrapMethods(): array
    {
        return $this->bootstrapMethods;
    }
}
