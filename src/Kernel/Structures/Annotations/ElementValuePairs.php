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

        switch ($this->tag) {
            case 'B': // const_value_index
            case 'C':
            case 'D':
            case 'F':
            case 'I':
            case 'J':
            case 'S':
            case 'Z':
            case 's':
                break;
            case 'e': // enum_const_value
                break;
            case 'c': // class_info_index
                break;
            case '@': // annotation_value
                break;
            case '[': // array_value
                break;
        }
//
//        var_dump($this->tag);
//
//        $this->constValueIndex = $this->readUnsignedShort();
//
//
//        $this->enumConstValue = [
//            'type_name_index' => $this->readUnsignedShort(),
//            'const_name_index' => $this->readUnsignedShort(),
//        ];
//
//        $this->classInfoIndex = $this->readUnsignedShort();
//
//        $cpInfo = $this->getConstantPool()->getEntries();
//
//        if ($this->tag === '@') {
//            $this->annotationValue = new AttributeInfo($this->reader);
//            $this->annotationValue->setConstantPool($this->getConstantPool());
//            $this->annotationValue->execute();
//        }
//
//        if ($this->tag === '[') {
//            $this->arrayValue = [
//                'num_values' => $this->readUnsignedShort(),
//
//            ];
//            for ($i = 0; ) {
//
//            }
//            var_dump($this->arrayValue);
//            exit();
//        }
////
////        for ($i = 0; $i < $this->arrayValue['num_values']; $i++) {
////
////        }

    }
}
