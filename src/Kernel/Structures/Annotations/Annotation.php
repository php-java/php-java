<?php
namespace PHPJava\Kernel\Structures\Annotations;

final class Annotation implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $typeIndex = 0;

    /**
     * @var int
     */
    private $numElementValuePairs = 0;

    /**
     * @var (int|null)[][]
     */
    private $elementValuePairs = [];

    public function execute(): void
    {
        $this->typeIndex = $this->readUnsignedShort();
        $this->numElementValuePairs = $this->readUnsignedShort();

        for ($i = 0; $i < $this->numElementValuePairs; $i++) {
            $elementNameIndex = $this->readUnsignedShort();

            $this->elementValuePairs[] = [
                'element_name_index' => $elementNameIndex,
                'element_value_pair' => (new ElementValue($this->reader))
                    ->setConstantPool($this->getConstantPool())
                    ->setDebugTool($this->getDebugTool())
                    ->execute(),
            ];
        }
    }
}
