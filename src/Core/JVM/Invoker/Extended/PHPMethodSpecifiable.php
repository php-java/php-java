<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Core\JVM\Invoker\Extended\Specifics\MethodSpecificsInterface;
use PHPJava\Core\JVM\Invoker\Extended\Specifics\PHPMethodSpecifics;

trait PHPMethodSpecifiable
{
    public function getSpecifics(string $methodName, ...$arguments): MethodSpecificsInterface
    {
        return new PHPMethodSpecifics(
            $this->findMethod(
                $methodName
            )
        );
    }
}
