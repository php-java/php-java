<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JavaClassInterface;
use PHPJava\Kernel\Filters\Normalizer;
use PHPJava\Packages\java\lang\NullPointerException;
use PHPJava\Utilities\Formatter;

final class _invokevirtual extends AbstractOperationCode implements OperationCodeInterface
{
    protected $methodSignature;

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

    /**
     * @throws NullPointerException
     * @throws \PHPJava\Exceptions\IllegalOperationException
     * @throws \PHPJava\Exceptions\NormalizerException
     * @throws \PHPJava\Exceptions\TypeException
     * @throws \PHPJava\Exceptions\UnableToFindAttributionException
     * @throws \PHPJava\Exceptions\UncaughtException
     */
    public function execute(): void
    {
        parent::execute();
        $cpInfo = $this->getConstantPool();
        $cp = $cpInfo[$this->getOperands()['indexbyte']];
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

        $this->methodSignature = $signature;

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
