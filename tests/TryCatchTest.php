<?php
namespace PHPJava\Tests;

use PHPJava\Exceptions\UnableToCatchException;
use PHPJava\Packages\java\lang\IndexOutOfBoundsException;

class TryCatchTest extends Base
{
    protected $fixtures = [
        'TryCatchTest',
    ];

    public function testPassthroughTryStatement()
    {
        $result = $this->initiatedJavaClasses['TryCatchTest']
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
        $result = $this->initiatedJavaClasses['TryCatchTest']
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
        $result = $this->initiatedJavaClasses['TryCatchTest']
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
            $result = $this->initiatedJavaClasses['TryCatchTest']
                ->getInvoker()
                ->getStatic()
                ->getMethods()
                ->call('testImitationThrownExceptionHasPreviousException');
        } catch (UnableToCatchException $e) {
            // Unwrap the original exception
            throw $e->getPrevious();
        }
    }
}
