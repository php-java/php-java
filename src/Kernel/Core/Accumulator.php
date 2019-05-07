<?php
namespace PHPJava\Kernel\Core;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInvoker;
use PHPJava\Kernel\Provider\DependencyInjectionProvider;
use PHPJava\Kernel\Structures\_MethodInfo;

trait Accumulator
{

    /**
     * @var JavaClass|null
     */
    private $javaClass;

    /**
     * @var array
     */
    private $attributes = [];

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
    private $options;

    /**
     * @var _MethodInfo $method
     */
    private $method;

    /**
     * @var DependencyInjectionProvider
     */
    private $dependencyInjectionProvider;

    public function setParameters(
        _MethodInfo $method,
        JavaClassInvoker $javaClassInvoker,
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


    public function pushToOperandStack($value)
    {
        $this->stacks[] = $value;
    }

    public function pushToOperandStackByReference(&$value)
    {
        $this->stacks[] = &$value;
    }

    public function popFromOperandStack()
    {
        return array_pop($this->stacks);
    }

    public function getCurrentStackIndex()
    {
        return count($this->stacks) - 1;
    }

    public function replaceReferredObject($searchObject, $newObject)
    {
        while (($index = array_search($searchObject, $this->stacks)) !== false) {
            $this->stacks[$index] = $newObject;
        }
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

    public function getProgramCounter()
    {
        return $this->pointer;
    }

    public function getOptions($key)
    {
        return $this->options[$key] ?? null;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
