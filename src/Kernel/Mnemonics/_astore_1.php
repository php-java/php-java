<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Intern\StringIntern;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _astore_1 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $this->setLocalStorage(1, $this->popFromOperandStack());
    }
}
