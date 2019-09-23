<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Maps\EntryMap;
use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\NameAndTypeInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\FinderException;
use PHPJava\Tests\Cases\Base;

class FinderTest extends Base
{
    public function testSuccessfullyUtf8InfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('Hello World'));

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(Utf8Info::class, 'Hello World')->getResult();
        $this->assertSame(1, $entry->getEntryIndex());
        $this->assertInstanceOf(Utf8Info::class, $entry->getEntry());
    }

    public function testSuccessfullyStringInfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('Hello World'))
            ->add(new StringInfo(
                $finder->find(Utf8Info::class, 'Hello World')
            ));

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(StringInfo::class, 'Hello World')->getResult();
        $this->assertSame(2, $entry->getEntryIndex());
        $this->assertInstanceOf(StringInfo::class, $entry->getEntry());
    }

    public function testSuccessfullyClassInfoInfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('HelloWorld'))
            ->add(new ClassInfo(
                $finder->find(Utf8Info::class, 'HelloWorld')
            ));

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(ClassInfo::class, 'HelloWorld')->getResult();
        $this->assertSame(2, $entry->getEntryIndex());
        $this->assertInstanceOf(ClassInfo::class, $entry->getEntry());
    }

    public function testSuccessfullyNameAndTypeInfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('main'))
            ->add(new Utf8Info('()V'))
            ->add(new NameAndTypeInfo(
                $finder->find(Utf8Info::class, 'main'),
                $finder->find(Utf8Info::class, '()V')
            ));

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(NameAndTypeInfo::class, 'main', '()V')->getResult();
        $this->assertSame(3, $entry->getEntryIndex());
        $this->assertInstanceOf(NameAndTypeInfo::class, $entry->getEntry());
    }

    public function testSuccessfullyMethodrefInfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('HelloWorld'))
            ->add(new Utf8Info('main'))
            ->add(new Utf8Info('()V'))
            ->add(new ClassInfo(
                $finder->find(Utf8Info::class, 'HelloWorld')
            ))
            ->add(new NameAndTypeInfo(
                $finder->find(Utf8Info::class, 'main'),
                $finder->find(Utf8Info::class, '()V')
            ))
            ->add(
                new MethodrefInfo(
                    $finder->find(ClassInfo::class, 'HelloWorld'),
                    $finder->find(NameAndTypeInfo::class, 'main', '()V')
                )
            );

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(MethodrefInfo::class, 'HelloWorld', 'main', '()V')->getResult();
        $this->assertSame(6, $entry->getEntryIndex());
        $this->assertInstanceOf(MethodrefInfo::class, $entry->getEntry());
    }

    public function testSuccessfullyFieldrefInfoFind()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('java/lang/System'))
            ->add(new Utf8Info('out'))
            ->add(new Utf8Info('Ljava/io/PrintStream;'))
            ->add(new ClassInfo(
                $finder->find(Utf8Info::class, 'java/lang/System')
            ))
            ->add(new NameAndTypeInfo(
                $finder->find(Utf8Info::class, 'out'),
                $finder->find(Utf8Info::class, 'Ljava/io/PrintStream;')
            ))
            ->add(
                new MethodrefInfo(
                    $finder->find(ClassInfo::class, 'java/lang/System'),
                    $finder->find(NameAndTypeInfo::class, 'out', 'Ljava/io/PrintStream;')
                )
            );

        /**
         * @var EntryMap $entry
         */
        $entry = $finder->find(MethodrefInfo::class, 'java/lang/System', 'out', 'Ljava/io/PrintStream;')->getResult();
        $this->assertSame(6, $entry->getEntryIndex());
        $this->assertInstanceOf(MethodrefInfo::class, $entry->getEntry());
    }

    public function testFailedFindPattern1()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('Hello World'));

        /**
         * @var EntryMap $entry
         */
        $this->expectException(FinderException::class);
        $finder->find(Utf8Info::class, ':thinking:')->getResult();
    }

    public function testFailedFindPattern2()
    {
        $constantPool = new ConstantPool();
        $finder = new ConstantPoolFinder($constantPool);
        $constantPool
            ->add(new Utf8Info('Hello World'));

        /**
         * @var EntryMap $entry
         */
        $this->expectException(FinderException::class);
        $finder->find(StringInfo::class, 'Hello World')->getResult();
    }
}
