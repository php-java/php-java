<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class SwitchTest extends Base
{
    protected $fixtures = [
        'SwitchTest',
    ];

    public function testCallTableswitch_Pattern1()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'tableswitch',
                -1
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Cat',
            $result
        );
    }

    public function testTableswitch_Pattern2()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'tableswitch',
                0
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Dog',
            $result
        );
    }

    public function testTableswitch_Pattern3()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'tableswitch',
                1
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Hamster',
            $result
        );
    }


    public function testCallLookupswitch_Pattern1()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'lookupswitch',
                1234
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Lion',
            $result
        );
    }

    public function testCallLookupswitch_Pattern2()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'lookupswitch',
                5678
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Panda',
            $result
        );
    }

    public function testCallLookupswitch_Pattern3()
    {
        ob_start();
        $calculatedValue = $this->initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStaticMethods()
            ->call(
                'lookupswitch',
                9999
            );
        $result = ob_get_clean();

        $this->assertEquals(
            'Elephant',
            $result
        );
    }
}