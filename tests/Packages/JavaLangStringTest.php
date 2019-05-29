<?php
namespace PHPJava\Tests\Packages;

use PHPJava\Core\JavaClass;
use PHPJava\Exceptions\UncaughtException;
use PHPJava\Packages\java\lang\IndexOutOfBoundsException;
use PHPJava\Tests\Base;

class JavaLangStringTest extends Base
{
    protected $fixtures = [
        'JavaLangStringTest',
    ];

    public function testCharAtIndex()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'charAtIndex',
                'abc',
                1
            );
        $value = ob_get_clean();
        $this->assertEquals('b', $value);
    }

    public function testThrowsCharAtNegativeIndex()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: -1');

        try {
            static::$initiatedJavaClasses['JavaLangStringTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'charAtIndex',
                    'abc',
                    -1
                );
        } catch (UncaughtException $e) {
            throw $e->getPrevious();
        }
    }

    public function testThrowsCharAtOutOfRangeIndex()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: 3');

        try {
            static::$initiatedJavaClasses['JavaLangStringTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call(
                    'charAtIndex',
                    'abc',
                    3
                );
        } catch (UncaughtException $e) {
            throw $e->getPrevious();
        }
    }

    public function testConcat()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'concat',
                'abc',
                'def'
            );
        $value = ob_get_clean();
        $this->assertEquals('abcdef', $value);
    }

    public function testHashCode()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testHashCode'
            );

        $values = array_filter(explode("\n", ob_get_clean()));
        $this->assertCount(3, $values);
        $this->assertSame('-640608884', $values[0]);
        $this->assertSame('-640608884', $values[1]);
        $this->assertSame('-640608884', $values[2]);
    }

    public function testIntern()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'intern'
            );
        [ $intern, $literal ] = array_filter(explode("\n", ob_get_clean()));

        $this->assertIsNumeric($intern);
        $this->assertIsNumeric($literal);

        $this->assertSame($intern, $literal);
    }

    public function testNotInterned()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'notInterned'
            );
        [ $intern, $literal ] = array_filter(explode("\n", ob_get_clean()));

        $this->assertIsNumeric($intern);
        $this->assertIsNumeric($literal);

        $this->assertNotSame($intern, $literal);
    }

    public function testNotInternedAfterLiteral()
    {
        // This test need dynamic loading.
        static::$initiatedJavaClasses['JavaLangStringTest'] = JavaClass::load('JavaLangStringTest');

        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'notInternedAfterLiteral'
            );
        [ $intern, $literal1, $literal2 ] = array_filter(explode("\n", ob_get_clean()));

        $this->assertIsNumeric($intern);
        $this->assertIsNumeric($literal1);
        $this->assertIsNumeric($literal2);

        $this->assertNotSame($intern, $literal1);
        $this->assertNotSame($intern, $literal2);
        $this->assertSame($literal1, $literal2);
    }

    public function testReplace()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'replace',
                'aabbccaabbcc',
                'bb',
                'cc'
            );
        $value = ob_get_clean();
        $this->assertEquals('aaccccaacccc', $value);
    }

    public function testToLowerCase()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'toLowerCase',
                'Hello, World'
            );
        $value = ob_get_clean();
        $this->assertEquals('hello, world', $value);
    }

    public function testToUpperCase()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaLangStringTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'toUpperCase',
                'Hello, World'
            );
        $value = ob_get_clean();
        $this->assertEquals('HELLO, WORLD', $value);
    }
}
