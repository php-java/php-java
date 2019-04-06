<?php
namespace PHPJava\Kernel\Structures\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\RuntimeVisibleAnnotationsAttribute;
use PHPJava\Utilities\BinaryTool;

final class ElementValue implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    private $tag;
    private $value;

    /**
     * @see https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-4.html#jvms-4.7.16
     */
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
                $this->value = $this->readUnsignedShort();
                break;
            case 'e': // enum_const_value
                $this->value = [
                    'type_name_index' => $this->readUnsignedShort(),
                    'const_name_index' => $this->readUnsignedShort(),
                ];
                break;
            case 'c': // class_info_index
                $this->value = $this->readUnsignedShort();
                break;
            case '@': // annotation_value
                $this->value = new AttributeInfo($this->reader);
                $this->value->setConstantPool($this->getConstantPool());
                $this->value->setDebugTool($this->getDebugTool());
                $this->value->execute();
                break;
            case '[': // array_value
                $this->value = [
                    'num_values' => $this->readUnsignedShort(),
                    'values' => [],
                ];
                for ($i = 0; $i < $this->value['num_values']; $i++) {
                    $value = new static($this->reader);
                    $value->setConstantPool($this->getConstantPool());
                    $value->setDebugTool($this->getDebugTool());
                    $value->execute();
                    $this->value['values'][] = $value;
                }
                break;
            default:
                throw new RuntimeException('Invalid tag "' . $this->tag . '" in element_value structure.');
                break;
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}
