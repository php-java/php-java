<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ReadEntryException;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Kernel\Maps\ConstantPoolTag;
use PHPJava\Kernel\Structures\ClassInfo;
use PHPJava\Kernel\Structures\DoubleInfo;
use PHPJava\Kernel\Structures\FieldrefInfo;
use PHPJava\Kernel\Structures\FloatInfo;
use PHPJava\Kernel\Structures\FreezableInterface;
use PHPJava\Kernel\Structures\IntegerInfo;
use PHPJava\Kernel\Structures\InterfaceMethodrefInfo;
use PHPJava\Kernel\Structures\InvokeDynamicInfo;
use PHPJava\Kernel\Structures\LongInfo;
use PHPJava\Kernel\Structures\MethodHandleInfo;
use PHPJava\Kernel\Structures\MethodrefInfo;
use PHPJava\Kernel\Structures\MethodTypeInfo;
use PHPJava\Kernel\Structures\NameAndTypeInfo;
use PHPJava\Kernel\Structures\StringInfo;
use PHPJava\Kernel\Structures\StructureInterface;
use PHPJava\Kernel\Structures\Utf8Info;

class ConstantPool implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var StructureInterface[]
     */
    private $entries = [];

    /**
     * @var ReaderInterface
     */
    private $reader;

    /**
     * @throws ReadEntryException
     */
    public function __construct(ReaderInterface $reader, int $entries)
    {
        $this->reader = $reader;

        for ($i = 1; $i < $entries; $i++) {
            $this->entries[$i] = $this->read(
                $reader->getReader()->readUnsignedByte()
            );

            // execute
            $this->entries[$i]->execute();

            // Java's Long and Double problem.
            if ($this->entries[$i] instanceof LongInfo ||
                $this->entries[$i] instanceof DoubleInfo) {
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

    /**
     * @throws ReadEntryException
     */
    private function read(int $entryTag): ?StructureInterface
    {
        switch ($entryTag) {
            case ConstantPoolTag::CONSTANT_Class:
                return new ClassInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Fieldref:
                return new FieldrefInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Methodref:
                return new MethodrefInfo($this->reader);
            case ConstantPoolTag::CONSTANT_String:
                return new StringInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Integer:
                return new IntegerInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Float:
                return new FloatInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Long:
                return new LongInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Double:
                return new DoubleInfo($this->reader);
            case ConstantPoolTag::CONSTANT_NameAndType:
                return new NameAndTypeInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Utf8:
                return new Utf8Info($this->reader);
            case ConstantPoolTag::CONSTANT_InterfaceMethodref:
                return new InterfaceMethodrefInfo($this->reader);
            case ConstantPoolTag::CONSTANT_InvokeDynamic:
                return new InvokeDynamicInfo($this->reader);
            case ConstantPoolTag::CONSTANT_MethodHandle:
                return new MethodHandleInfo($this->reader);
            case ConstantPoolTag::CONSTANT_MethodType:
                return new MethodTypeInfo($this->reader);
            case ConstantPoolTag::CONSTANT_Module:
            case ConstantPoolTag::CONSTANT_Package:
                throw new ReadEntryException('Entry tag ' . sprintf('0x%04X', $entryTag) . ' is not implemented.');
        }
        throw new ReadEntryException('Entry tag ' . sprintf('0x%04X', $entryTag) . ' is not defined.');
    }

    /**
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    /**
     * @throws RuntimeException
     * @return StructureInterface
     */
    public function offsetGet($offset)
    {
        if ($this->entries[$offset] instanceof FreezableInterface) {
            $this->entries[$offset]->freeze();
        }
        if (!array_key_exists($offset, $this->entries)) {
            throw new RuntimeException(
                'Cannot refer to an entry on the Constant Pool (index: ' . $offset . ')'
            );
        }
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
