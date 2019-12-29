<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Structures\EntryCollectionInterface;

trait CollectionManageable
{
    protected $collection;

    public function setCollection(EntryCollectionInterface $collection): self
    {
        $this->collection = $collection;
        return $this;
    }

    public function getCollection(): EntryCollectionInterface
    {
        return $this->collection;
    }
}
