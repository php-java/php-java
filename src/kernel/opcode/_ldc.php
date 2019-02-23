<?php
namespace PHPJava\Kernel\OpCode;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _ldc implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();

        $data = $cpInfo[$this->readUnsignedByte()];

        $value = null;

        if ($data instanceof \JavaStructureString) {
            $value = $cpInfo[$data->getStringIndex()];

            if ($value instanceof \JavaStructureUtf8) {

                // convert java string
                $this->getInvoker()->loadPlatform('java.lang.String');

                $value = new \java\lang\String($value);
            }
        } elseif (($data instanceof \JavaStructureInteger) || ($data instanceof \JavaStructureFloat)) {
            $value = $data->getBytes();
        } else {
            $value = $cpInfo[$cpInfo[$this->readUnsignedByte()]->getStringIndex()];
        }

        $this->pushStack($value);
    }
}
