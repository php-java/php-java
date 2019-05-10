<?php
namespace PHPJava\Kernel\Mnemonics;

final class _anewarray implements OperationInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    /**
     * create a new array of references of length count and component
     * type identified by the class reference index (indexbyte1 << 8 + indexbyte2)
     * in the constant pool.
     */
    public function execute(): void
    {
        // 配列のサイズを調べる (PHPでは不要なので実行するだけ)
        $this->readUnsignedShort();

        // 空の配列を渡す (nullで埋める)
        $count = $this->popFromOperandStack();
        // need reference
        $ref = new \ArrayIterator(array_fill(0, $count, null));
        $this->pushToOperandStackByReference($ref);
    }
}
