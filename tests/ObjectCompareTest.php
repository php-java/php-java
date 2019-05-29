<?php
namespace PHPJava\Tests;

class ObjectCompareTest extends Base
{
    protected $fixtures = [
        'ObjectCompareTest',
    ];

    public function testObjectCompareTest()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['ObjectCompareTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'compareInitiatedObjects'
            );
        $result = trim(ob_get_clean());

        $this->assertEquals(
            'NotSame',
            $result
        );
    }
}
