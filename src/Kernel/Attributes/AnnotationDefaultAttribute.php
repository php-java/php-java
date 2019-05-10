<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\Annotations\ElementValue;

final class AnnotationDefaultAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $elementValue;

    public function execute(): void
    {
        $this->elementValue = new ElementValue($this->reader);
        $this->elementValue->setConstantPool($this->getConstantPool());
        $this->elementValue->setDebugTool($this->getDebugTool());
        $this->elementValue->execute();
    }
}
