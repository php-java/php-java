<?php
namespace PHPJava\Kernel\Attributes;

use \PHPJava\Exceptions\NotImplementedException;

final class AnnotationDefaultAttribute implements AttributeInterface
{
    use \PHPJava\Kernel\Core\BinaryReader;

    public function execute(): void
    {
        
        throw new NotImplementedException(__CLASS__);
    }
}