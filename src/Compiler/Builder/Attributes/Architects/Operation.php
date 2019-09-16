<?php
namespace PHPJava\Compiler\Builder\Attributes\Architects;

use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint32;
use PHPJava\Compiler\Builder\Types\Uint64;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Core\JVM\Stream\BinaryWriter;

class Operation extends Architect implements ArchitectInterface
{
    /**
     * @var array
     */
    protected $codes = [];

    public function add(int $opcode, array $arguments = []): self
    {
        $this->codes[] = [$opcode, $arguments];
        return $this;
    }

    public function getValue(): string
    {
        $writer = new BinaryWriter(fopen('php://memory', 'r+'));
        foreach ($this->codes as [$opcode, $arguments]) {
            $writer->writeUnsignedByte($opcode);
            foreach ($arguments as [$type, $value]) {
                if ($value instanceof ConstantPoolFinderResult) {
                    $value = $value
                        ->getResult()
                        ->getEntryIndex();
                }
                switch ($type) {
                    case Uint8::class:
                        $writer->writeUnsignedByte($value);
                        break;
                    case Uint16::class:
                        $writer->writeUnsignedShort($value);
                        break;
                    case Uint32::class:
                        $writer->writeUnsignedInt($value);
                        break;
                    case Uint64::class:
                        $writer->writeUnsignedLong($value);
                        break;
                }
            }
        }
        return $writer->getStreamContents();
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
