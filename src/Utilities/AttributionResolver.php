<?php
namespace PHPJava\Utilities;

use PHPJava\Exceptions\UnableToFindAttributionException;
use PHPJava\Kernel\Attributes\AttributeInfo;

class AttributionResolver
{
    /**
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
