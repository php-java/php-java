<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\AssignExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PostDecrementExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PostIncrementExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PrintExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\AssembleStructureException;

/**
 * @method MethodAssembler getParentAssembler()
 * @property \PhpParser\Node\Stmt\Expression $node
 */
class ExpressionStatementAssembler extends AbstractAssembler implements StatementAssemblerInterface, AssemblerInterface
{
    use OperationManageable;

    public function assemble(): array
    {
        $operations = [];
        switch (get_class($this->node->expr)) {
            case \PhpParser\Node\Expr\Assign::class:
                array_push(
                    $operations,
                    ...$this->bindRequired(AssignExpressionAssembler::factory($this->node->expr))
                        ->assemble()
                );
                break;
            case \PhpParser\Node\Expr\PostInc::class:
                array_push(
                    $operations,
                    ...$this->bindRequired(PostIncrementExpressionAssembler::factory($this->node->expr))
                        ->assemble()
                );
                break;
            case \PhpParser\Node\Expr\PostDec::class:
                array_push(
                    $operations,
                    ...$this->bindRequired(PostDecrementExpressionAssembler::factory($this->node->expr))
                        ->assemble()
                );
                break;
            case \PhpParser\Node\Expr\Print_::class:
                array_push(
                    $operations,
                    ...$this->bindRequired(PrintExpressionAssembler::factory($this->node->expr))
                        ->assemble()
                );
                break;
            default:
                throw new AssembleStructureException(
                    'Unsupported expression: ' . get_class($this->node->expr)
                );
        }
        return $operations;
    }
}
