<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;

trait ParentRecurseable
{
    public function recurseParentUntilBy(string $className): ?AssemblerInterface
    {
        $currentClass = $this;
        do {
            $currentClass = $currentClass
                ->getParentCoordinator();
        } while ($currentClass === null || get_class($currentClass) !== $className);

        return $currentClass;
    }
}
