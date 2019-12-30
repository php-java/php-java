<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Field;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParameterParseable;
use PHPJava\Exceptions\AssembleStructureException;
use PhpParser\Node\Stmt\PropertyProperty;

/**
 * @method ClassAssembler getParentAssembler()
 * @method Fields getCollection()
 * @property \PhpParser\Node\Stmt\Property $node
 */
class FieldAssembler extends AbstractAssembler
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;
    use LocalVariableLoadable;
    use Bindable;
    use ParameterParseable;

    public function assemble(): void
    {
        $typedDocument = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
            ->create((string) $this->node->getDocComment());

        if ($typedDocument === false) {
            throw new AssembleStructureException(
                'A property is needed PHP document #' . $this->node->getStartLine()
            );
        }

        /**
         * @var \phpDocumentor\Reflection\DocBlock\Tags\Var_[] $varType
         */
        $varType = $typedDocument->getTagsByName('var');
        [$variableName, $parameterInfo] = $this->parseFromDocument($varType[0]);

        $fieldAccessFlag = (new \PHPJava\Compiler\Builder\Signatures\FieldAccessFlag());

        if ($this->node->isPublic()) {
            $fieldAccessFlag->enablePublic();
        }

        if ($this->node->isPrivate()) {
            $fieldAccessFlag->enablePrivate();
        }

        if ($this->node->isStatic()) {
            $fieldAccessFlag->enableStatic();
        }

        if ($this->node->isProtected()) {
            $fieldAccessFlag->enableProtected();
        }

        $fieldAccessFlag = $fieldAccessFlag->make();

        $descriptor = Descriptor::factory()
            ->addArgument($parameterInfo['type'])
            ->make();

        foreach ($this->node->props as $property) {
            /**
             * @var PropertyProperty $property
             */
            $field = (new Field(
                $fieldAccessFlag,
                $this->getClassAssembler()->getClassName(),
                (string) $property->name,
                $descriptor
            ))->setConstantPool($this->getConstantPool())
                ->setConstantPoolFinder($this->getConstantPoolFinder())
                ->setValue($property->default->value)
                ->beginPreparation();

            // Register a Fieldref to Constant Pool
            $this->getEnhancedConstantPool()
                ->addFieldref(
                    $this->getClassAssembler()->getClassName(),
                    (string) $property->name,
                    $descriptor
                );

            $this->getCollection()
                ->add($field);
        }
    }
}
