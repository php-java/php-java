<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Maps\EntryMap;
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

    public function testFailedFind()
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
}
