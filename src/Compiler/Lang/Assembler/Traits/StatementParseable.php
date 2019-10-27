<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ExpressionStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ForStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\IfStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
trait StatementParseable
{
    public function parseStatement(array $statements, ?callable $callback = null): array
    {
        $operations = [];
        foreach ($statements as $statement) {
            /**
             * @var Node $statement
             */
            switch (get_class($statement)) {
                case \PhpParser\Node\Stmt\If_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\If_ $statement
                     */
                    ArrayTool::concat(
                        $operations,
                        ...IfStatementAssembler::factory($statement)
                            ->setOperation($this->getOperation())
                            ->setStore($this->getStore())
                            ->setParentAssembler($this)
                            ->setStreamReader($this->getStreamReader())
                            ->setNamespace($this->getNamespace())
                            ->assemble()
                    );
                    break;
                case \PhpParser\Node\Stmt\Echo_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Echo_ $statement
                     */
                    ArrayTool::concat(
                        $operations,
                        ...EchoStatementAssembler::factory($statement)
                            ->setOperation($this->getOperation())
                            ->setStore($this->getStore())
                            ->setParentAssembler($this)
                            ->setStreamReader($this->getStreamReader())
                            ->setNamespace($this->getNamespace())
                            ->assemble()
                    );
                    break;
                case \PhpParser\Node\Stmt\Expression::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Expression $statement
                     */
                    ArrayTool::concat(
                        $operations,
                        ...ExpressionStatementAssembler::factory($statement)
                            ->setOperation($this->getOperation())
                            ->setStore($this->getStore())
                            ->setParentAssembler($this)
                            ->setStreamReader($this->getStreamReader())
                            ->setNamespace($this->getNamespace())
                            ->assemble()
                    );
                    break;
                case \PhpParser\Node\Stmt\For_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\For_ $statement
                     */
                    ArrayTool::concat(
                        $operations,
                        ...ForStatementAssembler::factory($statement)
                            ->setOperation($this->getOperation())
                            ->setStore($this->getStore())
                            ->setParentAssembler($this)
                            ->setStreamReader($this->getStreamReader())
                            ->setNamespace($this->getNamespace())
                            ->assemble()
                    );
                    break;
                case \PhpParser\Node\Stmt\Nop::class:
                    break;
                default:
                    throw new AssembleStructureException(
                        'Unknown statement: ' . get_class($statement) . ' on ' . get_class($this)
                    );
            }
        }
        return $operations;
    }
}
