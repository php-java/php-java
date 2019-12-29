<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Kernel\Maps\VerificationTypeTag;

class _aload_0 extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        $this->accumulator->pushToOperandStack(
            [
                VerificationTypeTag::ITEMObject_,
                $this->getEnhancedConstantPool()
                    ->findClass(\PHPJava\Packages\java\lang\String_::class),
            ]
        );
    }
}
