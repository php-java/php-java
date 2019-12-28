<?php
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Traits\Validatable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\Stream\BinaryWriter;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Mnemonics\OperationCodeInterface;

class Code extends Attribute
{
    use Validatable;

    protected $hasAttribute = true;

    /**
     * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation[]
     */
    protected $operations = [];
    protected $exceptionTables = [];

    /**
     * @var int
     */
    protected $defaultLocals = 0;

    public function setCode(array $operations): self
    {
        $this->validateOperationArray($operations);
        $this->operations = $operations;
        return $this;
    }

    public function setDefaultLocals(int $defaultLocals): self
    {
        $this->defaultLocals = $defaultLocals;
        return $this;
    }

    public function setExceptionTables(array $exceptionTables): self
    {
        $this->exceptionTables = $exceptionTables;
        return $this;
    }

    public function getValue(): string
    {
        $writer = new BinaryWriter(
            fopen('php://memory', 'r+')
        );

        $maxStacks = 0;
        $maxLocals = $this->defaultLocals;
        $countableMaxLocals = $maxLocals;

        // Calculate max stack size from operations
        $opcodeMap = new OpCode();

        foreach ($this->operations as $index => $operation) {
            $mnemonic = Runtime::MNEMONIC_NAMESPACE . '\\' . ($opcodeMap->getName($operation->getOpCode()));
            /**
             * @var OperationCodeInterface $opcodeInstance
             */
            $opcodeInstance = new $mnemonic();

            if ($opcodeInstance->isStackingOperation()) {
                $maxStacks++;
            }

            switch ($operation->getOpCode()) {
                case OpCode::_astore:
                case OpCode::_astore_0:
                case OpCode::_astore_1:
                case OpCode::_astore_2:
                case OpCode::_astore_3:
                case OpCode::_istore:
                case OpCode::_istore_0:
                case OpCode::_istore_1:
                case OpCode::_istore_2:
                case OpCode::_istore_3:
                case OpCode::_lstore:
                case OpCode::_lstore_0:
                case OpCode::_lstore_1:
                case OpCode::_lstore_2:
                case OpCode::_lstore_3:
                case OpCode::_dstore:
                case OpCode::_dstore_0:
                case OpCode::_dstore_1:
                case OpCode::_dstore_2:
                case OpCode::_dstore_3:
                case OpCode::_fstore:
                case OpCode::_fstore_0:
                case OpCode::_fstore_1:
                case OpCode::_fstore_2:
                case OpCode::_fstore_3:
                    $maxLocals = max($maxLocals, ++$countableMaxLocals);
                    break;
                case OpCode::_aload:
                case OpCode::_aload_0:
                case OpCode::_aload_1:
                case OpCode::_aload_2:
                case OpCode::_aload_3:
                case OpCode::_iload:
                case OpCode::_iload_0:
                case OpCode::_iload_1:
                case OpCode::_iload_2:
                case OpCode::_iload_3:
                case OpCode::_lload:
                case OpCode::_lload_0:
                case OpCode::_lload_1:
                case OpCode::_lload_2:
                case OpCode::_lload_3:
                case OpCode::_dload:
                case OpCode::_dload_0:
                case OpCode::_dload_1:
                case OpCode::_dload_2:
                case OpCode::_dload_3:
                case OpCode::_fload:
                case OpCode::_fload_0:
                case OpCode::_fload_1:
                case OpCode::_fload_2:
                case OpCode::_fload_3:
                    $countableMaxLocals--;
                    break;
                case OpCode::_ldc:
                    /**
                     * @var ConstantPoolFinderResult $result
                     */
                    $result = $operation->getOperand(0)
                        ->getValue();

                    if ($result->getResult()->getEntryIndex() > 0xff) {
                        // Change opcode automatically.
                        $this->operations[$index] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                            OpCode::_ldc_w,
                            Operand::factory(
                                Uint16::class,
                                $result
                            )
                        );
                    }
                    break;
            }

            if ($maxLocals < 0) {
                throw new AssembleStructureException(
                    'max locals is underflow.'
                );
            }
        }

        $code = new Operation();

        foreach ($this->operations as $operation) {
            $code->add(
                $operation->getOpCode(),
                $operation->getOperands()
            );
        }

        $code = $code->make();

        // max stack
        $writer->writeUnsignedShort($maxStacks);

        // max locals
        $writer->writeUnsignedShort($maxLocals);

        // code length
        $writer->writeUnsignedInt(strlen($code));

        // code
        $writer->write($code);

        // exception_tables_length
        $writer->writeUnsignedShort(count($this->exceptionTables));

        // exception_tables
        foreach ($this->exceptionTables as [$startPc, $endPc, $handlerPc, $catchType]) {
            $writer->writeUnsignedShort($startPc);
            $writer->writeUnsignedShort($endPc);
            $writer->writeUnsignedShort($handlerPc);
            $writer->writeUnsignedShort($catchType);
        }

        // attributes length
        $writer->writeUnsignedShort(count($this->getAttributes()));

        // attributes
        foreach ($this->getAttributes() as $attribute) {
            /**
             * @var Attribute $attribute
             */
            $writer->writeUnsignedShort(
                $this->getEnhancedConstantPool()
                    ->findUtf8($attribute->getName())
                    ->getResult(false)
                    ->getEntryIndex()
            );
            $value = $attribute->getValue();
            $writer->writeUnsignedInt(strlen($value));
            $writer->write($value);
        }

        return $writer->getStreamContents();
    }
}
