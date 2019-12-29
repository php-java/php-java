<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Structure\Accessor;

use PHPJava\Exceptions\AccessorException;
use PhpParser\Node\Stmt\ClassMethod;

class Methods extends AbstractAccessor implements AccessorInterface
{
    public function find(string $methodName): ?ClassMethod
    {
        foreach ($this->nodes as $node) {
            /**
             * @var ClassMethod $node
             */
            if ($node->name->name === $methodName) {
                return $node;
            }
        }
        throw new AccessorException(
            'Not found method ' . $methodName
        );
    }
}
