<?php
namespace PHPJava\Compiler\Builder\Finder;

use PHPJava\Compiler\Builder\Finder\Result\ConstantPoolFinderResult;
use PHPJava\Compiler\Builder\Finder\Result\FinderResultInterface;

class ConstantPoolFinder extends AbstractFinder implements FinderInterface
{
    protected $result = [];

    public function find(string $type, ...$arguments): FinderResultInterface
    {
        $key = md5($type . implode($arguments));
        if (isset($this->result[$key])) {
            return $this->result[$key];
        }
        return $this->result[$key] = new ConstantPoolFinderResult($this, $this->constantPool, $type, ...$arguments);
    }
}
