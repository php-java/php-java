<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Utilities\Formatter;

final class _invokevirtual implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;
    use \PHPJava\Kernel\Core\DependencyInjector;
    use \PHPJava\Kernel\Core\ExceptionTableInspectable;

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

        /**
         * @var JavaClassInterface $invokerClass
         */
        $invokerClass = $this->popFromOperandStack();
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();

        if ($invokerClass === null) {
            throw new NullPointerException(
                str_replace('/', '.', $class) . ' is a NULL.'
            );
        }

        try {
            $annotations = $this->getAnnotateInjections(
                $invokerClass
                    ->getInvoker()
                    ->getDynamic()
                    ->getMethods()
                    ->getAnnotations(
                        $methodName
                    )
            );

            if (!empty($annotations)) {
                array_unshift($arguments, ...$annotations);
            }

            $result = $invokerClass
                ->getInvoker()
                ->getDynamic()
                ->getMethods()
                ->call(
                    $methodName,
                    ...$arguments
                );
        } catch (\Exception $e) {
            $this->inspectExceptionTable($e);
            return;
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
