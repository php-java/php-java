<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Structures;

use PHPJava\Compiler\Builder\EntryInterface;

interface EntryCollectionInterface
{
    public function add(EntryInterface $entry): EntryCollectionInterface;

    public function offsetGet($offset);

    public function offsetSet($offset, $value);

    public function offsetUnset($offset);

    public function offsetExists($offset);

    public function toArray(): array;
}
