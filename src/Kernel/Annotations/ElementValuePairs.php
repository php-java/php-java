<?php
namespace PHPJava\Kernel\Annotations;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class ElementValuePairs implements AnnotationInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;
    use \PHPJava\Kernel\Core\ConstantPool;

    private $elementNameIndex = 0;
    private $tag;

    public function execute(): void
    {
        throw new NotImplementedException(__CLASS__);
    }
}
