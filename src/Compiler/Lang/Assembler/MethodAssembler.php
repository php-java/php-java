<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Attributes\StackMapTable;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\Processors\StatementProcessor;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\LocalVariableLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\ImportManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParameterParseable;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Void_;
use PHPJava\Utilities\ArrayTool;

/**
 * @method ClassAssembler getParentAssembler()
 * @method Methods getCollection()
 * @property \PhpParser\Node\Stmt\ClassMethod $node
 */
class MethodAssembler extends AbstractAssembler
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use LocalVariableAssignable;
    use LocalVariableLoadable;
    use Bindable;
    use ParameterParseable;

    protected $attribute;

    protected $methodName;

    public function assemble(): void
    {
        $this->methodName = $this->node->name->name;

        $this->attribute = new Attributes();

        $parameters = $this->parseParameterFromNode($this->node);

        $descriptorObject = Descriptor::factory()
            // TODO: All method returns void. Will implement return type.
            ->setReturn(Void_::class);

        foreach ($parameters as $keyName => $value) {
            // Fill local storage number.
            $this->assembleAssignVariable(
                $keyName,
                $value['type'],
                $value['dimensions_of_array']
            );

            $descriptorObject->addArgument(
                $value['type'],
                $value['dimensions_of_array']
            );
        }

        $descriptor = $descriptorObject->make();

        $methodAccessFlag = (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag());

        if ($this->node->isPublic()) {
            $methodAccessFlag->enablePublic();
        }

        if ($this->node->isPrivate()) {
            $methodAccessFlag->enablePrivate();
        }

        if ($this->node->isStatic()) {
            $methodAccessFlag->enableStatic();
        }

        if ($this->node->isFinal()) {
            $methodAccessFlag->enableFinal();
        }

        if ($this->node->isProtected()) {
            $methodAccessFlag->enableProtected();
        }

        if ($this->node->isAbstract()) {
            $methodAccessFlag->enableAbstract();
        }

        $method = (
            new Method(
                $methodAccessFlag->make(),
                $this->getClassAssembler()->getClassName(),
                $this->methodName,
                $descriptor
            )
        )
            ->setConstantPool($this->getConstantPool())
            ->setConstantPoolFinder($this->getConstantPoolFinder())
            ->beginPreparation();

        // Add to methods section
        $this->getCollection()
            ->add($method);

        $operations = [];
        $defaultLocalVariables = $this->getStore()->getAll();

        ArrayTool::concat(
            $operations,
            ...$this->bindParameters(StatementProcessor::factory())
                ->setMethodAssembler($this)
                ->setClassAssembler($this->getClassAssembler())
                ->execute($this->node->getStmts())
        );

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_return
        );

        // Add operation codes for print expressions.
        $this->getAttribute()
            ->add(
                (new Code())
                    ->setConstantPool($this->getConstantPool())
                    ->setConstantPoolFinder($this->getConstantPoolFinder())
                    ->setDefaultLocals(
                        count($defaultLocalVariables)
                    )
                    ->setCode($operations)
                    ->setAttributes(
                        (new Attributes())
                            ->add(
                                (new StackMapTable())
                                    ->setStore($this->getStore())
                                    ->setConstantPool($this->getConstantPool())
                                    ->setConstantPoolFinder($this->getConstantPoolFinder())
                                    ->setDefaultLocalVariables($defaultLocalVariables)
                                    ->setOperation(
                                        $operations
                                    )
                                    ->beginPreparation()
                            )
                            ->toArray()
                    )
                    ->beginPreparation()
            );

        $method
            ->setAttributes(
                $this->getAttribute()
                    ->toArray()
            );
    }

    public function getAttribute(): Attributes
    {
        return $this->attribute;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }
}
