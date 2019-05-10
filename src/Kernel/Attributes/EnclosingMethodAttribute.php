<?php
namespace PHPJava\Kernel\Attributes;

final class EnclosingMethodAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $classIndex = 0;
    private $methodIndex = 0;

    public function execute(): void
    {
        $this->classIndex = $this->readUnsignedShort();
        $this->methodIndex = $this->readUnsignedShort();
    }
}
