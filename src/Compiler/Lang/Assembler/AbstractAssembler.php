<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Lang\Assembler\Traits\ClassAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\CollectionManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NamespaceManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\EntryPointClassAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\MethodAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StreamManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StructureAccessorsLocatorManageable;
use PhpParser\Node;

abstract class AbstractAssembler implements AssemblerInterface, ParameterServiceInterface
{
    use ConstantPoolManageable;
    use StoreManageable;
    use NamespaceManageable;
    use CollectionManageable;
    use StreamManageable;
    use MethodAssemblerManageable;
    use ClassAssemblerManageable;
    use EntryPointClassAssemblerManageable;
    use StructureAccessorsLocatorManageable;

    /**
     * @var Node
     */
    protected $node;

    /**
     * @var Method
     */
    protected $method;

    public static function factory(Node $node): self
    {
        return new static($node);
    }

    public function __construct(Node $node)
    {
        $this->node = $node;
    }

    abstract public function assemble();
}
