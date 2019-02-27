<?php
namespace PHPJava\Kernel\Mnemonics;

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
        $cpInfo = $this->getConstantPool()->getEntries();
        $cp = $cpInfo[$this->readUnsignedShort()];
        $methodName = $cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString();
        $signature = Formatter::parseSignature($cpInfo[$cpInfo[$cp->getNameAndTypeIndex()]->getDescriptorIndex()]->getString());
        $arguments = [];
        [$resourceType, $classObject] = ClassResolver::resolve($cpInfo[$cpInfo[$cp->getClassIndex()]->getClassIndex()]->getString());
        for ($i = 0; $i < $signature['arguments_count']; $i++) {
            $arguments[] = $this->getStack();
        }
        
        krsort($arguments);

        $return = null;
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
                        $methodName
                    ],
                    $arguments
                );
                break;
        }
        
        if ($signature[0]['type'] !== 'void') {
            $this->pushStack($return);
        }
    }
}
