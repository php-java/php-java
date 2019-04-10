<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _athrow implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        $objectref = $this->popFromOperandStack();

        $className = str_replace('\\', '/', get_class($objectref));

        foreach ($this->getAttributeData()->getExceptionTables() as $exception) {
            if ($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString() === $className &&
                    $exception->getStartPc() <= $this->getProgramCounter() &&
                    $exception->getEndPc() >= $this->getProgramCounter()) {
                $this->setOffset($exception->getHandlerPc());
                return;
            }
        }

        throw new Exception('exception table was broken.');
    }
}
