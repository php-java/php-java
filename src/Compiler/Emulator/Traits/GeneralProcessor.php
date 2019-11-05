<?php
namespace PHPJava\Compiler\Emulator\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Frames\FullFrame;
use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Emulator\Accumulator;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Maps\VerificationTypeTag;
use PHPJava\Kernel\Resolvers\TypeResolver;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Utilities\Formatter;

/**
 * @property \PHPJava\Compiler\Builder\Generator\Operation\Operation $operation
 * @property Accumulator $accumulator
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait GeneralProcessor
{
    public function getClassNameFromOperand(): string
    {
        return $this->operation->getOperand(0)->getValue()->getArguments()[0];
    }

    public function getSignature(int $index): array
    {
        return Formatter::parseSignature(
            $this
                ->operation
                ->getOperand(0)
                ->getValue()
                ->getArguments()[$index]
        ) ?? [];
    }

    public function getClassName(): ?string
    {
        return $this->getSignature(2)[0]['type'] ?? null;
    }

    public function getReturnType(): ?string
    {
        return $this->getSignature(2)[0]['type'] ?? null;
    }

    public function pushToOperandStackByType(string $type, string $className = null): void
    {
        if (!TypeResolver::isPrimitive($type)) {
            $this->accumulator->pushToOperandStack(
                [
                    VerificationTypeTag::ITEM_Object,
                    $this->getEnhancedConstantPool()
                        ->findClass($className),
                ]
            );
            return;
        }
        // TODO: Rename parseSignature
        switch ($type) {
            case _Void::class:
                break;
            case _Int::class:
                $this->accumulator->pushToOperandStack(
                    [
                        VerificationTypeTag::ITEM_Integer,
                    ]
                );
                break;
            default:
                throw new AssembleStructureException(
                    'Invalid signature type: ' . $this->getReturnType()
                );
        }
    }

    public function addFrame(): void
    {
        $branchTarget = $this->programCounter + $this->operation
            ->getOperand(0)
            ->getValue();

        if ($this->operation->isEffectiveProgramCounter()) {
            $this->accumulator
                ->enableStack(false)
                ->setEffectiveProgramCounter($branchTarget);
        }

        $entry = FullFrame::init()
            ->setBranchTarget($branchTarget)
            ->setProgramCounter($this->programCounter);

        foreach ($this->accumulator->getLocals() as $local) {
            $entry->addLocal(
                $local[0],
                ...array_slice($local, 1)
            );
        }

        $this->accumulator
            ->enableStack(
                $this->operation->getOpCode() !== OpCode::_goto
            );

        foreach ($this->accumulator->getStacks() as $stack) {
            $entry->addStack(
                $stack[0],
                ...array_slice($stack, 1)
            );
        }

        $this->accumulator
            ->addFrame($entry);
    }
}
