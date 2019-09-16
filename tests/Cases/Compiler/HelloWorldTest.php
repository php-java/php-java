<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\ClassAccessFlag;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\NameAndTypeInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Compiler;
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\Stream\Reader\InlineReader;
use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\io\PrintStream;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Tests\Cases\Base;

class HelloWorldTest extends Base
{
    public function testHelloWorld(): void
    {
        // Generate class
        $source = fopen('php://memory', 'r+');

        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        [$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(8);

        $compiler = new Compiler(
            (new ClassFileStructure())
                ->setMinorVersion($minorVersion)
                ->setMajorVersion($majorVersion)
                ->setConstantPool(
                    $constantPool
                        ->add(new Utf8Info('Hello PHPJava Compiler!'))
                        ->add(new Utf8Info('HelloWorld'))
                        ->add(new Utf8Info('java/lang/Object'))
                        ->add(new Utf8Info('java/lang/System'))
                        ->add(new Utf8Info('out'))
                        ->add(new Utf8Info('Ljava/io/PrintStream;'))
                        ->add(new Utf8Info('java/io/PrintStream'))
                        ->add(new Utf8Info('println'))
                        ->add(new Utf8Info('Code'))
                        ->add(new Utf8Info('main'))
                        ->add(
                            new MethodrefInfo(
                                $finder->find(ClassInfo::class, 'java/lang/Object'),
                                $finder->find(NameAndTypeInfo::class, '<init>', '()V')
                            )
                        )
                        ->add(
                            new FieldrefInfo(
                                $finder->find(ClassInfo::class, 'java/lang/System'),
                                $finder->find(
                                    NameAndTypeInfo::class,
                                    'out',
                                    (new Descriptor())
                                        ->addArgument(PrintStream::class)
                                        ->make()
                                )
                            )
                        )
                        ->add(
                            new StringInfo(
                                $finder->find(Utf8Info::class, 'Hello PHPJava Compiler!')
                            )
                        )
                        ->add(
                            new MethodrefInfo(
                                $finder->find(ClassInfo::class, 'java/io/PrintStream'),
                                $finder->find(
                                    NameAndTypeInfo::class,
                                    'println',
                                    (new Descriptor())
                                        ->addArgument(_String::class)
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            )
                        )
                        ->add(
                            new ClassInfo(
                                $finder->find(Utf8Info::class, 'HelloWorld')
                            )
                        )
                        ->add(
                            new ClassInfo(
                                $finder->find(Utf8Info::class, 'java/lang/Object')
                            )
                        )
                        ->add(new Utf8Info('<init>'))
                        ->add(new Utf8Info(
                            (new Descriptor())
                                ->setReturn(_Void::class)
                                ->make()
                        ))
                        ->add(new Utf8Info(
                            (new Descriptor())
                                ->addArgument(_String::class, 1)
                                ->setReturn(_Void::class)
                                ->make()
                        ))
                        ->add(
                            new NameAndTypeInfo(
                                $finder->find(Utf8Info::class, '<init>'),
                                $finder->find(
                                    Utf8Info::class,
                                    (new Descriptor())
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            )
                        )
                        ->add(
                            new ClassInfo(
                                $finder->find(Utf8Info::class, 'java/lang/System')
                            )
                        )
                        ->add(
                            new NameAndTypeInfo(
                                $finder->find(Utf8Info::class, 'out'),
                                $finder->find(
                                    Utf8Info::class,
                                    (new Descriptor())
                                        ->addArgument(PrintStream::class)
                                        ->make()
                                )
                            )
                        )
                        ->add(
                            new ClassInfo(
                                $finder->find(Utf8Info::class, 'java/io/PrintStream')
                            )
                        )
                        ->add(
                            new NameAndTypeInfo(
                                $finder->find(Utf8Info::class, 'println'),
                                $finder->find(
                                    Utf8Info::class,
                                    (new Descriptor())
                                        ->addArgument(_String::class)
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            )
                        )
                        ->add(new Utf8Info(
                            (new Descriptor())
                                ->addArgument(_String::class)
                                ->setReturn(_Void::class)
                                ->make()
                        ))
                        ->toArray()
                )
                ->setAccessFlags(
                    (new ClassAccessFlag())
                        ->enableSuper()
                        ->make()
                )
                ->setThisClass($finder->find(ClassInfo::class, 'HelloWorld'))
                ->setSuperClass($finder->find(ClassInfo::class, 'java/lang/Object'))
                ->setMethods(
                    (new Methods())
                        ->add(
                            (new Method(
                                (new MethodAccessFlag())
                                    ->enablePublic()
                                    ->make(),
                                $finder->find(
                                    Utf8Info::class,
                                    '<init>'
                                ),
                                $finder->find(
                                    Utf8Info::class,
                                    (new Descriptor())
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            ))
                                ->setAttributes(
                                    (new Attributes())
                                        ->add(
                                            (new Code($finder->find(Utf8Info::class, 'Code')))
                                                ->setMaxStacks(1)
                                                ->setMaxLocals(1)
                                                ->setCode(
                                                    (new Operation())
                                                        ->add(OpCode::_aload_0)
                                                        ->add(
                                                            OpCode::_invokespecial,
                                                            [
                                                                [
                                                                    Uint16::class,
                                                                    $finder->find(
                                                                        MethodrefInfo::class,
                                                                        'java/lang/Object',
                                                                        '<init>',
                                                                        (new Descriptor())
                                                                            ->setReturn(_Void::class)
                                                                            ->make()
                                                                    ),
                                                                ],
                                                            ]
                                                        )
                                                        ->add(OpCode::_return)
                                                )
                                        )
                                        ->toArray()
                                )
                        )
                        ->add(
                            (new Method(
                                (new MethodAccessFlag())
                                    ->enablePublic()
                                    ->enableStatic()
                                    ->make(),
                                $finder->find(Utf8Info::class, 'main'),
                                $finder->find(
                                    Utf8Info::class,
                                    (new Descriptor())
                                        ->addArgument(_String::class, 1)
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            ))
                                ->setAttributes(
                                    (new Attributes())
                                        ->add(
                                            (new Code($finder->find(Utf8Info::class, 'Code')))
                                                ->setMaxStacks(2)
                                                ->setMaxLocals(1)
                                                ->setCode(
                                                    (new Operation())
                                                        ->add(
                                                            OpCode::_getstatic,
                                                            [
                                                                [
                                                                    Uint16::class,
                                                                    $finder->find(
                                                                        FieldrefInfo::class,
                                                                        'java/lang/System',
                                                                        'out',
                                                                        (new Descriptor())
                                                                            ->addArgument(PrintStream::class)
                                                                            ->make()
                                                                    ),
                                                                ],
                                                            ]
                                                        )
                                                        ->add(
                                                            OpCode::_ldc,
                                                            [
                                                                [
                                                                    Uint8::class,
                                                                    $finder->find(
                                                                        StringInfo::class,
                                                                        'Hello PHPJava Compiler!'
                                                                    ),
                                                                ],
                                                            ]
                                                        )
                                                        ->add(
                                                            OpCode::_invokevirtual,
                                                            [
                                                                [
                                                                    Uint16::class,
                                                                    $finder->find(
                                                                        MethodrefInfo::class,
                                                                        'java/io/PrintStream',
                                                                        'println',
                                                                        (new Descriptor())
                                                                            ->addArgument(_String::class)
                                                                            ->setReturn(_Void::class)
                                                                            ->make()
                                                                    ),
                                                                ],
                                                            ]
                                                        )
                                                        ->add(OpCode::_return)
                                                )
                                        )
                                        ->toArray()
                                )
                        )
                        ->toArray()
                )
        );

        $compiler->compile($source);
        rewind($source);

        $javaClass = new JavaClass(
            new JavaCompiledClass(
                new InlineReader(
                    'HelloWorld',
                    stream_get_contents($source)
                )
            )
        );

        $javaClass
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );

        $result = trim(Output::getHeapspace());

        $this->assertSame('Hello PHPJava Compiler!', $result);
    }
}
