<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\PHPJavaSignature;
use PHPJava\Compiler\Builder\Attributes\SourceFile;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Store\ReferenceCounter;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\DynamicInitializerAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\FieldAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParameterParseable;
use PHPJava\Compiler\Lang\Assembler\Traits\StaticInitializerAssignable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Packages\java\lang\Object_;
use PhpParser\Node;

/**
 * @property \PhpParser\Node\Stmt\Class_ $node
 */
class ClassAssembler extends AbstractAssembler implements ClassAssemblerInterface
{
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use Bindable;
    use StaticInitializerAssignable;
    use DynamicInitializerAssignable;
    use ParameterParseable;
    use FieldAssignable;

    /**
     * @var Methods
     */
    protected $methods;

    /**
     * @var Fields
     */
    protected $fields;

    protected $className;

    public function assemble(): void
    {
        $this->className = implode(
            '.',
            array_merge(
                $this->getNamespace() ?? [],
                [$this->node->name->name]
            )
        );
        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(
            Runtime::PHP_COMPILER_JDK_VERSION
        );

        $this->constantPool = new ConstantPool();
        $this->constantPoolFinder = new ConstantPoolFinder($this->constantPool);

        $this->methods = new Methods();
        $this->fields = new Fields();

        foreach ($this->node->getProperties() as $property) {
            $this
                ->bindParameters(FieldAssembler::factory($property))
                ->setCollection($this->fields)
                ->assemble();
        }

        foreach ($this->node->getMethods() as $method) {
            $store = new Store();
            if (!$method->isStatic()) {
                $store->store(
                    'this',
                    $this->getClassName()
                );
            }
            $this
                ->setOperation(new Operation())
                ->setStore($store)
                ->setReferenceCounter(new ReferenceCounter())
                ->bindParameters(MethodAssembler::factory($method))
                ->setCollection($this->methods)
                ->assemble();
        }

        $this->getEnhancedConstantPool()
            ->addClass($this->className)
            ->addClass(Object_::class)
            ->addClass(Runtime::PHP_STANDARD_CLASS_NAME);

        $this->assignStaticInitializer($this->className);
        $this->assignDynamicInitializer($this->className);

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
                        ->findClass(Object_::class)
                )
                ->setMethods(
                    $this
                        ->methods
                        ->toArray()
                )
                ->setFields(
                    $this
                        ->fields
                        ->toArray()
                )
                ->setAttributes(
                    (new Attributes())
                        ->add(
                            (new PHPJavaSignature())
                                ->setConstantPool($this->getConstantPool())
                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                ->beginPreparation()
                        )
                        ->add(
                            (new SourceFile())
                                ->setConstantPool($this->getConstantPool())
                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                ->setFileNameIndexInConstantPool(
                                    $this->getConstantPoolFinder()
                                        ->find(
                                            Utf8Info::class,
                                            $this->node->name->name . '.php'
                                        )
                                )
                                ->beginPreparation()
                        )
                        ->toArray()
                )
                ->setConstantPool(
                    $this->constantPool
                        ->add(Utf8Info::factory($this->node->name->name . '.php'))
                        ->toArray()
                )
        );

        $compiler->compile(
            $this
                ->getStreamReader()
                ->getDistributeStreamByClassPath(
                    $this->className
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
