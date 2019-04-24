<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Structures\_ExceptionTable;
use PHPJava\Utilities\AttributionResolver;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\ClassResolver;
use PHPJava\Utilities\Formatter;

final class _invokestatic implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        $arguments = [];
        $this->getOptions('class_resolver')
            ->resolve($cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString());
        [$resourceType, $classObject] = $this->getOptions('class_resolver')
            ->resolve($cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString());
        for ($i = 0; $i < $signature['arguments_count']; $i++) {
            $arguments[] = $this->popFromOperandStack();
        }
        krsort($arguments);
        $return = null;

        $prefix = $this->getOptions('prefix_static') ?? GlobalOptions::get('prefix_static') ?? Runtime::PREFIX_STATIC;

        try {
            switch ($resourceType) {
                case ClassResolver::RESOLVED_TYPE_CLASS:
                    /**
                     * @var \PHPJava\Core\JavaClass $classObject
                     */
                    $return = $classObject
                        ->getInvoker()
                        ->getStatic()
                        ->getMethods()
                        ->call(
                            $methodName,
                            ...$arguments
                        );
                    break;
                case ClassResolver::RESOLVED_TYPE_PACKAGES:
                    $return = forward_static_call_array(
                        [
                            $classObject,
                            "{$prefix}{$methodName}"
                        ],
                        $arguments
                    );
                    break;
            }
        } catch (\Exception $e) {
            // Handling exceptions.

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
                $expectedClass . ': ' . $e->getMessage()
            );
        }
        
        if ($signature[0]['type'] !== 'void') {
            $this->pushToOperandStack($return);
        }
    }
}
