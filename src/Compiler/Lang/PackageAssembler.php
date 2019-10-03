<?php
namespace PHPJava\Compiler\Lang;

use PHPJava\Compiler\Lang\Assembler\Bundler\PHPStandardClass;
use PHPJava\Compiler\Lang\Assembler\ClassAssembler;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\CoordinateStructureException;
use PhpParser\Error;
use PhpParser\Node;
use PhpParser\ParserFactory;

class PackageAssembler
{
    /**
     * @var null|\PhpParser\Node\Stmt[]
     */
    protected $abstractSyntaxTree;

    /**
     * @var StreamReaderInterface
     */
    protected $stream;

    public function __construct(StreamReaderInterface $stream)
    {
        $this->stream = $stream;

        try {
            $this->abstractSyntaxTree = (new ParserFactory())
                ->create(
                    ParserFactory::PREFER_PHP7
                )
                ->parse(
                    $stream->getCode()
                );
        } catch (Error $error) {
            throw new CoordinateStructureException(
                'Failed to coordinate a class file. (reason: ' . $error->getMessage() . ')'
            );
        }
    }

    public function assemble(): self
    {
        PHPStandardClass::factory()
            ->setStreamReader($this->stream)
            ->assemble();

        $namespace = null;
        foreach ($this->abstractSyntaxTree as $node) {
            $this->parseNode(
                $node
            );
        }
        return $this;
    }

    protected function parseNode(Node $node, ?array $namespace = null)
    {
        switch (get_class($node)) {
            case \PhpParser\Node\Stmt\Namespace_::class:
                /**
                 * @var \PhpParser\Node\Stmt\Namespace_ $node
                 */
                foreach ($node->stmts as $stmt) {
                    $this->parseNode(
                        $stmt,
                        $node->name->parts
                    );
                }
                break;
            case \PhpParser\Node\Stmt\Class_::class:
                /**
                 * @var \PhpParser\Node\Stmt\Class_ $node
                 */
                ClassAssembler::factory($node)
                    ->setStreamReader($this->stream)
                    ->setNamespace($namespace)
                    ->assemble();
                break;
            case \PhpParser\Node\Stmt\Nop::class:
                break;
            default:
                throw new CoordinateStructureException(
                    sprintf(
                        'Compiler cannot parse %s',
                        get_class($node)
                    )
                );
        }
    }
}
