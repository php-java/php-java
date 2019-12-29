<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Attributes\PHPJavaSignature;
use PHPJava\Compiler\Builder\Attributes\SourceFile;
use PHPJava\Compiler\Builder\Attributes\StackMapTable;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Processors\StatementProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Assembler\Traits\Bindable;
use PHPJava\Compiler\Lang\Assembler\Traits\ClassAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\CollectionManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ConstantPoolManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NamespaceManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ImportManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\MethodAssemblerManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StaticInitializerAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\StoreManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StreamManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\StructureAccessorsLocatorManageable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Types\Void_;
use PHPJava\Packages\java\lang\Object_;
use PhpParser\Node;

class EntryPointClassAssembler implements AssemblerInterface, ParameterServiceInterface, ClassAssemblerInterface
{
    use ConstantPoolManageable;
    use StoreManageable;
    use NamespaceManageable;
    use CollectionManageable;
    use StreamManageable;
    use MethodAssemblerManageable;
    use ClassAssemblerManageable;
    use OperationManageable;
    use ConstantPoolEnhanceable;
    use Bindable;
    use StaticInitializerAssignable;
    use StructureAccessorsLocatorManageable;
    use ImportManageable;

    /**
     * @var Methods
     */
    protected $methods;

    /**
     * @var Fields
     */
    protected $fields;

    protected $className;

    /**
     * @var Node[]
     */
    protected $nodes;

    /**
     * @var Method
     */
    protected $method;

    public static function factory(Node ...$nodes): self
    {
        return new static(...$nodes);
    }

    public function __construct(Node ...$nodes)
    {
        $this->nodes = $nodes;
        $this->constantPool = new ConstantPool();
        $this->constantPoolFinder = new ConstantPoolFinder($this->constantPool);
        $this->operation = new \PHPJava\Compiler\Builder\Attributes\Architects\Operation();
        $this->store = new Store();
    }

    public function assemble(): void
    {
        $this->className = implode(
            '.',
            array_merge(
                $this->getNamespace() ?? [],
                [Runtime::PHP_ENTRY_POINT_CLASS_NAME]
            )
        );

        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(
            Runtime::PHP_COMPILER_JDK_VERSION
        );

        $this->methods = new Methods();
        $this->fields = new Fields();

        $this->getEnhancedConstantPool()
            ->addClass($this->className)
            ->addClass(Object_::class)
            ->addClass(Runtime::PHP_STANDARD_CLASS_NAME);

        // Get operations in outside statements.
        $operations = StatementProcessor::factory()
            ->setStreamReader($this->getStreamReader())
            ->setEntryPointClassAssembler($this)
            ->setStructureAccessorsLocator($this->getStructureAccessorsLocator())
            ->execute($this->nodes);

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_return
        );

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
                        ->add(
                            (new Method(
                                (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                                    ->enablePublic()
                                    ->enableStatic()
                                    ->make(),
                                $this->getClassName(),
                                'main',
                                Descriptor::factory()
                                    ->addArgument(
                                        \PHPJava\Packages\java\lang\String::class,
                                        1
                                    )
                                    ->setReturn(Void_::class)
                                    ->make()
                            ))
                                ->setConstantPool($this->getConstantPool())
                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                ->setAttributes(
                                    (new Attributes())
                                        ->add(
                                            (new Code())
                                                ->setConstantPool($this->getConstantPool())
                                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                                ->setDefaultLocals(1)
                                                ->setCode($operations)
                                                ->setAttributes(
                                                    (new Attributes())
                                                        ->add(
                                                            (new StackMapTable())
                                                                ->setStore($this->getStore())
                                                                ->setConstantPool($this->getConstantPool())
                                                                ->setConstantPoolFinder($this->getConstantPoolFinder())
                                                                ->setDefaultLocalVariables($this->getStore()->getAll())
                                                                ->setOperation(
                                                                    $operations
                                                                )
                                                                ->beginPreparation()
                                                        )
                                                        ->toArray()
                                                )
                                                ->beginPreparation()
                                        )
                                        ->toArray()
                                )
                                ->beginPreparation()
                        )
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
                                            $this->className . '.php'
                                        )
                                )
                                ->beginPreparation()
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
