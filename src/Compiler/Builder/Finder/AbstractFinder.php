<?php

namespace PHPJava\Compiler\Builder\Finder;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;

abstract class AbstractFinder implements FinderInterface
{
    /**
     * @var ConstantPool
     */
    protected $constantPool;

    public function __construct(ConstantPool $constantPool)
    {
        $this->constantPool = $constantPool;
    }

    /**
     * @param mixed ...$arguments
     */
    abstract public function find(string $type, ...$arguments): FinderResultInterface;
}
