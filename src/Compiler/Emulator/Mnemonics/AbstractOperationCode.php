<?php
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Emulator\Accumulator;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;

abstract class AbstractOperationCode implements OperationCodeInterface
{
    use ConstantPoolManageable;
    use ConstantPoolEnhanceable;

    protected $operation;
    protected $accumulator;
    protected $programCounter = 0;

    public function __construct(Operation $operation, Accumulator $accumulator, int $programCounter)
    {
        $this->operation = $operation;
        $this->accumulator = $accumulator;
        $this->programCounter = $programCounter;
    }

    abstract public function execute(): void;
}
