<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ReadEntryException;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Kernel\Maps\ConstantPoolTag;
use PHPJava\Kernel\Structures\_Class;
use PHPJava\Kernel\Structures\_Double;
use PHPJava\Kernel\Structures\_Fieldref;
use PHPJava\Kernel\Structures\_Float;
use PHPJava\Kernel\Structures\_Integer;
use PHPJava\Kernel\Structures\_InterfaceMethodref;
use PHPJava\Kernel\Structures\_InvokeDynamic;
use PHPJava\Kernel\Structures\_Long;
use PHPJava\Kernel\Structures\_MethodHandle;
use PHPJava\Kernel\Structures\_Methodref;
use PHPJava\Kernel\Structures\_MethodType;
use PHPJava\Kernel\Structures\_NameAndType;
use PHPJava\Kernel\Structures\_String;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Kernel\Structures\StructureInterface;

class ConstantPool implements \ArrayAccess, \Countable, \IteratorAggregate
{
    private $entries = [];
    private $reader;

    /**
     * @param ReaderInterface $reader
     * @param int $entries
     * @throws ReadEntryException
     */
    public function __construct(ReaderInterface $reader, int $entries)
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

    /**
     * @return StructureInterface[]
     */
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
            case ConstantPoolTag::CONSTANT_InterfaceMethodref:
                return new _InterfaceMethodref($this->reader);
            case ConstantPoolTag::CONSTANT_InvokeDynamic:
                return new _InvokeDynamic($this->reader);
            case ConstantPoolTag::CONSTANT_MethodHandle:
                return new _MethodHandle($this->reader);
            case ConstantPoolTag::CONSTANT_MethodType:
                return new _MethodType($this->reader);
            case ConstantPoolTag::CONSTANT_Module:
            case ConstantPoolTag::CONSTANT_Package:
                throw new ReadEntryException('Entry tag ' . sprintf('0x%04X', $entryTag) . ' is not implemented.');
        }
        throw new ReadEntryException('Entry tag ' . sprintf('0x%04X', $entryTag) . ' is not defined.');
    }

    /**
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    /**
     * @return StructureInterface
     */
    public function offsetGet($offset)
    {
        return $this->entries[$offset];
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->entries);
    }

    /**
     * @throws ReadOnlyException
     */
    public function offsetSet($offset, $value)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Constant Pool is read-only.');
    }

    /**
     * @throws ReadOnlyException
     */
    public function offsetUnset($offset)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Constant Pool is read-only.');
    }

    /**
     * @return \ArrayIterator<StructureInterface>
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->entries);
    }
}
