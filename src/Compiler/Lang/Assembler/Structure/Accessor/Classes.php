<?php
namespace PHPJava\Compiler\Lang\Assembler\Structure\Accessor;

use PHPJava\Exceptions\AccessorException;
use PHPJava\Exceptions\AssembleStructureException;
use PhpParser\Node;

class Classes extends AbstractAccessor implements AccessorInterface
{
    public function find(string $className): Methods
    {
        $className = '\\' . str_replace('.', '\\', $className);

        foreach ($this->nodes as $node) {
            $class = $this->findOnNode($node, $className);
            if ($class !== null) {
                return new Methods($class->stmts);
            }
        }
        throw new AccessorException(
            'Not found ' . $className
        );
    }

    protected function findOnNode(Node $node, string $path, array $tracedPath = []): ?Node\Stmt\Class_
    {
        switch (get_class($node)) {
            case \PhpParser\Node\Stmt\Use_::class:
                // Nothing to do
                break;
            case \PhpParser\Node\Stmt\Namespace_::class:
                /**
                 * @var \PhpParser\Node\Stmt\Namespace_ $node
                 */
                $tracedPath = array_merge($tracedPath, $node->name->parts);
                foreach ($node->stmts as $statement) {
                    $result = $this
                        ->findOnNode(
                            $statement,
                            $path,
                            $tracedPath
                        );
                    if ($result !== null) {
                        return $result;
                    }
                }
                break;
            case \PhpParser\Node\Stmt\Class_::class:
                /**
                 * @var \PhpParser\Node\Stmt\Class_ $node
                 */
                $targetedClassPath = '\\' . ltrim(implode('\\', $tracedPath) . '\\' . $node->name, '\\');
                if ($targetedClassPath === $path) {
                    return $node;
                }
                break;
            default:
                throw new AssembleStructureException(
                    'Cannot find structure on class or ' . get_class($node) . ' is not supported statement.'
                );
        }
        return null;
    }
}
