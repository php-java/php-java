<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInvoker;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\ClassResolver;
use PHPJava\Utilities\Converter;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\TypeResolver;

final class _invokevirtual implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $class = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];

        // signature
        $signature = Formatter::parseSignature($cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString());

        $arguments = [];
        if (($length = $signature['arguments_count'] - 1) >= 0) {
            $arguments = array_fill(0, $length, null);
            for ($i = $length; $i >= 0; $i--) {
                $arguments[$i] = $this->popFromOperandStack();
            }

            $arguments = Converter::normalizeArguments(
                $arguments,
                $signature['arguments']
            );
        }

        $invokerClass = $this->popFromOperandStack();
        $invokerClassName = $this->getOptions('class_resolver')->resolve($class);
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();

        try {
            if ($invokerClass instanceof JavaClass) {
                $result = $invokerClass
                    ->getInvoker()
                    ->getDynamic()
                    ->getMethods()
                    ->call(
                        $methodName,
                        ...$arguments
                    );
            } else {
                $reflectionClass = new \ReflectionClass(
                    $realInvokerClass = TypeResolver::convertPHPTypeToJavaType($invokerClass)
                );
                $methodAccessor = $reflectionClass->getMethod($methodName);

                if ($document = $methodAccessor->getDocComment()) {
                    $prependInjections = $this->getNativeAnnotateInjections($document);
                    if (!empty($prependInjections)) {
                        array_unshift(
                            $arguments,
                            ...$prependInjections
                        );
                    }
                }

                $result = call_user_func_array(
                    [$realInvokerClass, $methodName],
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

        if ($signature[0]['type'] !== 'void') {
            $this->pushToOperandStack($result);
        }
    }
}
