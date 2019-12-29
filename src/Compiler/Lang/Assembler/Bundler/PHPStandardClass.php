<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Bundler;

use PHPJava\Compiler\Builder\Attributes\PHPJavaSignature;
use PHPJava\Compiler\Builder\Attributes\SourceFile;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Field;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Signatures\FieldAccessFlag;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\FieldAssignable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\StaticInitializerAssignable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Packages\java\lang\_Object;

class PHPStandardClass extends AbstractBundler
{
    use ConstantPoolEnhanceable;
    use NumberLoadable;
    use FieldAssignable;
    use StaticInitializerAssignable;

    const BUNDLE_PACKAGES = [
        \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Constants::class,
        \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\_String::class,
    ];

    public function assemble(): void
    {
        $className = Runtime::PHP_STANDARD_CLASS_NAME;

        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(
            Runtime::PHP_COMPILER_JDK_VERSION
        );

        $this->constantPool = new ConstantPool();
        $this->constantPoolFinder = new ConstantPoolFinder($this->constantPool);

        $this->methods = new Methods();
        $this->fields = new Fields();

        foreach (static::BUNDLE_PACKAGES as $package) {
            /**
             * @var PackageBundlerInterface $package
             */
            $packageInstance = $package::factory()
                ->setConstantPool($this->constantPool);

            foreach ($packageInstance->getDefinedConstants() as [$name, $value, $returnSignature]) {
                $this->getEnhancedConstantPool()
                    ->addFieldref(
                        $className,
                        $name,
                        $descriptor = (new Descriptor())
                            ->addArgument($returnSignature)
                            ->make()
                    );
                $this->fields
                    ->add(
                        (new Field(
                            (new FieldAccessFlag())
                                ->enablePublic()
                                ->enableStatic()
                                ->enableFinal()
                                ->make(),
                            $className,
                            $name,
                            $descriptor
                        ))
                            ->setConstantPool($this->getConstantPool())
                            ->setConstantPoolFinder($this->getConstantPoolFinder())
                            ->setValue((string) $value)
                    );
            }
        }

        $this->getEnhancedConstantPool()
            ->addClass($className)
            ->addClass(_Object::class);

        $this->assignStaticInitializer($className);

        $compiler = new Compiler(
            (new ClassFileStructure())
                ->setMinorVersion($minorVersion)
                ->setMajorVersion($majorVersion)
                ->setAccessFlags(
                    (new \PHPJava\Compiler\Builder\Signatures\ClassAccessFlag())
                        ->enableSuper()
                        ->enablePublic()
                        ->make()
                )
                ->setThisClass(
                    $this->getEnhancedConstantPool()
                        ->findClass($className)
                )
                ->setSuperClass(
                    $this->getEnhancedConstantPool()
                        ->findClass(_Object::class)
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
                                            $className . '.php'
                                        )
                                )
                                ->beginPreparation()
                        )
                        ->toArray()
                )
                ->setConstantPool(
                    $this
                        ->constantPool
                        ->add(Utf8Info::factory($className . '.php'))
                        ->toArray()
                )
        );

        $compiler->compile(
            $this
                ->getStreamReader()
                ->getDistributeStreamByClassPath($className)
        );
    }
}
