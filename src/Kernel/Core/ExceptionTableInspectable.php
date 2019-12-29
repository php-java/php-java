<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\UncaughtException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Resolvers\AttributionResolver;
use PHPJava\Kernel\Structures\ExceptionTable;
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
    public function inspectExceptionTable(\Exception $e): bool
    {
        /**
         * @var CodeAttribute $codeAttribute
         */
        $codeAttribute = AttributionResolver::resolve(
            $this->getAttributes(),
            CodeAttribute::class
        );

        $expectedClass = Formatter::convertPHPNamespacesToJava(
            get_class($e)
        );

        $cpInfo = $this->getConstantPool();

        foreach ($codeAttribute->getExceptionTables() as $exception) {
            /**
             * @var ExceptionTable $exception
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
                $instance = JavaClass::load($catchClass)
                    ->getInvoker()
                    ->construct(
                        $e->getMessage(),
                        $e->getCode(),
                        $e
                    );
                $this->pushToOperandStack($instance);
                $this->setOffset($exception->getHandlerPc());
                return true;
            }
        }

        throw new UncaughtException(
            $expectedClass . ': ' . $e->getMessage(),
            0,
            $e
        );
    }
}
