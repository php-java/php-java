<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Core\JVM\Invoker\Extended\Specifics\JavaMethodSpecifics;
use PHPJava\Core\JVM\Invoker\Extended\Specifics\MethodSpecificsInterface;

trait JavaMethodSpecifiable
{
    public function getSpecifics(string $methodName, ...$arguments): MethodSpecificsInterface
    {
        $methodInfo = $this->findMethod(
            $methodName,
            ...$arguments
        );

        return new JavaMethodSpecifics(
            $methodInfo
        );
    }
}
