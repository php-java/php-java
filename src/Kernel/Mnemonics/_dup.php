<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\RuntimeException;
use PHPJava\Utilities\BinaryTool;

final class _dup implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $stack = $this->stacks[sizeof($this->stacks) - 1] ?? null;
        if ($stack === null) {
            throw new RuntimeException('Stack overflow');
        }
        $this->pushToOperandStack($stack);
    }
}
