<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\AppendFrame;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\Frame;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\FullFrame;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\SameFrame;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\SameFrameExtended;
use PHPJava\Compiler\Builder\Attributes\Architects\Frames\SameLocals1StackItemFrame;
use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Emulator\Accumulator;
use PHPJava\Compiler\Emulator\Mnemonics\AbstractOperationCode;
use PHPJava\Compiler\Lang\Assembler\Traits\Calculatable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Validatable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\Stream\BinaryWriter;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\VerificationTypeTag;
use PHPJava\Kernel\Types\_Byte;
use PHPJava\Kernel\Types\_Char;
use PHPJava\Kernel\Types\_Float;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Long;
use PHPJava\Kernel\Types\_Short;
use PHPJava\Utilities\ArrayTool;
use PHPJava\Utilities\Formatter;

class StackMapTable extends Attribute
{
    use Calculatable;
    use Validatable;
    use StoreManageable;

    /**
     * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation[]
     */
    protected $operations;

    /**
     * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation[]
     */
    protected $localVariables;

    /**
     * @var FullFrame[]
     */
    protected $entries = [];

    public function setOperation(array $operations): self
    {
        $this->validateOperationArray($operations);
        $this->operations = $operations;
        return $this;
    }

    public function setDefaultLocalVariables(array $variables): self
    {
        $this->localVariables = $variables;
        return $this;
    }

    public function beginPreparation(): Attribute
    {
        foreach ($this->localVariables as $localVariable) {
            [, $type] = $localVariable;
            switch ($type) {
                case _Int::class:
                case _Long::class:
                case _Float::class:
                case _Short::class:
                case _Byte::class:
                case _Char::class:
                    // Nothing to do...
                    break;
                default:
                    $this->getEnhancedConstantPool()
                        ->addClass($type);
                    break;
            }
        }

        $this->entries = [];

        $programCounter = 0;
        $effectiveProgramCounter = null;

        $emulatedAccumulator = new Accumulator();
        $currentOffset = 0;

        foreach ($this->operations as $operation) {
            $programCounter = $this->calculateProgramCounterByOperationCodes(
                $this->operations,
                $operation->getOpCode(),
                $programCounter
            );

            if ($emulatedAccumulator->getEffectiveProgramCounter() !== null
                && $programCounter >= $emulatedAccumulator->getEffectiveProgramCounter()
            ) {
                $emulatedAccumulator
                    ->enableStack(true);
            }

            /**
             * @var AbstractOperationCode $mnemonic
             */
            $mnemonic = Runtime::EMULATOR_MNEMONIC_NAMESPACE . '\\' . $operation->getMnemonic();
            $executor = (new $mnemonic($operation, $emulatedAccumulator, $programCounter));

            // Execute emulated operation.
            $executor
                ->setConstantPool($this->getConstantPool())
                ->setConstantPoolFinder($this->getConstantPoolFinder())
                ->execute();
        }

        $this->entries = $emulatedAccumulator->getFrames();

        if (!empty($this->entries)) {
            foreach ($this->getStore()->getAll() as $variableName => $variable) {
                [$index, $classType, $dimensionsOfArray] = $variable;
                $classType = Formatter::buildSignature($classType, $dimensionsOfArray);
                $this->getEnhancedConstantPool()
                    ->addClass($classType);
            }
        }

        return parent::beginPreparation();
    }

