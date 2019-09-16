<?php

namespace PHPJava\Compiler\Builder\Finder\Result;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Maps\EntryMap;
use PHPJava\Compiler\Builder\Structures\Info\AbstractInfo;
use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\NameAndTypeInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\FinderException;

class ConstantPoolFinderResult extends AbstractFinderResult implements FinderResultInterface
{
    /**
     * @var ConstantPoolFinder
     */
    protected $finder;

    /**
     * @var array
     */
    protected $resultCaches = [];

    public function getResult()
    {
        // Find in constant pool
        foreach ($this->constantPool as $index => $entry) {
            /**
             * @var AbstractInfo $entry
             */
            if (!($entry instanceof $this->type)) {
                continue;
            }
            $key = md5($this->type . implode($this->arguments) . spl_object_hash($entry));

            if (isset($this->resultCaches[$key])) {
                return $this->resultCaches[$key];
            }

            $texts = [];
            switch ($this->type) {
                case FieldrefInfo::class:
                case MethodrefInfo::class:
                    [[$type1, $constantPoolIndex1], [$type2, $constantPoolIndex2]] = $entry->getStructureEntries();

                    /**
                     * @var ClassInfo $classInfo
                     * @var NameAndTypeInfo $nameAndTypeInfo
                     */
                    $classInfo = $this->constantPool[$constantPoolIndex1];
                    $nameAndTypeInfo = $this->constantPool[$constantPoolIndex2];

                    [[$type, $classInfoConstantPoolIndex]] = $classInfo->getStructureEntries();
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$classInfoConstantPoolIndex]->getStructureEntries()
                    );

                    [[$nameAndTypeType1, $nameAndTypeConstantPoolIndex1], [$nameAndTypeType1, $nameAndTypeConstantPoolIndex2]] = $nameAndTypeInfo->getStructureEntries();
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$nameAndTypeConstantPoolIndex1]->getStructureEntries()
                    );
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$nameAndTypeConstantPoolIndex2]->getStructureEntries()
                    );

                    break;
                case NameAndTypeInfo::class:
                    [[$type1, $constantPoolIndex1], [$type1, $constantPoolIndex2]] = $entry->getStructureEntries();
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$constantPoolIndex1]->getStructureEntries()
                    );
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$constantPoolIndex2]->getStructureEntries()
                    );
                    break;
                case StringInfo::class:
                case ClassInfo::class:
                    /**
                     * @var EntryMap $result
                     */
                    [[$type, $constantPoolIndex]] = $entry->getStructureEntries();
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $this->constantPool[$constantPoolIndex]->getStructureEntries()
                    );
                    break;
                case Utf8Info::class:
                    $texts[] = $this->filterUtf8EntryTextByStructureEntry(
                        $entry->getStructureEntries()
                    );
                    break;
                default:
                    throw new FinderException('The finder type is not implemented yet. (Type: ' . $this->type . ')');
            }

            if ($this->isValidText($texts)) {
                // Returns found index.
                return $this->resultCaches[$key] = new EntryMap($index, $entry);
            }
        }

        throw new FinderException('Not found an entry. (arguments: ' . implode(', ', $this->arguments) . ')');
    }

    private function isValidText(array $texts): bool
    {
        if (empty($texts)) {
            return false;
        }
        $results = [];
        foreach ($texts as $pointer => $text) {
            $results[] = $text === $this->arguments[$pointer];
        }
        return !in_array(
            false,
            $results,
            true
        );
    }

    private function findUtf8Entry(string $text): string
    {
        /**
         * @var EntryMap $result
         */
        $result = $this->finder
            ->find(Utf8Info::class, $text)
            ->getResult();

        return $this->filterUtf8EntryTextByStructureEntry(
            $result
                ->getEntry()
                ->getStructureEntries()
        );
    }

    private function filterUtf8EntryTextByStructureEntry(array $structureEntry): string
    {
        [, [$length, $entry]] = $structureEntry;
        return $entry;
    }
}
