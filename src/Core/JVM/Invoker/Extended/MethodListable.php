<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Kernel\Structures\MethodInfo;

trait MethodListable
{
    /**
     * @return MethodInfo[]
     */
    public function getList(): array
    {
        return $this->methods;
    }
}
