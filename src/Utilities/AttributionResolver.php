<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\UnableToFindAttributionException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Types\Type;

class AttributionResolver
{

    /**
     * @param array $attributes
     * @param string $attributeName
     * @return null
     * @throws UnableToFindAttributionException
     */
    public static function resolve(array $attributes, string $attributeName)
    {
        foreach ($attributes as $attribute) {
            /**
             * @var AttributeInfo $attribute
             */
            if ($attribute->getAttributeData() instanceof $attributeName) {
                return $attribute->getAttributeData();
            }
        }
        throw new UnableToFindAttributionException('Unable to find attribution ' . $attributeName);
    }
}
