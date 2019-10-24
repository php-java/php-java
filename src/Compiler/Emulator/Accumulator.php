<?php
namespace PHPJava\Compiler\Emulator;

use PHPJava\Compiler\Builder\Attributes\Architects\Frames\Frame;
use PHPJava\Exceptions\EmulatorException;
use PHPJava\Utilities\DebugTool;

class Accumulator
{
    protected $stacks = [];
    protected $locals = [];
    protected $frames = [];
    protected $enableStack = true;
    protected $effectiveProgramCounter = 0;

    /**
     * @var DebugTool
     */
    protected $debugTool;

    public static function factory()
    {
        return new static();
    }

    public function __construct()
    {
        $this->debugTool = new DebugTool(__CLASS__);
    }

    public function popFromOperandStack()
    {
        $this->debugTool->getLogger()->debug(
            'Popped an item, remaining stacks: ' . (count($this->stacks) - 1)
        );

        if ((count($this->stacks) - 1) < 0) {
            throw new EmulatorException(
                'Cannot pop an item because stack is underflow.'
            );
        }

        if (!$this->enableStack) {
            // Dup a stack
            $stack = array_pop($this->stacks);
            $this->stacks[] = $stack;
            return $stack;
        }

        return array_pop($this->stacks);
    }

    public function pushToOperandStack($item): self
    {
        $this->debugTool->getLogger()->debug(
            'Stack an item, remaining stacks: ' . (count($this->stacks) + 1)
        );

        if (!$this->enableStack) {
            return $this;
        }
        $this->stacks[] = $item;
        return $this;
    }

    public function getFromLocal(int $index)
    {
        if (!array_key_exists($index, $this->locals)) {
            throw new EmulatorException(
                'Cannot get an item because item is not available.'
            );
        }
        return $this->locals[$index];
    }

    public function setToLocal(int $index, $value): self
    {
        $this->locals[$index] = $value;
        return $this;
    }

    public function getStacks(): array
    {
        return $this->stacks;
    }

    public function getLocals(): array
    {
        return $this->locals;
    }

    public function countStacks(): int
    {
        return count($this->stacks);
    }

    public function countLocals(): int
    {
        return count($this->locals);
    }

    public function enableStack(bool $enable): self
    {
        $this->enableStack = $enable;
        return $this;
    }

    public function setEffectiveProgramCounter(int $programCounter): self
    {
        $this->effectiveProgramCounter = $programCounter;
        return $this;
    }

    public function getEffectiveProgramCounter(): int
    {
        return $this->effectiveProgramCounter;
    }

    public function addFrame(Frame $frame): self
    {
        $this->frames[] = $frame;
        return $this;
    }

    public function getFrames(): array
    {
        return $this->frames;
    }
}
