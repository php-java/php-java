<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _athrow implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();

        $objectref = $this->getStack();

        $className = str_replace('\\', '/', get_class($objectref));

        foreach ($this->getAttributeData()->getExceptionTables() as $exception) {
            if ($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString() === $className &&
                    $exception->getStartPc() <= $this->getPointer() &&
                    $exception->getEndPc() >= $this->getPointer()) {
                $this->getByteCodeStream()->setOffset($exception->getHandlerPc());
                return;
            }
        }

        throw new Exception('exception table was broken.');
    }
}