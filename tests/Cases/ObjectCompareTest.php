<?php
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class ObjectCompareTest extends Base
{
    protected $fixtures = [
        'ObjectCompareTest',
    ];

    public function testObjectCompareTest()
    {
        $calculatedValue = static::$initiatedJavaClasses['ObjectCompareTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'compareInitiatedObjects'
            );
        $result = trim(Output::getHeapspace());

        $this->assertEquals(
            'NotSame',
            $result
        );
    }
}
