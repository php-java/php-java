<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Statements\EchoStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Statements\ExpressionStatementAssembler;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Exceptions\CoordinateStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Void;

/**
 * @method ClassAssembler getParentCoordinator()
 * @property \PhpParser\Node\Stmt\ClassMethod $node
 */
class MethodAssembler extends AbstractAssembler implements AssemblerInterface
{
    use OperationManageable;

    protected $attribute;

    protected $methodName;

    public function assemble(): void
    {
        $this->methodName = $this->node->name->name;

        $enhancedConstantPool = ConstantPoolEnhancer::factory(
            $this->getConstantPool(),
            $this->getConstantPoolFinder()
        );

        $descriptor = Descriptor::factory()
            ->addArgument(
                \PHPJava\Packages\java\lang\String::class,
                1
            )
            ->setReturn(_Void::class)
            ->make();

        $enhancedConstantPool->addNameAndType(
            $this->methodName,
            $descriptor
        );

        $method = (new Method(
            (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                ->enablePublic()
                ->enableStatic()
                ->make(),
            $this->getConstantPoolFinder()
                ->find(
                    Utf8Info::class,
                    $this->methodName
                ),
            $this->getConstantPoolFinder()->find(
                Utf8Info::class,
                $descriptor
            )
        ));

        // Add to methods section
        $this
            ->getParentCoordinator()
            ->getMethods()
            ->add($method);

        $this->attribute = new Attributes();

        foreach ($this->node->getStmts() as $node) {
            switch (get_class($node)) {
                case \PhpParser\Node\Stmt\Echo_::class:
                    EchoStatementAssembler::factory($node)
                        ->setOperation($this->getOperation())
                        ->setStore($this->getStore())
                        ->setParentCoordinator($this)
                        ->setStreamReader($this->getStreamReader())
                        ->setNamespace($this->getNamespace())
                        ->assemble();
                    break;
                case \PhpParser\Node\Stmt\Expression::class:
                    ExpressionStatementAssembler::factory($node)
                        ->setOperation($this->getOperation())
                        ->setStore($this->getStore())
                        ->setParentCoordinator($this)
                        ->setStreamReader($this->getStreamReader())
                        ->setNamespace($this->getNamespace())
                        ->assemble();
                        // no break
                case \PhpParser\Node\Stmt\Nop::class:
                    break;
                default:
                    throw new CoordinateStructureException(
                        'Unknown statement: ' . get_class($node) . ' on ' . get_class($this)
                    );
            }
        }

        $this->getOperation()->add(
            OpCode::_return
        );

        // Add operation codes for print expressions.
        $this->getAttribute()->add(
            (new Code(
                $this->getConstantPoolFinder()
                    ->find(Utf8Info::class, 'Code')
            ))
                ->setCode($this->getOperation())
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
