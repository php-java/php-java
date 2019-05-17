<?php
namespace PHPJava\Kernel\Structures;

use PHPJava\Kernel\Structures\Annotations\Annotation;

class _ParameterAnnotation implements StructureInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
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
