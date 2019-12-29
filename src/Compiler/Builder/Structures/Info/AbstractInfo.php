<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Structures\Info;

use PHPJava\Compiler\Builder\EntryInterface;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;
use PHPJava\Compiler\Builder\Maps\EntryMap;
use PHPJava\Compiler\Builder\Structures\InfoInterface;

abstract class AbstractInfo implements InfoInterface, EntryInterface
{
    protected $tag = 0;
    protected $structure = [];
    protected $entries = [];

    public function getTag(): int
    {
        return $this->tag;
    }

    public function getEntries(): array
    {
        return $this->entries;
    }

    public function getStructure(): array
    {
        return $this->structure;
    }

    public function getStructureEntries(): array
    {
        $counter = 0;
        return array_reduce(
            $this->structure,
            function ($carry, $item) use (&$counter) {
                /**
                 * @var FinderResultInterface|int $entryIndex
                 */
                $entryIndex = $this->entries[$counter++];
                if ($entryIndex instanceof FinderResultInterface) {
                    /**
                     * @var EntryMap $result
                     */
                    $result = $entryIndex->getResult();
                    $entryIndex = $result->getEntryIndex();
                }
                $item[] = $entryIndex;
                $carry[] = $item;
                return $carry;
            },
            []
        );
    }

    public static function factory(...$arguments): self
    {
        return new static(...$arguments);
    }
}
