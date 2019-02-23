<?php
namespace PHPJava\Kernel\Mnemonics;

use \PHPJava\Exceptions\NotImplementedException;
use \PHPJava\Utilities\BinaryTool;

final class _aconst_null implements MnemonicInterface
{
    use \PHPJava\Kernel\Core\Accumulator;

    /**
     * store into a reference in an array
     */
    public function execute(): void
    {
        $this->pushStack(null);
    }
}
