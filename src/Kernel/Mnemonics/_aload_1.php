<?php
namespace PHPJava\Kernel\Mnemonics;

use PHPJava\Core\JVM\Intern\StringIntern;
use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Utilities\BinaryTool;

final class _aload_1 implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * load a reference onto the stack from local variable 1
     */
    public function execute(): void
    {
        $index = 1;
        $stringIntern = $this->javaClassInvoker
            ->getProvider('InternProvider')
            ->get(StringIntern::class);
        $internedValue = $stringIntern[spl_object_id($this->getLocalStorage($index))] ?? null;
        $this->pushToOperandStack($internedValue ?: $this->getLocalStorage($index));
    }
}
