<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\Annotations\Annotation;

final class RuntimeInvisibleAnnotationsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $numAnnotations = 0;

    /**
     * @var Annotation[]
     */
    private $annotations = [];

    public function execute(): void
    {
        $this->numAnnotations = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numAnnotations; $i++) {
            $annotation = new Annotation($this->reader);
            $annotation->setConstantPool($this->getConstantPool());
            $annotation->setDebugTool($this->getDebugTool());
            $annotation->execute();
            $this->annotations[] = $annotation;
        }
    }
}
