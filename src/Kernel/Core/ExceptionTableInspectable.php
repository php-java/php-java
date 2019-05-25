<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\UncaughtException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Resolvers\AttributionResolver;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Utilities\Formatter;

trait ExceptionTableInspectable
{
    /**
     * @param $e
     * @throws NullPointerException
     * @throws UncaughtException
     * @throws \PHPJava\Exceptions\UnableToFindAttributionException
     * @return bool succeeded or failed
     */
    public function inspectExceptionTable(JavaClass $e): bool
    {
        /**
         * @var CodeAttribute $codeAttribute
         */
        $codeAttribute = AttributionResolver::resolve(
            $this->getAttributes(),
            CodeAttribute::class
        );

        $expectedClass = Formatter::convertPHPNamespacesToJava(
            $e->getClassName()
        );

        $cpInfo = $this->getConstantPool();

        foreach ($codeAttribute->getExceptionTables() as $exception) {
            /**
             * @var _ExceptionTable $exception
             */
            if ($exception->getStartPc() > $this->getProgramCounter() ||
                $exception->getEndPc() < $this->getProgramCounter()
            ) {
                continue;
            }

            // In finally statement.
            if ($exception->getCatchType() === 0) {
                $this->setOffset($exception->getHandlerPc());
                return true;
            }
            $catchClass = Formatter::convertPHPNamespacesToJava($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString());
            if ($catchClass === $expectedClass) {
                $this->pushToOperandStack($e);
                $this->setOffset($exception->getHandlerPc());
                return true;
            }
        }

        /**
         * @var \Exception $exceptionObject
         */
        $exceptionObject = $e->getInvoker()->getClassObject();

        throw new UncaughtException(
            $expectedClass . ': ' . $exceptionObject->getMessage(),
            0,
            $exceptionObject
        );
    }
}
