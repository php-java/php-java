<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Utilities\DebugTool;

class InterfacePool implements \ArrayAccess, \Countable
{
    private $entries = [];
    private $reader;

    public function __construct(
        ReaderInterface $reader,
        int $entries,
        ConstantPool $constantPool,
        DebugTool $debugTool
    ) {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            $this->entries[$i] = $reader->getBinaryReader()->readUnsignedShort();
        }
    }

    public function getEntries()
    {
        return $this->entries;
    }

    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->entries[$offset];
    }

    public function count()
    {
        return count($this->entries);
    }

    public function offsetSet($offset, $value)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Interface Pool is read-only.');
    }

    public function offsetUnset($offset)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Interface Pool is read-only.');
    }
}
