<?php
declare(strict_types=1);
namespace PHPJava\Core\JVM\Extended;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassInterface;

trait JavaClassProvidable
{
    /**
     * @var JavaClassInterface
     */
    private $javaClass;

    public function getJavaClass(): JavaClassInterface
    {
        return JavaClass::of($this->javaClass);
    }
}
