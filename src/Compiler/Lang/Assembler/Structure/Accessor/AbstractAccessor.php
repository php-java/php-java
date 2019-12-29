<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Structure\Accessor;

use PhpParser\Node;

abstract class AbstractAccessor
{
    /**
     * @var Node[]
     */
    protected $nodes;

    public function __construct(array $nodes)
    {
        $this->nodes = $nodes;
    }
}
