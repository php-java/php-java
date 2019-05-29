<?php
namespace PHPJava\Tests;

class SwitchTest extends Base
{
    protected $fixtures = [
        'SwitchTest',
    ];

    public function testCallTableswitchPattern1()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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

    public function testTableswitchPattern2()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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

    public function testTableswitchPattern3()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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

    public function testCallLookupswitchPattern1()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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

    public function testCallLookupswitchPattern2()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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

    public function testCallLookupswitchPattern3()
    {
        ob_start();
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
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
