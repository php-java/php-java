<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Attributes;

final class DeprecatedAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\AttributeReference;
    use \PHPJava\Kernel\Core\DebugTool;

    public function execute(): void
    {
    }
}
