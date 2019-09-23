<?php
namespace PHPJava\Compiler\Builder\Maps;

use PHPJava\Compiler\Builder\Structures\Info\AbstractInfo;

class EntryMap implements MapInterface
{
    /**
     * @var int
     */
    protected $entryIndex;

    /**
     * @var AbstractInfo
     */
    protected $entry;

    public function __construct(int $entryIndex, AbstractInfo $entry)
    {
        $this->entryIndex = $entryIndex;
        $this->entry = $entry;
    }

    public function getEntryIndex(): int
    {
        return $this->entryIndex;
    }

    public function getEntry(): AbstractInfo
    {
        return $this->entry;
    }
}
