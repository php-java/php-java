<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Exceptions\ValidatorException;

class JavaClass
{

    public function __construct(JavaClassReader $reader)
    {
        // Validate Java file
        if (!(new MagicByte($reader->getBinaryReader()->readUnsignedInt()))->isValid()) {
            throw new ValidatorException($reader . ' is not Java class.');
        }

    }
}
