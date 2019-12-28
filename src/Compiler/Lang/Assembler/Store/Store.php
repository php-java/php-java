<?php
namespace PHPJava\Compiler\Lang\Assembler\Store;

use PHPJava\Exceptions\AssembleStructureException;

class Store
{
    protected $hashTable = [];

    protected $storedNumber = [
        // [iadf]store_0 / [iadf]load_0
        0 => false,
        // [iadf]store_1 / [iadf]load_1
        1 => false,
        // [iadf]store_2 / [iadf]load_2
        2 => false,
        // [iadf]store_3 / [iadf]load_3
        3 => false,
    ];

    public function getAll(): array
    {
        return $this->hashTable;
    }

    /**
     * Store on memory.
     *
     * @param $value
     * @return int the store method returns settled local storage number
     */
    public function store(string $name, $value, int $dimensionsOfArray = 0): int
    {
        $availableLocalStorageNumber = $this->getAvailableLocalStorageNumber();

        if ($availableLocalStorageNumber === -1) {
            // Allocate localStorage
            $storedNumber[] = false;

            // Retry to get
            $availableLocalStorageNumber = $this->getAvailableLocalStorageNumber();
        }

        $this->hashTable[$name] = [$availableLocalStorageNumber, $value, $dimensionsOfArray];

        // Use available localStorage number
        $this->fill(
            $availableLocalStorageNumber
        );

        // Returns available localstorage number.
        return $availableLocalStorageNumber;
    }

    public function fill(int $number): self
    {
        $this->storedNumber[$number] = true;
        return $this;
    }

    /**
     * @throws AssembleStructureException
     */
    public function get(string $name, bool $free = true): array
    {
        $value = $this->hashTable[$name] ?? null;

        if ($value === null) {
            throw new AssembleStructureException(
                'Specified variable name is not set (' . $name . ').'
            );
        }

        if ($free) {
            $this->storedNumber[$value[0]] = false;
        }
        return $value;
    }

    /**
     * @throws AssembleStructureException
     */
    public function getStoredNumber(string $name): int
    {
        $value = $this->hashTable[$name] ?? null;
        if ($value === null) {
            throw new AssembleStructureException(
                'Specified variable name is not set (' . $name . ').'
            );
        }

        // 0 is a localstorage number.
        return $value[0];
    }

    public function getAvailableLocalStorageNumber(): int
    {
        foreach ($this->storedNumber as $index => $storedNumber) {
            if ($storedNumber === false) {
                return $index;
            }
        }
        return -1;
    }
}
