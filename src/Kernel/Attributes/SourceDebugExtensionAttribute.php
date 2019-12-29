<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class SourceDebugExtensionAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var string
     */
    private $debugExtension;

    public function execute(): void
    {
        $this->debugExtension = $this->read(
            $this
                ->getAttributeReference()
                ->getAttributeLength()
        );
    }
}
