<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassReaderInterface;
use PHPJava\Exceptions\ReadEntryException;
use PHPJava\Kernel\Maps\ConstantPoolTag;
use PHPJava\Kernel\Structures\_Class;
use PHPJava\Kernel\Structures\_Double;
use PHPJava\Kernel\Structures\_Fieldref;
use PHPJava\Kernel\Structures\_Float;
use PHPJava\Kernel\Structures\_Integer;
use PHPJava\Kernel\Structures\_Long;
use PHPJava\Kernel\Structures\_Methodref;
use PHPJava\Kernel\Structures\_NameAndType;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Structures\StructureInterface;

class ConstantPool
{
    private $entries = [];
    private $reader;

    /**
     * @param JavaClassReaderInterface $reader
     * @param int $entries
     * @throws ReadEntryException
     */
    public function __construct(JavaClassReaderInterface $reader, int $entries)
    {
        $this->reader = $reader;

        for ($i = 1; $i < $entries; $i++) {
            $this->entries[$i] = $this->read(
                $reader->getBinaryReader()->readUnsignedByte()
            );

            // execute
            $this->entries[$i]->execute();

            // Java's Long and Double problem.
            if ($this->entries[$i] instanceof _Long ||
                $this->entries[$i] instanceof _Double) {
                $i++;
            }
        }
    }

    public function getEntries(): array
    {
        return $this->entries;
    }

    private function read($entryTag): ?StructureInterface
    {
        switch ($entryTag) {
            case ConstantPoolTag::CONSTANT_Class:
                return new _Class($this->reader);
            case ConstantPoolTag::CONSTANT_Fieldref:
                return new _Fieldref($this->reader);
            case ConstantPoolTag::CONSTANT_Methodref:
                return new _Methodref($this->reader);
            case ConstantPoolTag::CONSTANT_String:
                return new _String($this->reader);
            case ConstantPoolTag::CONSTANT_Integer:
                return new _Integer($this->reader);
            case ConstantPoolTag::CONSTANT_Float:
                return new _Float($this->reader);
            case ConstantPoolTag::CONSTANT_Long:
                return new _Long($this->reader);
            case ConstantPoolTag::CONSTANT_Double:
                return new _Double($this->reader);
            case ConstantPoolTag::CONSTANT_NameAndType:
                return new _NameAndType($this->reader);
            case ConstantPoolTag::CONSTANT_Utf8:
                return new _Utf8($this->reader);
            case ConstantPoolTag::CONSTANT_MethodHandle:
            case ConstantPoolTag::CONSTANT_MethodType:
            case ConstantPoolTag::CONSTANT_Module:
            case ConstantPoolTag::CONSTANT_Package:
                throw new ReadEntryException('Entry tag ' . sprintf('%x', $entryTag) . ' is not implemented.');
        }
        throw new ReadEntryException('Entry tag ' . sprintf('%x', $entryTag) . ' is not defined.');
    }
}
