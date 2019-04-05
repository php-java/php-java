<?php
namespace PHPJava\Kernel\Structures\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class ElementValuePairs implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $elementNameIndex = null;

    public function execute(): void
    {
        $this->elementNameIndex = $this->readUnsignedShort();
    }
}
