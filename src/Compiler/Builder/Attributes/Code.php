<?php
namespace PHPJava\Compiler\Builder\Attributes;

use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Core\JVM\Stream\BinaryWriter;
use PHPJava\Exceptions\CoordinateStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Mnemonics\OperationCodeInterface;

class Code extends Attribute
{
    protected $hasAttribute = true;

    /**
     * @var Operation
     */
    protected $code;
    protected $exceptionTables = [];

    public function setCode(Operation $code): self
    {
        $this->code = $code;
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
        $maxLocals = 1;
        $countableMaxLocals = $maxLocals;

        // Calculate max stack size from operations
        $opcodeMap = new OpCode();
        foreach ($this->code as $index => $operation) {
            $opcode = $operation[0] ?? null;
            $operands = $operation[1] ?? null;

            $mnemonic = Runtime::MNEMONIC_NAMESPACE . '\\' . ($opcodeMap->getName($opcode));
            /**
             * @var OperationCodeInterface $opcodeInstance
             */
            $opcodeInstance = new $mnemonic();

            if ($opcodeInstance->isStackingOperation()) {
                $maxStacks++;
            }

            switch ($opcode) {
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
                    [, $result] = $operands[0];
                    if ($result->getResult()->getEntryIndex() > 0xff) {
                        // Change opcode automatically.
                        $this->code->set(
                            $index,
                            OpCode::_ldc_w,
                            [
                                [
                                    Uint16::class,
                                    $operands[0][1],
                                ],
                            ]
                        );
                    }
                    break;
            }

            if ($maxLocals < 0) {
                throw new CoordinateStructureException(
                    'max locals is not correct.'
                );
            }
        }

        $code = $this->code->make();

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
            $writer->write($attribute->getValue());
        }

        return $writer->getStreamContents();
    }
}
