<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\Normalizer;
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

            $arguments = Normalizer::normalizeValues(
                $arguments,
                $signature['arguments']
            );
        }

        $invokerClass = $this->popFromOperandStack();
        [$resourceType, $invokerClassObject] = $this->getOptions('class_resolver')
            ->resolve(
                $class,
                $this->javaClass
            );
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();

        if ($methodName === 'tl_$eq') {
            var_dump($arguments);
            exit();
        }

        try {
            if ($invokerClassObject instanceof JavaClassInterface) {
                $result = $invokerClassObject
                    ->getInvoker()
                    ->getDynamic()
                    ->getMethods()
                    ->call(
                        $methodName,
                        ...$arguments
                    );
            } else {
                $reflectionClass = new \ReflectionClass($invokerClass);
                $methodAccessor = $reflectionClass->getMethod($methodName);

                if ($document = $methodAccessor->getDocComment()) {
                    $prependInjections = $this->getAnnotateInjections($document);
                    if (!empty($prependInjections)) {
                        array_unshift(
                            $arguments,
                            ...$prependInjections
                        );
                    }
                }

                $result = call_user_func_array(
                    [$invokerClass, $methodName],
                    $arguments
                );
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
            /**
             * @var Type $typeClass
             */
            [$type, $typeClass] = TypeResolver::getType($signature[0]);

            $this->pushToOperandStack(
                $type === TypeResolver::IS_PRIMITIVE
                    ? $typeClass::get($result)
                    : $result
            );
        }
    }
}
