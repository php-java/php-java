<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\ClassAccessFlag;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaCompiledClass;
use PHPJava\Core\Stream\Reader\InlineReader;
use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\io\PrintStream;
use PHPJava\Packages\java\lang\_Object;
use PHPJava\Packages\java\lang\_String;
use PHPJava\Packages\java\lang\System;
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

        $enhancedConstantPool = ConstantPoolEnhancer::factory(
            $constantPool,
            $finder
        );

        $enhancedConstantPool
            ->addString('Hello PHPJava Compiler!')
            ->addClass(_Object::class)
            ->addClass('HelloWorld')
            ->addClass(System::class)
            ->addClass(PrintStream::class)
            ->addFieldref(
                System::class,
                'out',
                (new Descriptor())
                    ->addArgument(PrintStream::class)
                    ->make()
            )
            ->addMethodref(
                PrintStream::class,
                'println',
                (new Descriptor())
                    ->addArgument(_String::class)
                    ->setReturn(_Void::class)
                    ->make()
            )
            ->addNameAndType(
                'main',
                (new Descriptor())
                    ->addArgument(_String::class, 1)
                    ->setReturn(_Void::class)
                    ->make()
            );

        $compiler = new Compiler(
            (new ClassFileStructure())
                ->setMinorVersion($minorVersion)
                ->setMajorVersion($majorVersion)
                ->setAccessFlags(
                    (new ClassAccessFlag())
                        ->enableSuper()
                        ->make()
                )
                ->setThisClass($enhancedConstantPool->findClass('HelloWorld'))
                ->setSuperClass($enhancedConstantPool->findClass(_Object::class))
                ->setMethods(
                    (new Methods())
                        ->add(
                            (new Method(
                                (new MethodAccessFlag())
                                    ->enablePublic()
                                    ->enableStatic()
                                    ->make(),
                                $enhancedConstantPool->findUtf8('main'),
                                $enhancedConstantPool->findUtf8(
                                    (new Descriptor())
                                        ->addArgument(_String::class, 1)
                                        ->setReturn(_Void::class)
                                        ->make()
                                )
                            ))
                                ->setAttributes(
                                    (new Attributes())
                                        ->add(
                                            (new Code($enhancedConstantPool->findUtf8('Code')))
                                                ->setConstantPool($constantPool)
                                                ->setConstantPoolFinder($finder)
                                                ->setCode(
                                                    [
                                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                            OpCode::_getstatic,
                                                            Operand::factory(
                                                                Uint16::class,
                                                                $enhancedConstantPool->findField(
                                                                    System::class,
                                                                    'out',
                                                                    (new Descriptor())
                                                                        ->addArgument(PrintStream::class)
                                                                        ->make()
                                                                )
                                                            )
                                                        ),
                                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                            OpCode::_ldc,
                                                            Operand::factory(
                                                                Uint8::class,
                                                                $enhancedConstantPool->findString('Hello PHPJava Compiler!')
                                                            )
                                                        ),
                                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                            OpCode::_invokevirtual,
                                                            Operand::factory(
                                                                Uint16::class,
                                                                $enhancedConstantPool->findMethod(
                                                                    PrintStream::class,
                                                                    'println',
                                                                    (new Descriptor())
                                                                        ->addArgument(_String::class)
                                                                        ->setReturn(_Void::class)
                                                                        ->make()
                                                                )
                                                            )
                                                        ),
                                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                            OpCode::_return
                                                        ),
                                                    ]
                                                )
                                                ->beginPrepare()
                                        )
                                        ->toArray()
                                )
                        )
                        ->toArray()
                )
                ->setConstantPool($constantPool->toArray())
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
