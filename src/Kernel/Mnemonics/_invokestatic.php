<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Exceptions\NotImplementedException;
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
            case ClassResolver::RESOLVED_TYPE_IMITATION:
                $return = forward_static_call_array(
                    [
                        $classObject,
                        "{$prefix}_{$methodName}"
                    ],
                    $arguments
                );
                break;
        }
        
        if ($signature[0]['type'] !== 'void') {
            $this->pushToOperandStack($return);
        }
    }
}
