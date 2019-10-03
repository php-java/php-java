<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\AssignExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PostDecrementExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PostIncrementExpressionAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\Expressions\PrintExpressionCoordinator;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\CoordinateStructureException;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Stmt\Expression $node
 */
class ExpressionStatementAssembler extends AbstractAssembler implements StatementCoordinatorInterface, AssemblerInterface
{
    use OperationManageable;

    public function assemble(): void
    {
        switch (get_class($this->node->expr)) {
            case \PhpParser\Node\Expr\Assign::class:
                $this->bindRequired(AssignExpressionAssembler::factory($this->node->expr))
                    ->assemble();
                break;
            case \PhpParser\Node\Expr\PostInc::class:
                $this->bindRequired(PostIncrementExpressionAssembler::factory($this->node->expr))
                    ->assemble();
                break;
            case \PhpParser\Node\Expr\PostDec::class:
                $this->bindRequired(PostDecrementExpressionAssembler::factory($this->node->expr))
                    ->assemble();
                break;
            case \PhpParser\Node\Expr\Print_::class:
                $this->bindRequired(PrintExpressionCoordinator::factory($this->node->expr))
                    ->assemble();
                break;
            default:
                throw new CoordinateStructureException(
                    'Unsupported expression: ' . get_class($this->node->expr)
                );
        }
    }

    protected function bindRequired(AssemblerInterface $coordinator): AssemblerInterface
    {
        return $coordinator
            ->setStore($this->getStore())
            ->setOperation($this->getOperation())
            ->setParentCoordinator($this)
            ->setNamespace($this->getNamespace());
    }
}
