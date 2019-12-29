<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Kernel\Maps\OpCode;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 */
trait PrintableFromNode
{
    private function assemblePrintFromNode(Node $expression): array
    {
        /**
         * @var \PhpParser\Node\Expr\Print_ $expression
         */
        $operations = $this->assembleOutput([$expression->expr]);

        // Returns 1 by the PHP feature.
        $operations[] = Operation::create(OpCode::_iconst_1);

        return $operations;
    }
}
