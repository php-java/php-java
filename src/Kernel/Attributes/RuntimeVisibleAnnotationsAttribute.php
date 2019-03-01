<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Annotations\Annotation;
use PHPJava\Utilities\BinaryTool;

final class RuntimeVisibleAnnotationsAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $numAnnotations = 0;
    private $annotations = [];

    public function execute(): void
    {
        $this->numAnnotations = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numAnnotations; $i++) {
            $annotation = new Annotation($this->reader);
            $annotation->setConstantPool($this->getConstantPool());
            $annotation->execute();
            $this->annotations[] = $annotation;
        }
    }
}
