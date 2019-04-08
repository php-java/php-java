<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;
use PHPJava\Utilities\Formatter;
use PHPJava\Utilities\MethodNameResolver;

final class _invokespecial implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $nameAndTypeIndex = $cpInfo[$cp->getNameAndTypeIndex()];
        $signature = $cpInfo[$nameAndTypeIndex->getDescriptorIndex()]->getString();
        $parsedSignature = Formatter::parseSignature($signature);
        $invokerClass = $this->popFromOperandStack();

        $arguments = [];

        for ($i = 0; $i < $parsedSignature['arguments_count']; $i++) {
            $arguments[] = $this->popFromOperandStack();
        }

        krsort($arguments);

        $methodName = $cpInfo[$nameAndTypeIndex->getNameIndex()]->getString();

        if ($this->javaClassInvoker->isInvoked($methodName, $signature)) {
            return;
        }

        $this->javaClassInvoker
            ->addToSpecialInvokedList($methodName, $signature);

        if ($invokerClass instanceof JavaClass) {
            if ($invokerClass->getInvoker()->isInvoked($methodName, $signature)) {
                return;
            }

            $invokerClass
                ->getInvoker()
                ->addToSpecialInvokedList($methodName, $signature);

            $result = $invokerClass
                ->getInvoker()
                ->getDynamic()
                ->getMethods()
                ->call(
                    $methodName,
                    ...$arguments
                );
        } else {
            $result = call_user_func_array(
                [
                    $invokerClass,
                    MethodNameResolver::resolve($methodName),
                ],
                $arguments
            );
        }

        if ($parsedSignature[0]['type'] !== 'void') {
            $this->pushToOperandStack($result);
        }
    }
}
