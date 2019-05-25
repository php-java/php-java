<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\UncaughtException;

final class _athrow implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\ExceptionTableInspectable;

    /**
     * @throws UncaughtException
     */
    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();

        /**
         * @var JavaClass $objectref
         */
        $objectref = $this->popFromOperandStack();

        try {
            $this->inspectExceptionTable(
                $objectref
            );
        } catch (\Exception $e) {
            throw new UncaughtException(
                "Unable to catch {$objectref->getClassName()} exception. " .
                'PHPJava has stopped operations. ' .
                'You may be running broken Java class. '
            );
        }
    }
}
