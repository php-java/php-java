<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInvoker;

trait Accumulator
{

    /**
     * @var JavaClass|null
     */
    private $javaClass;

    /**
     * @var JavaClassInvoker
     */
    private $javaClassInvoker;
    
    /**
     * @var \PHPJava\Core\JVM\Stream\BinaryReader
     */
    private $reader;
    private $localStorage;
    private $pointer;
    private $stacks = [];

    public function setParameters(
        JavaClassInvoker $javaClassInvoker,
        \PHPJava\Core\JVM\Stream\BinaryReader $reader,
        array &$localStorage,
        array &$stacks,
        int $pointer
    ): self {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->javaClass = $javaClassInvoker->getJavaClass();
        $this->reader = $reader;
        $this->localStorage = $localStorage;
        $this->stacks = &$stacks;
        $this->pointer = $pointer;
        return $this;
    }

    final public function read($bytes = 1)
    {
        return $this->reader->read($bytes);
    }

    public function readByte()
    {
        return $this->reader->readByte();
    }

    public function readUnsignedByte()
    {
        return $this->reader->readUnsignedByte();
    }

    public function readUnsignedInt()
    {
        return $this->reader->readUnsignedInt();
    }

    public function readUnsignedShort()
    {
        return $this->reader->readUnsignedShort();
    }

    public function readInt()
    {
        return $this->reader->readInt();
    }

    public function readShort()
    {
        return $this->reader->readShort();
    }

    public function readUnsignedLong()
    {
        return $this->reader->readUnsignedLong();
    }

    public function readLong()
    {
        return $this->reader->readLong();
    }

    public function seek($bytes)
    {
        $this->reader->seek($bytes);
    }

    public function setOffset($pointer)
    {
        $this->reader->setOffset($pointer);
    }

    public function getOffset()
    {
        return $this->reader->getOffset();
    }


    public function pushStack($value)
    {
        $this->stacks[] = $value;
    }

    public function pushStackByReference(&$value)
    {
        $this->stacks[] = &$value;
    }

    public function dupStack()
    {
        $stack = $this->stacks[sizeof($this->stacks) - 1] ?? null;
        if ($stack === null) {
            throw new \Exception('Stack overflow');
        }
        $this->pushStack($stack);
    }

    public function getStack()
    {
        return array_pop($this->stacks);
    }

    public function popStack()
    {
        array_pop($this->stacks);
    }

    public function getStacks()
    {
        return $this->stacks;
    }

    public function setLocalStorage($index, $value)
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

    public function getLocalStorages()
    {
        return $this->localStorage;
    }

    public function getPointer()
    {
        return $this->pointer;
    }

}
