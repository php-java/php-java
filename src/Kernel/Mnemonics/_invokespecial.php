<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Resolvers\MethodNameResolver;
use PHPJava\Utilities\Formatter;

final class _invokespecial implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;
    use \PHPJava\Kernel\Core\ExceptionTableInspectable;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();
        $signature = $cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString();
        $parsedSignature = Formatter::parseSignature($signature);

        // POP with right-to-left (objectref + arguments)
        $arguments = array_fill(0, $parsedSignature['arguments_count'], null);
        for ($i = count($arguments) - 1; $i >= 0; $i--) {
            $arguments[$i] = $this->popFromOperandStack();
        }

        /**
         * @var JavaClassInterface $objectref
         */
        $newObject = $objectref = $this->popFromOperandStack();
        try {
            $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

            if ($objectref->getClassName() !== $className) {
                $newObject = JavaClass::load(
                    $className,
                    $this->javaClass->getOptions()
                );
            }

            /**
             * @var JavaClassInterface $newObject
             */
            $result = $newObject->getInvoker()->getDynamic()->getMethods()->call(
                $methodName,
                ...$arguments
            );

            if (MethodNameResolver::isSpecialMethod($methodName)) {
                $result = $newObject;
            }

            // NOTE: PHP has a problem which a reference object cannot replace to an object.
            if ($parsedSignature[0]['type'] === 'void') {
                $this->replaceReferredObject($objectref, $newObject);
            }
        } catch (\Exception $e) {
            $this->inspectExceptionTable(
                JavaClass::load(Formatter::convertPHPNamespacesToJava(get_class($e)), $this->javaClass->getOptions())
                    ->getInvoker()
                    ->construct($e->getMessage(), 0, $e)
                    ->getJavaClass()
            );
            return;
        }

        if ($parsedSignature[0]['type'] !== 'void') {
            $this->pushToOperandStack(
                Normalizer::normalizeReturnValue(
                    $result,
                    $parsedSignature[0]
                )
            );
        }
    }
}
