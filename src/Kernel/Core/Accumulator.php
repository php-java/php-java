<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Exceptions\IllegalOperationException;
use PHPJava\Kernel\Provider\DependencyInjectionProvider;
use PHPJava\Kernel\Structures\MethodInfo;

trait Accumulator
{
    /**
     * @var null|JavaClass
     */
    protected $javaClass;

    /**
     * @var \PHPJava\Kernel\Attributes\AttributeInfo[]
     */
    protected $attributes = [];

    /**
     * @var ClassInvokerInterface
     */
    protected $javaClassInvoker;

    /**
     * @var \PHPJava\Core\JVM\Stream\BinaryReader
     */
    protected $reader;

    /**
     * @var array
     */
    protected $localStorage;

    /**
     * @var int
     */
    protected $pointer;

    /**
     * @var array
     */
    protected $stacks = [];

    /**
     * @var array
     */
    protected $options;

    /**
     * @var MethodInfo $method
     */
    protected $method;

    /**
     * @var DependencyInjectionProvider
     */
    protected $dependencyInjectionProvider;

    protected $poppedOperandStacks = [];

    protected $pushedOperandStacks = [];

    public function setParameters(
        MethodInfo $method,
        ClassInvokerInterface $javaClassInvoker,
        \PHPJava\Core\JVM\Stream\BinaryReader $reader,
        array &$localStorage,
        array &$stacks,
        int $pointer,
        DependencyInjectionProvider $dependencyInjectionProvider
    ): self {
        $this->method = $method;
        $this->attributes = $method->getAttributes();
        $this->javaClassInvoker = $javaClassInvoker;
        $this->javaClass = $javaClassInvoker->getJavaClass();
        $this->options = $this->javaClass->getOptions();
        $this->reader = $reader;
        $this->localStorage = &$localStorage;
        $this->stacks = &$stacks;
        $this->pointer = $pointer;
        $this->dependencyInjectionProvider = $dependencyInjectionProvider;
        return $this;
    }

    final public function read(int $bytes = 1): string
    {
        return $this->reader->read($bytes);
    }

    public function readByte(): int
    {
        return $this->reader->readByte();
    }

    public function readUnsignedByte(): int
    {
        return $this->reader->readUnsignedByte();
    }

    public function readUnsignedInt(): int
    {
        return $this->reader->readUnsignedInt();
    }

    public function readUnsignedShort(): int
    {
        return $this->reader->readUnsignedShort();
    }

    public function readInt(): int
    {
        return $this->reader->readInt();
    }

    public function readShort(): int
    {
        return $this->reader->readShort();
    }

    public function readUnsignedLong(): int
    {
        return $this->reader->readUnsignedLong();
    }

    public function readLong(): int
    {
        return current(unpack('q', $this->read(8)));
    }

    public function seek(int $bytes): void
    {
        $this->reader->seek($bytes);
    }

    public function setOffset(int $pointer): void
    {
        $this->reader->setOffset($pointer);
    }

    public function getOffset(): int
    {
        return $this->reader->getOffset();
    }

    public function pushToOperandStack($value): void
    {
        $this->pushedOperandStacks[] = $this->stacks[] = $value;
    }

    public function pushToOperandStackByReference(&$value): void
    {
        $this->pushedOperandStacks[] = $this->stacks[] = &$value;
    }

    public function popFromOperandStack()
    {
        if (empty($this->stacks)) {
            throw new IllegalOperationException('Cannot pop an item from stack.');
        }
        return $this->poppedOperandStacks[] = array_pop($this->stacks);
    }

    public function getCurrentStackIndex(): int
    {
        return count($this->stacks) - 1;
    }

    public function popStack(): self
    {
        $this->poppedOperandStacks[] = array_pop($this->stacks);
        return $this;
    }

    public function getStacks()
    {
        return $this->stacks;
    }

    public function setLocalStorage($index, $value): void
    {
        $this->localStorage[(int) $index] = $value;
    }

    public function getLocalStorage($index)
    {
        if (!isset($this->localStorage[(int) $index])) {
            $this->localStorage[(int) $index] = null;
        }
        return $this->localStorage[(int) $index];
    }

    public function getLocalStorages(): array
    {
        return $this->localStorage;
    }

    public function getProgramCounter(): int
    {
        return $this->pointer;
    }

    public function getOptions($key)
    {
        return $this->options[$key] ?? null;
    }

    /**
     * @return \PHPJava\Kernel\Attributes\AttributeInfo[]
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
