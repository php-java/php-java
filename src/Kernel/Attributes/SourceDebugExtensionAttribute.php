<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class SourceDebugExtensionAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;

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
