<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class ConstantValueAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $constantValueIndex = 0;

    public function execute(): void
    {
        $this->constantValueIndex = $this->readUnsignedShort();
    }
}
