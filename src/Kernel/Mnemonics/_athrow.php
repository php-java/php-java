<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\UncaughtException;

final class _athrow extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\ExceptionTableInspectable;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        return $this->operands = new Operands();
    }

    /**
     * @throws UncaughtException
     */
    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();

        /**
         * @var JavaClass $objectref
         */
        $objectref = $this->popFromOperandStack();

        try {
            $this->inspectExceptionTable($objectref->getInvoker()->getClassObject());
        } catch (\Exception $e) {
            throw new UncaughtException(
                "Unable to catch {$objectref->getClassName()} exception. " .
                'PHPJava has stopped operations. ' .
                'You may be running broken Java class. '
            );
        }
    }
}
