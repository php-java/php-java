<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\ClassAssembler;
use PHPJava\Compiler\Lang\Assembler\EntryPointClassAssembler;
use PHPJava\Compiler\Lang\Assembler\Enum\NodeExtractorEnum;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ExpressionStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ForStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\IfStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Structure\Accessor\Imports;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\ImportManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\NodeExtractable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Utilities\ArrayTool;
use PhpParser\Node;

class StatementProcessor extends AbstractProcessor
{
    use OperationManageable;
    use Bindable;
    use NodeExtractable;

    protected $imports = [];

    /**
     * @param Node[] $nodes
     */
    public function execute(array $nodes, ?callable $callback = null): array
    {
        parent::execute($nodes, $callback);

        $operations = [];
        foreach ($nodes as $statement) {
            $assembler = null;
            /**
             * @var Node $statement
             */
            switch (get_class($statement)) {
                case \PhpParser\Node\Stmt\Namespace_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Namespace_ $statement
                     */
                    $entryPointConstantPool = new ConstantPool();
                    $entryPointConstantPoolFinder = new ConstantPoolFinder(
                        $entryPointConstantPool
                    );

                    $entryPointClassAssembler = EntryPointClassAssembler::factory(...$this->extractNodes($statement->stmts, NodeExtractorEnum::EXTRACT_OUTSIDES))
                        ->setNamespace($statement->name->parts)
                        ->setConstantPool($entryPointConstantPool)
                        ->setConstantPoolFinder($entryPointConstantPoolFinder)
                        ->setStructureAccessorsLocator($this->getStructureAccessorsLocator())
                        ->setStreamReader($this->getStreamReader());

                    $this
                        ->setNamespace($statement->name->parts)
                        ->setConstantPool($entryPointConstantPool)
                        ->setConstantPoolFinder($entryPointConstantPoolFinder)
                        ->setStreamReader($this->getStreamReader())
                        ->setEntryPointClassAssembler($entryPointClassAssembler)
                        ->setStructureAccessorsLocator($this->getStructureAccessorsLocator())
                        ->execute($statement->stmts);

                    $entryPointClassAssembler
                        ->assemble();
                    break;
                case \PhpParser\Node\Stmt\Use_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Use_ $statement
                     */
                    $this->imports[] = $statement;
                    break;
                case \PhpParser\Node\Stmt\Class_::class:
                    /**
                     * @var \PhpParser\Node\Stmt\Class_ $statement
                     */
                    ClassAssembler::factory($statement)
                        ->setStreamReader($this->getStreamReader())
                        ->setNamespace($this->getNamespace())
                        ->setStructureAccessorsLocator($this->getStructureAccessorsLocator())
                        ->setImportsAccessor($this->getImportsAccessor() ?? new Imports($this->imports))
                        ->assemble();
                    break;
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
            if ($assembler === null) {
                continue;
            }
            /**
             * @var AbstractAssembler $assembler
             */
            ArrayTool::concat(
                $operations,
                ...$this->bindParameters($assembler)
                    ->assemble()
            );
        }
        return $operations;
    }
}
