<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

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
}
