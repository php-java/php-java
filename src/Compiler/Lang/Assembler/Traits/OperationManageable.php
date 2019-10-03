<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait OperationManageable
{
    /**
     * @var Operation
     */
    protected $operation;

    public function setOperation(Operation $operation): AssemblerInterface
    {
        $this->operation = $operation;
        return $this;
    }

    public function getOperation(): Operation
    {
        return $this->operation;
    }
}
