<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\MethodNameResolver;
use PHPJava\Utilities\TypeResolver;

final class _invokespecial implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        $signature = $cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString();
        $parsedSignature = Formatter::parseSignature($signature);
        $invokerClass = $this->popFromOperandStack();


        $arguments = [];
        if (($length = $parsedSignature['arguments_count'] - 1) >= 0) {
            $arguments = array_fill(0, $length, null);
            for ($i = $length; $i >= 0; $i--) {
                $arguments[$i] = $this->popFromOperandStack();
            }
        }

        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

        if ($this->javaClassInvoker->isInvoked($methodName, $signature)) {
            return;
        }

        $this->javaClassInvoker
            ->addToSpecialInvokedList($methodName, $signature);


        try {
            if ($invokerClass instanceof JavaClass) {
                if ($invokerClass->getInvoker()->isInvoked($methodName, $signature)) {
                    return;
                }

                $invokerClass
                    ->getInvoker()
                    ->addToSpecialInvokedList($methodName, $signature);

                $result = $invokerClass
                    ->getInvoker()
                    ->getDynamic()
                    ->getMethods()
                    ->call(
                        $methodName,
                        ...$arguments
                    );
            } else {
                $result = call_user_func_array(
                    [
                        $invokerClass,
                        MethodNameResolver::resolve($methodName),
                    ],
                    $arguments
                );
            }
        } catch (\Exception $e) {
            /**
             * @var $codeAttribute CodeAttribute
             */
            $codeAttribute = AttributionResolver::resolve(
                $this->getAttributes(),
                CodeAttribute::class
            );

            $expectedClass = Formatter::convertPHPNamespacesToJava(get_class($e));

            foreach ($codeAttribute->getExceptionTables() as $exception) {
                /**
                 * @var $exception _ExceptionTable
                 */
                $catchClass = Formatter::convertPHPNamespacesToJava($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString());
                if ($catchClass === $expectedClass &&
                    $exception->getStartPc() <= $this->getProgramCounter() &&
                    $exception->getEndPc() >= $this->getProgramCounter()
                ) {
                    $this->setOffset($exception->getHandlerPc());
                    return;
                }
            }

            throw new UnableToCatchException(
                $expectedClass . ': ' . $e->getMessage(),
                0,
                $e
            );
        }

        if ($parsedSignature[0]['type'] !== 'void') {
            $this->pushToOperandStack($result);
        }
    }
}
