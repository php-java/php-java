<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Lang\Assembler\Enum\NodeExtractorEnum;
use PHPJava\Utilities\ArrayTool;

trait NodeExtractable
{
    protected function extractNodes(array $nodes, int $extractType): array
    {
        $nodes = ArrayTool::deepCopy($nodes);
        $this->filterExtractingNodes(
            $nodes,
            $extractType
        );
        return $nodes;
    }

    protected function filterExtractingNodes(array &$nodes, int $extractType): void
    {
        foreach ($nodes as $key => $node) {
            switch (get_class($node)) {
                case \PhpParser\Node\Stmt\Declare_::class:
                case \PhpParser\Node\Stmt\Namespace_::class:
                    $this->filterExtractingNodes($node->stmts, $extractType);
                    break;
                case \PhpParser\Node\Stmt\Class_::class:
                    if ($extractType !== NodeExtractorEnum::EXTRACT_MODULES) {
                        unset($nodes[$key]);
                    }
                    break;
                default:
                    if ($extractType !== NodeExtractorEnum::EXTRACT_OUTSIDES) {
                        unset($nodes[$key]);
                    }
                    break;
            }
        }
        $nodes = array_values($nodes);
    }
}
