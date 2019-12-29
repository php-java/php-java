<?php
declare(strict_types=1);

namespace PHPJava\Compiler\Builder\Finder\Result;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\FinderInterface;

abstract class AbstractFinderResult implements FinderResultInterface
{
    /**
     * @var FinderInterface
     */
    protected $finder;

    /**
     * @var ConstantPool
     */
    protected $constantPool;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $arguments = [];

    public function __construct(
        FinderInterface $finder,
        ConstantPool $constantPool,
        string $type,
        ...$arguments
    ) {
        $this->finder = $finder;
        $this->constantPool = $constantPool;
        $this->type = $type;
        $this->arguments = $arguments;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }

    abstract public function getResult(bool $enableCache = true);
}
