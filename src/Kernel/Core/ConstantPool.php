<?php
namespace PHPJava\Kernel\Core;

trait ConstantPool
{
    /**
     * @var \PHPJava\Core\JVM\ConstantPool
     */
    private $constantPool;

    public function setConstantPool(\PHPJava\Core\JVM\ConstantPool $constantPool)
    {
        $this->constantPool = $constantPool;
        return $this;
    }

    public function getConstantPool(): \PHPJava\Core\JVM\ConstantPool
    {
        return $this->constantPool;
    }
}
