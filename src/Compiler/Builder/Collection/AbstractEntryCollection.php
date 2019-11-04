<?php
namespace PHPJava\Compiler\Builder\Collection;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Structures\EntryCollectionInterface;
use PHPJava\Compiler\Builder\Structures\Info\AbstractInfo;
use PHPJava\Compiler\Builder\Structures\InfoInterface;
use PHPJava\Exceptions\NotAllowedDeleteException;
use PHPJava\Utilities\ArrayTool;

abstract class AbstractEntryCollection implements EntryCollectionInterface, \ArrayAccess, \IteratorAggregate
{
    protected $entries = [];
    protected $enableIntern = true;

    public function add(EntryInterface $entry): EntryCollectionInterface
    {
        // Find same entry
        foreach ($this->entries as $fromEntry) {
            if ($fromEntry === null) {
                continue;
            }

            /**
             * @var AbstractInfo|EntryInterface $validateableEntry
             * @var AbstractInfo|EntryInterface $entry
             */
            if ($fromEntry instanceof InfoInterface
                && $entry instanceof InfoInterface
                && get_class($fromEntry) === get_class($entry)
                && ArrayTool::compare($fromEntry->getEntries(), $entry->getEntries())
            ) {
                return $this;
            }
        }

        $this->entries[] = $entry;
        return $this;
    }

    public function offsetGet($offset)
    {
        return $this->entries[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (!($value instanceof EntryInterface)) {
            throw new NotAllowedDeleteException('The value is not allowed.');
        }
        $this->entries[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        throw new NotAllowedDeleteException('The entry cannot delete because the entry is an immutable.');
    }

    public function offsetExists($offset)
    {
        return isset($this->entries[$offset]);
    }

    public function toArray(): array
    {
        return $this->entries;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->entries);
    }

    public function enableIntern(bool $enable): EntryCollectionInterface
    {
        $this->enableIntern = $enable;
        return $this;
    }

    public function length(): int
    {
        return count($this->entries);
    }
}
