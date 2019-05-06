<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\invoke\MethodHandles;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;
use PHPJava\Kernel\Attributes\BootstrapMethodsAttribute;
use PHPJava\Kernel\Maps\MethodHandleKind;
use PHPJava\Kernel\Structures\_BootstrapMethod;
use PHPJava\Kernel\Structures\_MethodHandle;
use PHPJava\Kernel\Structures\_NameAndType;
use PHPJava\Packages\java\lang\invoke\MethodType;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\Normalizer;

final class _invokedynamic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;

    /**
     * `invokedynamic` is a trial implementation.
     *
     * @throws NotImplementedException
     * @throws \PHPJava\Exceptions\NormalizerException
     * @throws \PHPJava\Exceptions\TypeException
     * @throws \PHPJava\Exceptions\UnableToFindAttributionException
     * @see https://docs.oracle.com/javase/specs/jvms/se9/html/jvms-6.html#jvms-6.5.invokedynamic
     */
    public function execute(): void
    {
        $cp = $this->getConstantPool();
        /**
         * @var \PHPJava\Kernel\Structures\_InvokeDynamic $invokeDynamicStructure
         */
        $invokeDynamicStructure = $cp[$this->readUnsignedShort()];

        // NOTE: The values of the third and fourth operand bytes must always be zero.
        $thirdByte = $this->read();
        $forthByte = $this->read();

        /**
         * @var _NameAndType $nameAndTypeIndex
         */
        $nameAndTypeIndex = $cp[$invokeDynamicStructure->getNameAndTypeIndex()];

        $name = $cp[$nameAndTypeIndex->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cp[$nameAndTypeIndex->getDescriptorIndex()]->getString());

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

        /**
         * @var BootstrapMethodsAttribute $bootstrapMethodAttribute
         */
        $bootstrapMethodAttribute = AttributionResolver::resolve(
            // NOTE: bootstrapMethods attribution is defined in JavaClass class.
            $this->javaClass->getAttributes(),
            BootstrapMethodsAttribute::class
        );

        /**
         * @var _BootstrapMethod $bootstrapMethod
         */
        $bootstrapMethod = $bootstrapMethodAttribute->getBootstrapMethods()[$invokeDynamicStructure->getBootstrapMethodAttrIndex()];
        $bootstrapMethodArguments = $bootstrapMethod->getBootstrapArguments();

        /**
         * @var _MethodHandle $methodHandle
         */
        $methodHandle = $cp[$bootstrapMethod->getBootstrapMethodRef()];
        switch ($methodHandle->getReferenceKind()) {
            case MethodHandleKind::REF_getField:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_getStatic:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_putField:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_putStatic:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeVirtual:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeStatic:
                $factoryClass = Runtime::PHP_PACKAGES_DIRECTORY . '\\' . str_replace(
                    '/',
                    '\\',
                    $cp[$cp[$cp[$methodHandle->getReferenceIndex()]->getClassIndex()]->getClassIndex()]->getString()
                );
                $methodHandleLookup = new Lookup();

                $methodHandleNameAndTypeConstant = $cp[$cp[$methodHandle->getReferenceIndex()]->getNameAndTypeIndex()];
                $methodHandledName = $cp[$methodHandleNameAndTypeConstant->getNameIndex()]->getString();
                $methodHandledDescriptor = $cp[$methodHandleNameAndTypeConstant->getDescriptorIndex()]->getString();

                // NOTE: Must be a class name.
                $methodHandleType = MethodType::methodType($signature[0]['class_name']);

                $reflectionClass = new \ReflectionClass($factoryClass);
                $methodAccessor = $reflectionClass->getMethod($methodHandledName);

                $arguments = array_merge(
                    [
                        MethodHandles::lookup(),
                        $name,
                        $methodHandleType,
                    ],
                    $bootstrapMethodArguments,
                    $arguments
                );

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
                    [$factoryClass, $methodHandledName],
                    $arguments
                );

                if ($signature[0]['type'] !== 'void') {
                    $this->pushToOperandStack($result);
                }
                break;
            case MethodHandleKind::REF_invokeSpecial:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_newInvokeSpecial:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeInterface:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' does not implemented in ' . __METHOD__);
        }
    }
}
