<?php
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
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Void;
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

    protected $attribute;

    protected $methodName;

    public function assemble(): void
    {
        $this->methodName = $this->node->name->name;

        $descriptor = Descriptor::factory()
            ->addArgument(
                \PHPJava\Packages\java\lang\String::class,
                1
            )
            ->setReturn(_Void::class)
            ->make();

        $this->getEnhancedConstantPool()
            ->addNameAndType(
                $this->methodName,
                $descriptor
            );

        $method = (new Method(
            (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                ->enablePublic()
                ->enableStatic()
                ->make(),
            $this->getEnhancedConstantPool()
                ->findUtf8($this->methodName),
            $this->getEnhancedConstantPool()
                ->findUtf8($descriptor)
        ));

        // Add to methods section
        $this->getCollection()
            ->add($method);

        $this->attribute = new Attributes();

        // Get parameters
        $parameters = [
            // variable name => literal type
        ];
        foreach ($this->node->getParams() as $parameter) {
            /**
             * @var \PhpParser\Node\Param $parameter
             */
            $parameters[$parameter->var->name] = $parameter->type;
        }

        foreach ($this->node->getAttribute('comments') as $commentAttribute) {
            /**
             * @var \PhpParser\Comment\Doc $commentAttribute
             */
            $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
                ->create($commentAttribute->getText());

            foreach ($documentBlock->getTagsByName('param') as $documentParameter) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Param $documentParameter
                 */
                if (!array_key_exists($documentParameter->getVariableName(), $parameters)) {
                    // Does not add a variable detail and object ref if local variable parameter is not defined.
                    continue;
                }

                // Update variable detail.
                $parameters[$documentParameter->getVariableName()] = ltrim(
                    (string) $documentParameter->getType(),
                    '\\'
                );

                // Fill local storage number.
                $this->assembleAssignVariable(
                    $documentParameter->getVariableName(),
                    $parameters[$documentParameter->getVariableName()]
                );
            }
        }

        $operations = [];
        $defaultLocalVariableOperations = $this->getStore()->getAll();

        ArrayTool::concat(
            $operations,
            ...$this->bindRequired(StatementProcessor::factory())
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
                    ->setCode($operations)
                    ->setAttributes(
                        (new Attributes())
                            ->add(
                                (new StackMapTable())
                                    ->setConstantPool($this->getConstantPool())
                                    ->setConstantPoolFinder($this->getConstantPoolFinder())
                                    ->setDefaultLocalVariables($defaultLocalVariableOperations)
                                    ->setOperation(
                                        $operations
                                    )
                                    ->beginPrepare()
                            )
                            ->toArray()
                    )
                    ->beginPrepare()
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
