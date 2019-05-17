<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Utilities\DebugTool;

class FieldPool implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var _FieldInfo[]
     */
    private $entries = [];

    /**
     * @var ReaderInterface
     */
    private $reader;

    public function __construct(
        ReaderInterface $reader,
        int $entries,
        ConstantPool $constantPool,
        DebugTool $debugTool
    ) {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            $this->entries[$i] = new _FieldInfo($reader);
            $this->entries[$i]->setConstantPool($constantPool);
            $this->entries[$i]->setDebugTool($debugTool);
            $this->entries[$i]->execute();
        }
    }

    /**
     * @return _FieldInfo[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    /**
     * @param int $offset
     * @return _FieldInfo
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
        throw new ReadOnlyException('You cannot rewrite datum. The Field Pool is read-only.');
    }

    /**
     * @throws ReadOnlyException
     */
    public function offsetUnset($offset)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Field Pool is read-only.');
    }

    /**
     * @return \ArrayIterator<_FieldInfo>
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->entries);
    }
}
