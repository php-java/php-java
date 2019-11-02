<?php
namespace PHPJava\Compiler\Lang\Assembler\Bundler;

use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Attributes\PHPJavaSignature;
use PHPJava\Compiler\Builder\Attributes\SourceFile;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Packages\java\lang\_Object;

class PHPStandardClass extends AbstractBundler
{
    use ConstantPoolEnhanceable;

    const BUNDLE_PACKAGES = [
        \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\Constants::class,
        \PHPJava\Compiler\Lang\Assembler\Bundler\Packages\_String::class,
    ];

    public function assemble(): void
    {
        $className = Runtime::PHP_STANDARD_CLASS_NAME;

        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(8);

        $this->constantPool = new ConstantPool();
        $this->constantPoolFinder = new ConstantPoolFinder($this->constantPool);

        $this->methods = new Methods();

        foreach (static::BUNDLE_PACKAGES as $package) {
            /**
             * @var PackageBundlerInterface $package
             */
            $packageInstance = $package::factory($this);
            foreach ($packageInstance->getDefinedMethods() as [$methodName, $argumentSignature, $returnSignature]) {
                $defaultMethodName = $methodName;
                $methodName = Runtime::PHP_STANDARD_CLASS_METHOD_PREFIX . $methodName;

                $descriptor = new Descriptor();
                foreach ($argumentSignature as $argument) {
                    $descriptor
                        ->addArgument($argument);
                }
                $descriptor = $descriptor
                    ->setReturn($returnSignature)
                    ->make();

                $this->getEnhancedConstantPool()
                    ->addMethodref(
                        $className,
                        $methodName,
                        $descriptor
                    );

                // Call functions
                $functionOperationCodes = call_user_func([$packageInstance, $defaultMethodName]);

                $this->methods
                    ->add(
                        (new Method(
                            (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                                ->enablePublic()
                                ->enableStatic()
                                ->make(),
                            $this->getConstantPoolFinder()
                                ->find(
                                    Utf8Info::class,
                                    $methodName
                                ),
                            $this->getConstantPoolFinder()->find(
                                Utf8Info::class,
                                $descriptor
                            )
                        ))
                            ->setAttributes(
                                (new Attributes())
                                    ->add(
                                        (new Code())
                                            ->setConstantPool($this->getConstantPool())
                                            ->setConstantPoolFinder($this->getConstantPoolFinder())
                                            ->setCode($functionOperationCodes)
                                            ->beginPrepare()
                                    )
                                    ->toArray()
                            )
                    );
            }
        }

        $this->getEnhancedConstantPool()
            ->addClass($className)
            ->addClass(_Object::class);

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
                                            $className . '.php'
                                        )
                                )
                                ->beginPrepare()
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
