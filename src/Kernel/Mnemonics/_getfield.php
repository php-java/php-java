<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Packages\java\lang\NoSuchFieldException;

final class _getfield extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        return $this->operands ?? new Operands();
    }

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cp->getNameAndTypeIndex()];

        $name = $cpInfo[$class->getNameIndex()]->getString();

        /**
         * @var JavaClassInterface $objectref
         */
        $objectref = $this->popFromOperandStack();

        $return = $objectref->getInvoker()->getDynamic()->getFields()->get($name);

        if ($return !== null) {
            $this->pushToOperandStack($return);
            return;
        }

        throw new NoSuchFieldException('Tried to get undefined field ' . $name);
    }
}