    public function getValue(): string
    {
        $writer = new BinaryWriter(
            fopen('php://memory', 'r+')
        );

        $entries = $this->entries;

        // Set verified entries
        usort(
            $entries,
            static function (FullFrame $a, FullFrame $b) {
                return $a->getBranchTarget() <=> $b->getBranchTarget();
            }
        );

        /**
         * Remove duplicated branch target and frame type was zero.
         *
         * @var FullFrame $previousFrame
         */
        $entries = array_reduce(
            $entries,
            static function (array $carry, FullFrame $frame) use (&$entries) {
                foreach ($carry as $index => $previousFrame) {
                    /**
                     * @var FullFrame $previousFrame
                     */
                    if ($frame->getBranchTarget() === $previousFrame->getBranchTarget()) {
                        // Replace to new arrival entry.
                        $carry[$index] = $frame;
                        return $carry;
                    }
                }
                $carry[] = $frame;
                return $carry;
            },
            []
        );

        /**
         * @var FullFrame[] $frames
         */
        $frames = [];

        $previousFrame = null;
        foreach ($entries as $frame) {
            /**
             * @var FullFrame $frame
             * @var null|FullFrame $previousFrame
             */
            $stacks = count($frame->getStacks());
            $locals = count($frame->getLocals());
            $samePreviousLocalsAndCurrentLocals = $previousFrame !== null
                && $locals === count($previousFrame->getLocals());

            $entry = null;
            $offsetDelta = $frame->getBranchTarget();
            if ($previousFrame !== null) {
                $offsetDelta = $frame->getBranchTarget() - $previousFrame->getBranchTarget() - 1;
            }

            if ($stacks === 0
                && ($locals === 0 || $samePreviousLocalsAndCurrentLocals)
            ) {
                $entry = SameFrame::init();
            } elseif ($stacks === 1
                && ($locals === 0 || $samePreviousLocalsAndCurrentLocals)
            ) {
                $entry = SameLocals1StackItemFrame::init();
            } elseif ($stacks === 0 && $locals > 0) {
                $entry = AppendFrame::init();
            } else {
                $entry = $frame;
            }

            $entry
                ->setOffsetDelta($offsetDelta)
                ->setProgramCounter($frame->getProgramCounter())
                ->setBranchTarget($frame->getBranchTarget())
                ->setLocals($frame->getLocals())
                ->setStacks($frame->getStacks());

            $frames[] = $previousFrame = $entry;
        }

        $writer->writeUnsignedShort(
            count($frames)
        );

        foreach ($frames as $entry) {
            /**
             * @var Frame $entry
             */
            $writer->writeUnsignedByte($entry->getTag());
            switch (get_class($entry)) {
                case SameFrame::class:
                    // Nothing to do.
                    break;
                case SameFrameExtended::class:
                    /**
                     * @var SameFrameExtended $entry
                     */
                    $writer->writeUnsignedShort($entry->getOffsetDelta());
                    break;
                case SameLocals1StackItemFrame::class:
                    /**
                     * @var SameLocals1StackItemFrame $entry
                     */
                    $this->writeStackMapTableVerificationSegment(
                        $writer,
                        $entry->getStacks()
                    );
                    break;
                case AppendFrame::class:
                    /**
                     * @var AppendFrame $entry
                     */
                    $writer->writeUnsignedShort($entry->getOffsetDelta());
                    $this->writeStackMapTableVerificationSegment(
                        $writer,
                        $entry->getLocals()
                    );
                    break;
                case FullFrame::class:
                    /**
                     * @var FullFrame $entry
                     */
                    $writer->writeUnsignedShort($entry->getOffsetDelta());
                    $locals = [];
                    foreach ($this->localVariables as $variableName => $variable) {
                        [$index, $classType, $dimensionsOfArray] = $variable;
                        $classType = Formatter::buildSignature($classType, $dimensionsOfArray);
                        $locals[$index] = [
                            VerificationTypeTag::ITEM_Object,
                            $this->getEnhancedConstantPool()
                                ->findClass($classType),
                        ];
                    }

                    ArrayTool::concat(
                        $locals,
                        ...$entry->getLocals()
                    );

                    $writer->writeUnsignedShort(count($locals));
                    $this->writeStackMapTableVerificationSegment(
                        $writer,
                        $locals
                    );

                    $writer->writeUnsignedShort(count($entry->getStacks()));
                    $this->writeStackMapTableVerificationSegment(
                        $writer,
                        $entry->getStacks()
                    );
                    break;
                default:
                    throw new AssembleStructureException(
                        sprintf(
                            'Unsupported frame class: %s',
                            get_class($entry)
                        )
                    );
            }
        }

        return $writer->getStreamContents();
    }

    protected function writeStackMapTableVerificationSegment(BinaryWriter $writer, array $segments): void
    {
        foreach ($segments as $segment) {
            [$verificationTypeTag] = $segment;
            $writer->writeUnsignedByte(
                $verificationTypeTag
            );
            switch ($verificationTypeTag) {
                case VerificationTypeTag::ITEM_Top:
                case VerificationTypeTag::ITEM_Integer:
                case VerificationTypeTag::ITEM_Float:
                case VerificationTypeTag::ITEM_Null:
                case VerificationTypeTag::ITEM_UninitializedThis:
                case VerificationTypeTag::ITEM_Long:
                case VerificationTypeTag::ITEM_Double:
                    // Nothing to do.
                    break;
                case VerificationTypeTag::ITEM_Object:
                    $classEntry = $segment[1];
                    /**
                     * @var ConstantPoolFinderResult $classEntry
                     */
                    $writer->writeUnsignedShort(
                        $classEntry
                            ->getResult()
                            ->getEntryIndex()
                    );
                    break;
                case VerificationTypeTag::ITEM_Uninitialized:
                default:
                    throw new AssembleStructureException(
                        sprintf(
                            'Unsupported verification type: %s',
                            $verificationTypeTag
                        )
                    );
            }
        }
    }
}
