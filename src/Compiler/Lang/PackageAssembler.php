<?php
namespace PHPJava\Compiler\Lang;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Bundler\PHPStandardClass;
use PHPJava\Compiler\Lang\Assembler\EntryPointClassAssembler;
use PHPJava\Compiler\Lang\Assembler\Enum\NodeExtractorEnum;
use PHPJava\Compiler\Lang\Assembler\Processors\StatementProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\NodeExtractable;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\AssembleStructureException;
use PhpParser\Error;
use PhpParser\ParserFactory;

class PackageAssembler
{
    use NodeExtractable;

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
            throw new AssembleStructureException(
                'Failed to coordinate a class file. (reason: ' . $error->getMessage() . ')'
            );
        }
    }

    public function assemble(): self
    {
        PHPStandardClass::factory()
            ->setStreamReader($this->stream)
            ->assemble();

        $modules = $this->extractNodes(
            $this->abstractSyntaxTree,
            NodeExtractorEnum::EXTRACT_MODULES
        );
        $outsides = $this->extractNodes(
            $this->abstractSyntaxTree,
            NodeExtractorEnum::EXTRACT_OUTSIDES
        );

        $entryPointConstantPool = new ConstantPool();
        $entryPointConstantPoolFinder = new ConstantPoolFinder(
            $entryPointConstantPool
        );

        $entryPointClassAssembler = EntryPointClassAssembler::factory(...$outsides)
            ->setConstantPool($entryPointConstantPool)
            ->setConstantPoolFinder($entryPointConstantPoolFinder)
            ->setStreamReader($this->stream);

        StatementProcessor::factory()
            ->setStreamReader($this->stream)
            ->setEntryPointClassAssembler($entryPointClassAssembler)
            ->execute($modules);

        // Assemble an entrypoint class.
        $entryPointClassAssembler
            ->assemble();

        return $this;
    }
}
