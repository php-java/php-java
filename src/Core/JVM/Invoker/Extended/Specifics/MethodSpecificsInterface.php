<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended\Specifics;

interface MethodSpecificsInterface
{
    public function isAbstract(): bool;

    public function isStatic(): bool;

    public function isFinal(): bool;

    public function isPublic(): bool;

    public function isPrivate(): bool;

    public function isProtected(): bool;

    public function isBridge(): bool;

    public function isNative(): bool;

    public function isStrict(): bool;

    public function isSynchronized();

    public function isSynthetic();

    public function isVarargs();
}
