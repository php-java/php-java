<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\ReferenceCounter;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;

/**
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
trait ReferenceCounterManageable
{
    protected $referenceCounter;

    public function setReferenceCounter(?ReferenceCounter $referenceCounter): self
    {
        $this->referenceCounter = $referenceCounter;
        return $this;
    }

    public function getReferenceCounter(): ?ReferenceCounter
    {
        return $this->referenceCounter;
    }
}
