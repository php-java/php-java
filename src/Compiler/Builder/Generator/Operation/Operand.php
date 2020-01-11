<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Generator\Operation;

use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint32;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Exceptions\AssembleStructureException;

class Operand
{
    protected $type;
    protected $value;

    public static function factory(string $type, $value): self
    {
        if (!in_array($type, [Uint8::class, Uint16::class, Uint32::class], true)) {
            throw new AssembleStructureException(
                'Invalid class type: ' . $type
            );
        }
        if (!($value instanceof ConstantPoolFinderResult)
            && !is_int($value)
        ) {
            throw new AssembleStructureException(
                'Passed parameter is not initiated a ConstantPoolFinderResult'
            );
        }
        $scopedValue = $value;
        return new static($type, $scopedValue);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __construct(string $type, &$value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function make(): array
    {
        return [
            $this->type,
            $this->value,
        ];
    }
}
