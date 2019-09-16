<?php
namespace PHPJava\Compiler;

use PHPJava\Compiler\Builder\Segments\AccessFlags;
use PHPJava\Compiler\Builder\Segments\Attributes\Attributes;
use PHPJava\Compiler\Builder\Segments\Attributes\AttributesCount;
use PHPJava\Compiler\Builder\Segments\ConstantPool;
use PHPJava\Compiler\Builder\Segments\ConstantPoolCount;
use PHPJava\Compiler\Builder\Segments\Fields;
use PHPJava\Compiler\Builder\Segments\FieldsCount;
use PHPJava\Compiler\Builder\Segments\Interfaces;
use PHPJava\Compiler\Builder\Segments\InterfacesCount;
use PHPJava\Compiler\Builder\Segments\MagicByte;
use PHPJava\Compiler\Builder\Segments\MajorVersion;
use PHPJava\Compiler\Builder\Segments\Methods;
use PHPJava\Compiler\Builder\Segments\MethodsCount;
use PHPJava\Compiler\Builder\Segments\MinorVersion;
use PHPJava\Compiler\Builder\Segments\SuperClass;
use PHPJava\Compiler\Builder\Segments\ThisClass;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Core\JVM\Stream\BinaryWriter;
use PHPJava\Exceptions\CompilerException;

class Compiler
{
    /**
     * @var ClassFileStructure
     */
    private $classFileStructureBuilder;

    public function __construct(ClassFileStructure $classFileStructureBuilder)
    {
        $this->classFileStructureBuilder = $classFileStructureBuilder;
    }

    public function compile($stream): void
    {
        if (!is_resource($stream)) {
            throw new CompilerException('The stream is not a resource.');
        }
        $binaryWriter = new BinaryWriter($stream);
        if (!$binaryWriter->isWritable()) {
            throw new CompilerException('The stream is not writable.');
        }

        $binaryWriter->enableBuffer(true);

        // Write magic
        MagicByte::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write minor_version
        MinorVersion::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write major_version
        MajorVersion::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write constant_pool_count
        ConstantPoolCount::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write constant_pool
        ConstantPool::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write access_flags
        AccessFlags::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write this_class
        ThisClass::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write super_class
        SuperClass::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write interfaces_count
        InterfacesCount::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write interfaces
        Interfaces::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write fields_count
        FieldsCount::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write fields
        Fields::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write methods_count
        MethodsCount::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Write methods
        Methods::init($this->classFileStructureBuilder, $binaryWriter)
            ->build();

        // Build attributes_count
        AttributesCount::init(
            $this->classFileStructureBuilder->getAttributes(),
            $this->classFileStructureBuilder->getConstantPool(),
            $binaryWriter
        )->build();

        // Build attributes
        Attributes::init(
            $this->classFileStructureBuilder->getAttributes(),
            $this->classFileStructureBuilder->getConstantPool(),
            $binaryWriter
        )->build();
    }
}
