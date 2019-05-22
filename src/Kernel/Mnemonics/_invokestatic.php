<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\UncaughtException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Resolvers\AttributionResolver;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Kernel\Types\Type;
use PHPJava\Utilities\Formatter;

final class _invokestatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());

        [$resourceType, $classObject] = $this->getOptions('class_resolver')
            ->resolve($cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString());

        $arguments = [];
        if (($length = $signature['arguments_count'] - 1) >= 0) {
            $arguments = array_fill(0, $length, null);
            for ($i = $length; $i >= 0; $i--) {
                $arguments[$i] = $this->popFromOperandStack();
            }
        }

        $result = null;
        $prefix = $this->getOptions('prefix_static') ?? GlobalOptions::get('prefix_static') ?? Runtime::PREFIX_STATIC;

        try {
            switch ($resourceType) {
                case ClassResolver::RESOLVED_TYPE_CLASS:
                    /**
                     * @var \PHPJava\Core\JavaClass $classObject
                     */
                    $result = $classObject
                        ->getInvoker()
                        ->getStatic()
                        ->getMethods()
                        ->call(
                            $methodName,
                            ...$arguments
                        );
                    break;
                case ClassResolver::RESOLVED_TYPE_PACKAGES:
                    $reflectionClass = new \ReflectionClass(
                        $classObject
                    );
                    $methodAccessor = $reflectionClass->getMethod("{$prefix}{$methodName}");

                    if ($document = $methodAccessor->getDocComment()) {
                        $prependInjections = $this->getAnnotateInjections($document);
                        if (!empty($prependInjections)) {
                            array_unshift(
                                $arguments,
                                ...$prependInjections
                            );
                        }
                    }

                    $result = forward_static_call_array(
                        [
                            $classObject,
                            "{$prefix}{$methodName}",
                        ],
                        $arguments
                    );
                    break;
            }
        } catch (\Exception $e) {
            // Handling exceptions.

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
