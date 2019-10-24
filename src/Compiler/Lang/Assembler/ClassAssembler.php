<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\PHPJavaSignature;
use PHPJava\Compiler\Builder\Attributes\SourceFile;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Packages\java\lang\_Object;
use PhpParser\Node;

/**
 * @property  \PhpParser\Node\Stmt\Class_ $node
 */
class ClassAssembler extends AbstractAssembler implements AssemblerInterface
{
    use ConstantPoolEnhanceable;

    /**
     * @var Methods
     */
    protected $methods;

    protected $className;

    public function assemble(): void
    {
        $this->className = $this->node->name->name;
        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(8);

        $this->constantPool = new ConstantPool();
        $this->constantPoolFinder = new ConstantPoolFinder($this->constantPool);

        $this->methods = new Methods();

        foreach ($this->node->getMethods() as $method) {
            MethodAssembler::factory($method)
                ->setStore(new Store())
                ->setOperation(new Operation())
                ->setParentAssembler($this)
                ->setStreamReader($this->getStreamReader())
                ->setNamespace($this->getNamespace())
                ->assemble();
        }

        $this->getEnhancedConstantPool()
            ->addClass($this->className)
            ->addClass(_Object::class);

        $compiler = new Compiler(
            (new ClassFileStructure())
                ->setMinorVersion($minorVersion)
                ->setMajorVersion($majorVersion)
                ->setThisClass(
                    $this
                        ->getEnhancedConstantPool()
                        ->findClass($this->className)
                )
                ->setSuperClass(
                    $this
                        ->getEnhancedConstantPool()
                        ->findClass(_Object::class)
                )
                ->setMethods(
                    $this
                        ->methods
                        ->toArray()
                )
                ->setAttributes(
                    (new Attributes())
                        ->add(
                            (new PHPJavaSignature())
                                ->setConstantPool($this->getConstantPool())
                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                ->beginPrepare()
                        )
                        ->add(
                            (new SourceFile())
                                ->setConstantPool($this->getConstantPool())
                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                ->setFileNameIndexInConstantPool(
                                    $this->getConstantPoolFinder()
                                        ->find(
                                            Utf8Info::class,
                                            $this->className . '.php'
                                        )
                                )
                                ->beginPrepare()
                        )
                        ->toArray()
                )
                ->setConstantPool(
                    $this->constantPool
                        ->add(Utf8Info::factory($this->className . '.php'))
                        ->toArray()
                )
        );

        $compiler->compile(
            fopen(
                sprintf(
                    '%s/%s.class',
                    $this->getStreamReader()->getDistributeDirectory(),
                    $this->className
                ),
                'w+'
            )
        );
    }

    public function getMethods(): Methods
    {
        return $this->methods;
    }

    public function getClassName(): string
    {
        return $this->className;
    }
}
