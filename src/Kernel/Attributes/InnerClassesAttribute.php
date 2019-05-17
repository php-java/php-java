<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\_Classes;

final class InnerClassesAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $numberOfClasses = 0;

    /**
     * @var _Classes[]
     */
    private $classes = [];

    public function execute(): void
    {
        $this->numberOfClasses = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfClasses; $i++) {
            $class = new _Classes($this->reader);
            $class->setConstantPool($this->getConstantPool())
                ->setDebugTool($this->getDebugTool());
            $class->execute();
            $this->classes[] = $class;
        }
    }

    /**
     * @return _Classes[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
}
