<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Formatter;

final class _instanceof implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cp = $this->getConstantPool();

        /**
         * @var JavaClass $objectref
         */
        $objectref = $this->popFromOperandStack();

        $targetClass = $cp[$cp[$this->readUnsignedShort()]->getClassIndex()];

        [, $className] = Formatter::convertJavaNamespaceToPHP($targetClass);

        if ($objectref->is($className)) {
            $this->pushToOperandStack(
                _Int::get(1)
            );
            return;
        }

        $this->pushToOperandStack(
            _Int::get(0)
        );
    }
}
