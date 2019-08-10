<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

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
        $result = trim(StandardIO::getHeapspace());

        $this->assertEquals(
            'NotSame',
            $result
        );
    }
}
