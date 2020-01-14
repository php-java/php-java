<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Store;

class ReferenceCounter
{
    const CLASS_HASH_MAP = 0;
    const VARIABLE_HASH_MAP = 1;

    protected $hashMap = [];

    public function increaseUsingClassCounter(string $classPath, int $referenceCounterType, int $frameIndex): self
    {
        $this->hashMap[$referenceCounterType][$classPath]['frames'][] = $frameIndex;
        return $this;
    }

    public function makeHashMap(string $classPath, int $referenceCounterType, int $frameIndex): self
    {
        $this->hashMap[$referenceCounterType][$classPath] = [
            'frame_index' => $frameIndex,
            'frames' => [],
        ];
        return $this;
    }

    public function get(int $referenceCounterType): ?array
    {
        return $this->hashMap[$referenceCounterType] ?? null;
    }
}
