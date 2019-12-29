<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM;

use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ReadOnlyException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Utilities\DebugTool;

class AttributePool implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var AttributeInfo[]
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
            // not implemented, read only
            $entry = (new AttributeInfo($reader))
                ->setConstantPool($constantPool)
                ->setDebugTool($debugTool);
            $entry->execute();

            $this->entries[] = $entry;
        }
    }

    /**
     * @return AttributeInfo[]
     */
    public function getEntries(): array
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
     * @return AttributeInfo
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
        throw new ReadOnlyException('You cannot rewrite datum. The Attribute Pool is read-only.');
    }

    /**
     * @throws ReadOnlyException
     */
    public function offsetUnset($offset)
    {
        throw new ReadOnlyException('You cannot rewrite datum. The Attribute Pool is read-only.');
    }

    /**
     * @return \ArrayIterator<AttributeInfo>
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->entries);
    }
}
