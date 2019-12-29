<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

use PHPJava\Kernel\Structures\InnerClasses;

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
     * @var InnerClasses[]
     */
    private $classes = [];

    public function execute(): void
    {
        $this->numberOfClasses = $this->readUnsignedShort();
        for ($i = 0; $i < $this->numberOfClasses; $i++) {
            $class = new InnerClasses($this->reader);
            $class->setConstantPool($this->getConstantPool())
                ->setDebugTool($this->getDebugTool());
            $class->execute();
            $this->classes[] = $class;
        }
    }

    /**
     * @return InnerClasses[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
}
