<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Exceptions\ValidatorException;

class JavaClass
{
    private $versions = [
        'minor' => null,
        'major' => null,
    ];

    public function __construct(JavaClassReader $reader)
    {
        // Validate Java file
        if (!(new MagicByte($reader->getBinaryReader()->readUnsignedInt()))->isValid()) {
            throw new ValidatorException($reader . ' has broken or not Java class.');
        }

        // read minor version
        $this->versions['minor'] = $reader->getBinaryReader()->readUnsignedShort();

        // read major version
        $this->versions['major'] = $reader->getBinaryReader()->readUnsignedShort();

        // read constant pool size
        $constantPoolSize = $reader->getBinaryReader()->readUnsignedShort();

        var_dump($this->versions['minor'], $this->versions['major']);
    }
}
