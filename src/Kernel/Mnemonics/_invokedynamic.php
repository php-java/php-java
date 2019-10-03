<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Kernel\Attributes\BootstrapMethodsAttribute;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Kernel\Maps\MethodHandleKind;
use PHPJava\Kernel\Resolvers\AttributionResolver;
use PHPJava\Kernel\Structures\_BootstrapMethod;
use PHPJava\Kernel\Structures\MethodHandleInfo;
use PHPJava\Kernel\Structures\NameAndTypeInfo;
use PHPJava\Packages\java\lang\invoke\MethodHandles;
use PHPJava\Packages\java\lang\invoke\MethodHandles\Lookup;
use PHPJava\Packages\java\lang\invoke\MethodType;
use PHPJava\Utilities\Formatter;

final class _invokedynamic extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

    use \PHPJava\Kernel\Core\DependencyInjector;

    public function getOperands(): ?Operands
    {
        parent::getOperands();
        if ($this->operands !== null) {
            return $this->operands;
        }
        $indexbyte = $this->readUnsignedShort();

        return $this->operands = new Operands(
            ['indexbyte', $indexbyte, ['indexbyte1', 'indexbyte2']]
        );
    }

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
        parent::execute();
        $cp = $this->getConstantPool();
        /**
         * @var \PHPJava\Kernel\Structures\InvokeDynamicInfo $invokeDynamicStructure
         */
        $invokeDynamicStructure = $cp[$this->getOperands()['indexbyte']];

        // NOTE: The values of the third and fourth operand bytes must always be zero.
        $thirdByte = $this->read();
        $forthByte = $this->read();

        /**
         * @var NameAndTypeInfo $nameAndTypeIndex
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
         * @var MethodHandleInfo $methodHandle
         */
        $methodHandle = $cp[$bootstrapMethod->getBootstrapMethodRef()];

        $result = null;
        switch ($methodHandle->getReferenceKind()) {
            case MethodHandleKind::REF_getField:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_getStatic:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_putField:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_putStatic:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeVirtual:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeStatic:
                $factoryClassName = $cp[$cp[$cp[$methodHandle->getReferenceIndex()]->getClassIndex()]->getClassIndex()]->getString();

                $methodHandleLookup = new Lookup();

                $methodHandleNameAndTypeConstant = $cp[$cp[$methodHandle->getReferenceIndex()]->getNameAndTypeIndex()];
                $methodHandledName = $cp[$methodHandleNameAndTypeConstant->getNameIndex()]->getString();
                $methodHandledDescriptor = $cp[$methodHandleNameAndTypeConstant->getDescriptorIndex()]->getString();

                // NOTE: Must be a class name.
                $methodHandleType = MethodType::methodType($signature[0]['class_name']);

                $arguments = array_merge(
                    [
                        MethodHandles::lookup(),
                        $name,
                        $methodHandleType,
                    ],
                    $bootstrapMethodArguments,
                    $arguments
                );

                $invokerClass = JavaClass::load(
                    $factoryClassName,
                    $this->javaClass->getOptions(),
                    false
                );
                $annotations = $this->getAnnotateInjections(
                    $invokerClass
                        ->getInvoker()
                        ->getStatic()
                        ->getMethods()
                        ->getAnnotations($methodHandledName)
                );

                if (!empty($annotations)) {
                    array_unshift($arguments, ...$annotations);
                }

                $this->getDebugTool()->getLogger()->debug(
                    vsprintf(
                        'Call a method: %s, parameters: %d',
                        [
                            $methodHandledName,
                            count($arguments),
                        ]
                    )
                );

                $result = $invokerClass
                    ->getInvoker()
                    ->getStatic()
                    ->getMethods()
                    ->call(
                        $methodHandledName,
                        ...$arguments
                    );
                break;
            case MethodHandleKind::REF_invokeSpecial:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_newInvokeSpecial:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
            case MethodHandleKind::REF_invokeInterface:
                throw new NotImplementedException($methodHandle->getReferenceKind() . ' is not implemented in ' . __METHOD__);
        }

        if ($signature[0]['type'] !== 'void') {
            $this->pushToOperandStack(
                Normalizer::normalizeReturnValue(
                    $result,
                    $signature[0]
                )
            );
        }
    }
}
