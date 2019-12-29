<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Builder\Attributes\Architects\Frames;

use PHPJava\Compiler\Builder\Attributes\Architects\Architect;
use PHPJava\Compiler\Builder\Attributes\Architects\ArchitectInterface;

abstract class Frame extends Architect implements ArchitectInterface
{
    protected $programCounter = 0;
    protected $branchTarget = 0;
    protected $locals = [];
    protected $stacks = [];
    protected $offsetDelta;

    abstract public function getTag(): int;

    public function setProgramCounter(int $offset): self
    {
        $this->programCounter = $offset;
        return $this;
    }

    public function getProgramCounter(): int
    {
        return $this->programCounter;
    }

    public function setBranchTarget(int $offset): self
    {
        $this->branchTarget = $offset;
        return $this;
    }

    public function getBranchTarget(): int
    {
        return $this->branchTarget;
    }

    public function getOffsetDelta(): int
    {
        return $this->offsetDelta;
    }

    public function setOffsetDelta(int $offsetDelta): self
    {
        $this->offsetDelta = $offsetDelta;
        return $this;
    }

    public function getLocals(): array
    {
        return $this->locals;
    }

    public function addLocal(int $verificationType, ...$arguments): self
    {
        $this->locals[] = array_merge([$verificationType], $arguments);
        return $this;
    }

    public function addStack(int $verificationType, ...$arguments): self
    {
        $this->stacks[] = array_merge([$verificationType], $arguments);
        return $this;
    }

    public function setLocals(array $locals): self
    {
        $this->locals = $locals;
        return $this;
    }

    public function setStacks(array $stacks): self
    {
        $this->stacks = $stacks;
        return $this;
    }

    public function getStacks(): array
    {
        return $this->stacks;
    }
}
