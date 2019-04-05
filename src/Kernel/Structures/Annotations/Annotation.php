<?php
namespace PHPJava\Kernel\Structures\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class Annotation implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $typeIndex = 0;
    private $numElementValuePairs = 0;
    private $elementValuePairs = [];

    public function execute(): void
    {
        $this->typeIndex = $this->readUnsignedShort();
        $this->numElementValuePairs = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numElementValuePairs; $i++) {
            $elementValuePair = (new ElementValuePairs($this->reader))
                ->setConstantPool($this->getConstantPool());
            $elementValuePair->execute();
            $this->elementValuePairs[] = $elementValuePair;
        }
    }
}
