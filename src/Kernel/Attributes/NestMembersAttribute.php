<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Structures\_LocalVariableTable;
use PHPJava\Utilities\BinaryTool;

final class NestMembersAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $classes = [];

    public function execute(): void
    {
        $numberOfClasses = $this->readUnsignedShort();
        $cp = $this->getConstantPool();

        for ($i = 0; $i < $numberOfClasses; $i++) {
            $this->classes[] = $cp[$this->readUnsignedShort()];
        }
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

}
