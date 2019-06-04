<?php
namespace PHPJava\Core\JVM\Invoker\Extended\Specifics;

class PHPMethodSpecifics implements MethodSpecificsInterface
{
    private $methodInfo;

    public function __construct(\ReflectionMethod $methodInfo)
    {
        $this->methodInfo = $methodInfo;
    }

    public function isAbstract(): bool
    {
        return $this->methodInfo->isAbstract();
    }

    public function isStatic(): bool
    {
        return $this->methodInfo->isStatic();
    }

    public function isFinal(): bool
    {
        return $this->methodInfo->isFinal();
    }

    public function isPublic(): bool
    {
        return $this->methodInfo->isPublic();
    }

    public function isPrivate(): bool
    {
        return $this->methodInfo->isPrivate();
    }

    public function isProtected(): bool
    {
        return $this->methodInfo->isProtected();
    }

    public function isBridge(): bool
    {
        return false;
    }

    public function isNative(): bool
    {
        return false;
    }

    public function isStrict(): bool
    {
        return false;
    }

    public function isSynchronized(): bool
    {
        return false;
    }

    public function isSynthetic(): bool
    {
        return false;
    }

    public function isVarargs(): bool
    {
        return false;
    }
}
