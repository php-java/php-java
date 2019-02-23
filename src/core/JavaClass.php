<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\ActiveAttributes;
use PHPJava\Core\JVM\ActiveFields;
use PHPJava\Core\JVM\ActiveInterface;
use PHPJava\Core\JVM\ActiveMethods;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Exceptions\ValidatorException;

class JavaClass
{
    private $versions = [
        'minor' => null,
        'major' => null,
    ];

    private $constantPool;
    private $activeInterfaces;
    private $activeFields;
    private $activeMethods;
    private $activeAttributes;

    private $accessFlag = 0;
    private $thisClass = 0;
    private $superClass = 0;

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
        $this->constantPool = new ConstantPool(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort()
        );

        // read access flag
        $this->accessFlag = $reader->getBinaryReader()->readUnsignedShort();

        // read this class
        $this->thisClass = $reader->getBinaryReader()->readUnsignedShort();

        // read super class
        $this->superClass = $reader->getBinaryReader()->readUnsignedShort();

        // read interfaces
        $this->activeInterfaces = new ActiveInterface(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort()
        );

        // read fields
        $this->activeFields = new ActiveFields(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );

        // read methods
        $this->activeMethods = new ActiveMethods(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );

        // read attributes
        $this->activeAttributes = new ActiveAttributes(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );
        var_dump($this->activeAttributes);
    }
}
