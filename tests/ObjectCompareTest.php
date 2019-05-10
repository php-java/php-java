<?php
namespace PHPJava\Tests;

class ObjectCompareTest extends Base
{
    protected $fixtures = [
        'ObjectCompareTest',
    ];

    public function testCallTableswitchPattern1()
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
