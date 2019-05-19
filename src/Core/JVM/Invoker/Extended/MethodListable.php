<?php
namespace PHPJava\Core\JVM\Invoker\Extended;

use PHPJava\Kernel\Structures\_MethodInfo;

trait MethodListable
{
    /**
     * @return _MethodInfo[]
     */
    public function getList(): array
    {
        return $this->methods;
    }
}
