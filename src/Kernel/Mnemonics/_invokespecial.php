<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\UncaughtException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Internal\InstanceDeferredLoader;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Kernel\Types\Type;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\ClassHandler;
use PHPJava\Utilities\ClassResolver;
use PHPJava\Utilities\Formatter;
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
         * @var InstanceDeferredLoader $objectref
         */
        $newObject = $objectref = $this->popFromOperandStack();
        try {
            $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

            if ($objectref->getClassName() !== $className) {
                // If $objectref is not match $className, then change current class (I have no confidence).
                // See also: https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-6.html#jvms-6.5.invokespecial

                // FIXME: if $objectref has superclass, then refer superclass from $objectref
                // NOTE: This implementation is a ** first aid **.
                [$resourceType, $classObject] = $objectref
                    ->getOptions('class_resolver')
                    ->resolve($className);

                switch ($resourceType) {
                    case ClassResolver::RESOLVED_TYPE_PACKAGES:
                        $newObject = new $classObject(...$arguments);
                        break;
                    case ClassResolver::RESOLVED_TYPE_CLASS:
                        $newObject = $classObject;
                        break;
                }
            } elseif ($objectref instanceof InstanceDeferredLoader) {
                $newObject = $objectref->instantiate(...$arguments);
            }

            $result = $newObject;
            if ($newObject instanceof JavaClassInterface) {
                /**
                 * @var JavaClassInterface $newObject
                 */
                $result = $newObject->getInvoker()->getDynamic()->getMethods()->callSpecial(
                    $methodName,
                    ...$arguments
                );
            } elseif ($newObject instanceof _Object && $methodName !== ClassHandler::DEFAULT_INITIALIZER) {
                $result = $newObject->{$methodName}(...$arguments);
            }

            // NOTE: PHP has a problem which a reference object cannot replace to an object.
            if ($parsedSignature[0]['type'] === 'void' &&
                $objectref !== $newObject
            ) {
                $this->replaceReferredObject($objectref, $newObject);
            }
        } catch (\Exception $e) {
            /**
             * @var CodeAttribute $codeAttribute
             */
            $codeAttribute = AttributionResolver::resolve(
                $this->getAttributes(),
                CodeAttribute::class
            );

            $expectedClass = Formatter::convertPHPNamespacesToJava(get_class($e));

            foreach ($codeAttribute->getExceptionTables() as $exception) {
                /**
                 * @var _ExceptionTable $exception
                 */
                if ($exception->getStartPc() > $this->getProgramCounter() ||
                    $exception->getEndPc() < $this->getProgramCounter()
                ) {
                    continue;
                }
                if ($exception->getCatchType() === 0) {
                    $this->setOffset($exception->getHandlerPc());
                    return;
                }
                $catchClass = Formatter::convertPHPNamespacesToJava($cpInfo[$cpInfo[$exception->getCatchType()]->getClassIndex()]->getString());
                if ($catchClass === $expectedClass) {
                    $this->pushToOperandStack($e);
                    $this->setOffset($exception->getHandlerPc());
                    return;
                }
            }

            throw new UncaughtException(
                $expectedClass . ': ' . $e->getMessage(),
                0,
                $e
            );
        }

        if ($parsedSignature[0]['type'] !== 'void') {
            /**
             * @var Type $typeClass
             */
            [$type, $typeClass] = TypeResolver::getType($parsedSignature[0]);
            $this->pushToOperandStack(
                $type === TypeResolver::IS_PRIMITIVE
                    ? $typeClass::get($result)
                    : $result
            );
        }
    }
}
