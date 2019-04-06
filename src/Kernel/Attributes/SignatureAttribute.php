<?php
namespace PHPJava\Kernel\Attributes;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class SignatureAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    private $signatureIndex = 0;

    public function execute(): void
    {
        $this->signatureIndex = $this->readUnsignedShort();
    }

    public function getSignatureIndex()
    {
        return $this->signatureIndex;
    }
}
