<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class ObjectCompareTest extends Base
{
    protected $fixtures = [
        'ObjectCompareTest',
    ];

    public function testCallTableswitch_Pattern1()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['ObjectCompareTest']
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
