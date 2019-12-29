<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Structures\Info\IntegerInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\VerificationTypeTag;

class _ldc extends AbstractOperationCode implements OperationCodeInterface
{
    use \PHPJava\Compiler\Emulator\Traits\GeneralProcessor;

    public function execute(): void
    {
        /**
         * @var ConstantPoolFinderResult $finderResult
         */
        $finderResult = $this->operation->getOperand(0)->getValue();
        switch (get_class($finderResult->getResult()->getEntry())) {
            case IntegerInfo::class:
                $this->getEnhancedConstantPool()
                    ->addClass(\PHPJava\Packages\java\lang\Integer::class);

                $this->accumulator->pushToOperandStack(
                    [
                        VerificationTypeTag::ITEM_Integer,
                    ]
                );
                break;
            case StringInfo::class:
                $this->getEnhancedConstantPool()
                    ->addClass(\PHPJava\Packages\java\lang\String_::class);

                $this->accumulator->pushToOperandStack(
                    [
                        VerificationTypeTag::ITEM_Object,
                        $this->getEnhancedConstantPool()
                            ->findClass(\PHPJava\Packages\java\lang\String_::class),
                    ]
                );
                break;
            default:
                throw new AssembleStructureException(
                    'Unsupported entry type: ' . get_class($finderResult->getResult()->getEntry())
                );
        }
    }
}
