<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended\Specifics;

use PHPJava\Kernel\Maps\MethodAccessFlag;
use PHPJava\Kernel\Structures\MethodInfo;

class JavaMethodSpecifics implements MethodSpecificsInterface
{
    /**
     * @var MethodInfo
     */
    private $methodInfo;

    public function __construct(MethodInfo $methodInfo)
    {
        $this->methodInfo = $methodInfo;
    }

    public function isAbstract(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_ABSTRACT) !== 0;
    }

    public function isStatic(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_STATIC) !== 0;
    }

    public function isFinal(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_FINAL) !== 0;
    }

    public function isPublic(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_PUBLIC) !== 0;
    }

    public function isPrivate(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_PRIVATE) !== 0;
    }

    public function isProtected(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_PROTECTED) !== 0;
    }

    public function isBridge(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_BRIDGE) !== 0;
    }

    public function isNative(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_NATIVE) !== 0;
    }

    public function isStrict(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_STRICT) !== 0;
    }

    public function isSynchronized(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_SYNCHRONIZED) !== 0;
    }

    public function isSynthetic(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_SYNTHETIC) !== 0;
    }

    public function isVarargs(): bool
    {
        return ($this->methodInfo->getAccessFlag() & MethodAccessFlag::ACC_VARARGS) !== 0;
    }
}
