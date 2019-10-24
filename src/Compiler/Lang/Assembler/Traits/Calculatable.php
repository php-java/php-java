<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\OperationGeneratorInterface;
use PHPJava\Compiler\Builder\Generator\Operation\ReplaceMarker;
use PHPJava\Compiler\Builder\Types\Int16;
use PHPJava\Compiler\Builder\Types\Int32;
use PHPJava\Compiler\Builder\Types\Int64;
use PHPJava\Compiler\Builder\Types\Int8;
use PHPJava\Compiler\Builder\Types\TypeInterface;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint32;
use PHPJava\Compiler\Builder\Types\Uint64;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
trait Calculatable
{
    public function calculateProgramCounterByOperationCodes(array $operations, ?int $targetOpCode = null, int $offset = 0): int
    {
        $counter = 0;
        foreach ($operations as $operation) {
            if (!($operation instanceof OperationGeneratorInterface)) {
                continue;
            }

            // Returns a program counter from hit operation code in operation codes.
            if ($operation->getOpCode() === $targetOpCode
                && $counter >= $offset
            ) {
                return $counter;
            }

            // Count opcode
            $counter++;

            /**
             * @var \PHPJava\Compiler\Builder\Generator\Operation\Operation|ReplaceMarker $operation
             */
            foreach ($operation->getOperandTypes() as $operandType) {
                /**
                 * @var TypeInterface $operandType
                 */
                switch ($operandType) {
                    case Int8::class:
                    case Uint8::class:
                    case Int16::class:
                    case Uint16::class:
                    case Int32::class:
                    case Uint32::class:
                    case Int64::class:
                    case Uint64::class:
                        $counter += $operandType::sizeOf();
                        break;
                    default:
                        throw new AssembleStructureException(
                            'Does not calculate count of values. Operand in ReplacerMaker is invalid.'
                        );
                }
            }
        }
        return $counter;
    }
}
