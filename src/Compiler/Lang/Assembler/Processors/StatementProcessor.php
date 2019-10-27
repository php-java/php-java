<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ExpressionStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ForStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\IfStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

class StatementProcessor extends AbstractProcessor
{
    use OperationManageable;
    use Bindable;

    /**
     * @param Node[] $nodes
     */
    public function execute(array $nodes, ?callable $callback = null): array
    {
        $operations = [];
        foreach ($nodes as $statement) {
            $assembler = null;
            /**
             * @var Node $statement
             */
            switch (get_class($statement)) {
                case \PhpParser\Node\Stmt\If_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\If_ $statement
                     */
                    $assembler = IfStatementAssembler::factory($statement);
                    break;
                case \PhpParser\Node\Stmt\Echo_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Echo_ $statement
                     */
                    $assembler = EchoStatementAssembler::factory($statement);
                    break;
                case \PhpParser\Node\Stmt\Expression::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Expression $statement
                     */
                    $assembler = ExpressionStatementAssembler::factory($statement);
                    break;
                case \PhpParser\Node\Stmt\For_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\For_ $statement
                     */
                    $assembler = ForStatementAssembler::factory($statement);
                    break;
                case \PhpParser\Node\Stmt\Nop::class:
                    break;
                default:
                    throw new AssembleStructureException(
                        'Unknown statement: ' . get_class($statement) . ' on ' . get_class($this)
                    );
            }
            /**
             * @var AbstractAssembler $assembler
             */
            ArrayTool::concat(
                $operations,
                ...$this->bindRequired($assembler)
                    ->assemble()
            );
        }
        return $operations;
    }
}
