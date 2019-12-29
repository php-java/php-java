<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Structure\Accessor;

class StructureAccessorsLocator
{
    /**
     * @var Classes
     */
    protected $classesStructureAccessor;

    /**
     * @var Functions
     */
    protected $functionsStructureAccessor;

    public function __construct(
        Classes $classesStructureAccessor,
        Functions $functionsStructureAccessor
    ) {
        $this->classesStructureAccessor = $classesStructureAccessor;
        $this->functionsStructureAccessor = $functionsStructureAccessor;
    }

    public function getClassesStructureAccessor(): Classes
    {
        return $this->classesStructureAccessor;
    }

    public function getFunctionsStructureAccessor(): Functions
    {
        return $this->functionsStructureAccessor;
    }
}
