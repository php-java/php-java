<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\ClassResolver;
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
        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();
        $signature = $cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString();
        $parsedSignature = Formatter::parseSignature($signature);

        // POP with right-to-left (objectref + arguments)
        $collection = array_fill(0, $parsedSignature['arguments_count'] + 1, null);
        for ($i = count($collection) - 1; $i >= 0; $i--) {
            $collection[$i] = $this->popFromOperandStack();
        }

        $objectref = $collection[0];

        try {

            // NOTE: first arguments is a class object. (PHPJava does not needed.)
            $arguments = array_values(array_slice($collection, 1));
            $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

            if ($objectref instanceof JavaClass &&
                $objectref->getClassName() !== $className
            ) {
                // If $objectref is not match $className, then change current class (I have no confidence).
                // See also: https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-6.html#jvms-6.5.invokespecial

                // FIXME: if $objectref has superclass, then refer superclass from $objectref
                // NOTE: This implementation is a ** first aid **.
                [$resourceType, $classObject] = $objectref
                    ->getOptions('class_resolver')
                    ->resolve($className);

                switch ($resourceType) {
                    case ClassResolver::RESOLVED_TYPE_PACKAGES:
                        $objectref = new $classObject(...$arguments);
                        break;
                    case ClassResolver::RESOLVED_TYPE_CLASS:
                        throw new NotImplementedException('This section is not implementation.');
                }
            } elseif ($objectref instanceof JavaClass) {
                $objectref = $objectref(...$arguments);
            } else {
                $objectref = new $objectref(...$arguments);
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
    }
}
