<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Exceptions\AssembleStructureException;

trait Validatable
{
    public function validateOperationArray(array $operations): self
    {
        foreach ($operations as $index => $operation) {
            if (!($operation instanceof Operation)) {
                throw new AssembleStructureException(
                    'The index ' . $index . ' of entries is not instantiated by ' . Operation::class
                );
            }
        }
        return $this;
    }
}
