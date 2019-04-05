<?php
namespace PHPJava\Kernel\Structures\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Attributes\RuntimeVisibleAnnotationsAttribute;
use PHPJava\Utilities\BinaryTool;

final class ElementValuePairs implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag;
    private $elementNameIndex = null;

    public function execute(): void
    {
        $this->elementNameIndex = $this->readUnsignedShort();
        $this->tag = $this->readByte();

        $this->constValueIndex = $this->readUnsignedShort();


        $this->enumConstValue = [
            'type_name_index' => $this->readUnsignedShort(),
            'const_name_index' => $this->readUnsignedShort(),
        ];

        $this->classInfoIndex = $this->readUnsignedShort();

        $this->annotationValue = new RuntimeVisibleAnnotationsAttribute($this->reader);
    }
}
