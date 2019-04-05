<?php
namespace PHPJava\Kernel\Structures\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\RuntimeVisibleAnnotationsAttribute;
use PHPJava\Utilities\BinaryTool;

final class ElementValuePairs implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $tag;

    public function execute(): void
    {
        $this->tag = chr($this->readByte());

        $this->constValueIndex = $this->readUnsignedShort();


        $this->enumConstValue = [
            'type_name_index' => $this->readUnsignedShort(),
            'const_name_index' => $this->readUnsignedShort(),
        ];

        $this->classInfoIndex = $this->readUnsignedShort();

        $cpInfo = $this->getConstantPool()->getEntries();

        if ($this->tag === '@') {
            $this->annotationValue = new AttributeInfo($this->reader);
            $this->annotationValue->setConstantPool($this->getConstantPool());
            $this->annotationValue->execute();
        }

        if ($this->tag === '[') {
            $this->arrayValue = [
                'num_values' => $this->readUnsignedShort(),

            ];
        }
//
//        for ($i = 0; $i < $this->arrayValue['num_values']; $i++) {
//
//        }

    }
}
