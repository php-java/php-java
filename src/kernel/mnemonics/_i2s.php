<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Kernel\Utilities\BinaryTool;

final class _i2s implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    public function execute(): void
    {
        $value = $this->getStack();

        $this->pushStack(base_convert(substr(sprintf('%032s', base_convert($value, 10, 2)), 16), 2, 10));

    }

}
