<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Kernel\Attributes\AttributeInterface;

trait AttributeReference
{
    private $attributeInfoReference;

    public function setAttributeReference(AttributeInterface $attributeInfo)
    {
        $this->attributeInfoReference = $attributeInfo;
        return $this;
    }

    public function getAttributeReference(): AttributeInterface
    {
        return $this->attributeInfoReference;
    }
}
