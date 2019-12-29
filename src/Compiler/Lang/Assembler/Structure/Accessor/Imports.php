<?php
namespace PHPJava\Compiler\Lang\Assembler\Structure\Accessor;

use PHPJava\Exceptions\NotFoundImportException;

class Imports extends AbstractAccessor implements AccessorInterface
{
    public function resolvePath(string $path): string
    {
        $isTopLevelNamespace = ($path[0] ?? null) === '\\';
        foreach ($this->nodes as $node) {
            /**
             * @var \PhpParser\Node\Stmt\Use_ $node
             */
            foreach ($node->uses as $useNode) {
                /**
                 * @var \PhpParser\Node\Stmt\UseUse $useNode
                 */
                $merged = ltrim(implode('\\', $useNode->name->parts), '\\');
                $comparedResult = $isTopLevelNamespace
                    ? $this->compareAtFirst(
                        $path,
                        '\\' . $merged
                    )
                    : $this->compareAtLast(
                        $path,
                        $merged
                    );

                if ($comparedResult) {
                    return $merged;
                }
            }
        }
        throw new NotFoundImportException(
            'Not found import path for ' . $path
        );
    }

    protected function compareAtFirst(string $path, string $target): bool
    {
        return !!preg_match('/\A' . preg_quote($path, '/') . '/', $target);
    }

    protected function compareAtLast(string $path, string $target): bool
    {
        return !!preg_match('/' . preg_quote($path, '/') . '\z/', $target);
    }
}
