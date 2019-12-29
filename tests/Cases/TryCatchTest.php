<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\Exceptions\UncaughtException;
use PHPJava\Packages\java\lang\IndexOutOfBoundsException;

class TryCatchTest extends Base
{
    protected $fixtures = [
        'TryCatchTest',
    ];

    public function testPassthroughTryStatement()
    {
        $result = static::$initiatedJavaClasses['TryCatchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('testPassthroughTryStatement');

        $this->assertEquals(
            '1',
            $result
        );
    }

    public function testPassthroughCatchStatement()
    {
        $result = static::$initiatedJavaClasses['TryCatchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('testPassthroughCatchStatement');

        $this->assertEquals(
            '-1',
            $result
        );
    }

    public function testImitationThrowException()
    {
        $result = static::$initiatedJavaClasses['TryCatchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call('testImitationThrowException');

        $this->assertEquals(
            '-1',
            $result
        );
    }

    public function testImitationThrownExceptionHasPreviousException()
    {
        $this->expectException(IndexOutOfBoundsException::class);
        $this->expectExceptionMessage('String index out of range: -1');

        try {
            $result = static::$initiatedJavaClasses['TryCatchTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call('testImitationThrownExceptionHasPreviousException');
        } catch (UncaughtException $e) {
            // Unwrap the original exception
            throw $e->getPrevious();
        }
    }
}
