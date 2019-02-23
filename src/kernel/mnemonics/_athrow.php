<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _athrow implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $cpInfo = $this->getCpInfo();

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
