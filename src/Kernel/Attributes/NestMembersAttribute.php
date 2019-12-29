<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class NestMembersAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var \PHPJava\Core\JVM\StructureInterface[]
     */
    private $classes = [];

    public function execute(): void
    {
        $numberOfClasses = $this->readUnsignedShort();
        $cp = $this->getConstantPool();

        for ($i = 0; $i < $numberOfClasses; $i++) {
            $this->classes[] = $cp[$this->readUnsignedShort()];
        }
    }

    /**
     * @var \PHPJava\Core\JVM\StructureInterface[]
     */
    public function getClasses(): array
    {
        return $this->classes;
    }
}
