<?php
namespace PHPJava\Kernel\Attributes;

final class SignatureAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    /**
     * @var int
     */
    private $signatureIndex = 0;

    public function execute(): void
    {
        $this->signatureIndex = $this->readUnsignedShort();
    }

    public function getSignatureIndex(): int
    {
        return $this->signatureIndex;
    }
}
