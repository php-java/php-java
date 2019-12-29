<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Collection;

use PHPJava\Compiler\Builder\Structures\EntryCollectionInterface;

class ConstantPool extends AbstractEntryCollection implements EntryCollectionInterface, \ArrayAccess, \IteratorAggregate
{
    protected $entries = [null];
}
