<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Utilities\Formatter;

final class _invokestatic extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Kernel\Core\DependencyInjector;
    use \PHPJava\Kernel\Core\ExceptionTableInspectable;

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

    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->getOperands()['indexbyte']];
        $className = $cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString();
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());

        $arguments = [];
        if (($length = $signature['arguments_count'] - 1) >= 0) {
            $arguments = array_fill(0, $length, null);
            for ($i = $length; $i >= 0; $i--) {
                $arguments[$i] = $this->popFromOperandStack();
            }
        }

        $result = null;

        try {
            $classObject = JavaClass::load($className, $this->javaClass->getOptions(), false);
            $annotations = $this->getAnnotateInjections(
                $classObject
                    ->getInvoker()
                    ->getStatic()
                    ->getMethods()
                    ->getAnnotations(
                        $methodName
                    )
            );

            if (!empty($annotations)) {
                array_unshift($arguments, ...$annotations);
            }

            $result = $classObject
                ->getInvoker()
                ->getStatic()
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
