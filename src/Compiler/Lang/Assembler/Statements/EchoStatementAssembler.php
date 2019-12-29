<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Castable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\ClassConstractable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Conditionable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Outputable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\StringConcatable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\Echo_ $node
 */
class EchoStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use ConstantPoolEnhanceable;
    use StringConcatable;
    use MethodCallable;
    use ClassConstractable;
    use OperationManageable;
    use Castable;
    use Conditionable;
    use Outputable;
    use Bindable;

    public function assemble(): array
    {
        return $this->assembleOutput($this->node->exprs);
    }
}
