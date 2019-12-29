<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClass;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Utilities\Formatter;

final class _instanceof extends AbstractOperationCode implements OperationCodeInterface
{
    protected $isStackingOperation = true;

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
        $cp = $this->getConstantPool();

        /**
         * @var JavaClass $objectref
         */
        $objectref = $this->popFromOperandStack();

        $targetClass = $cp[$cp[$this->getOperands()['indexbyte']]->getClassIndex()];

        [, $className] = Formatter::convertJavaNamespaceToPHP((string) $targetClass);

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
