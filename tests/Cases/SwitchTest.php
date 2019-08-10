<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Utilities\StandardIO;

class SwitchTest extends Base
{
    protected $fixtures = [
        'SwitchTest',
    ];

    public function testCallTableswitchPattern1()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'tableswitch',
                -1
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Cat',
            $result
        );
    }

    public function testTableswitchPattern2()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'tableswitch',
                0
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Dog',
            $result
        );
    }

    public function testTableswitchPattern3()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'tableswitch',
                1
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Hamster',
            $result
        );
    }

    public function testCallLookupswitchPattern1()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'lookupswitch',
                1234
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Lion',
            $result
        );
    }

    public function testCallLookupswitchPattern2()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'lookupswitch',
                5678
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Panda',
            $result
        );
    }

    public function testCallLookupswitchPattern3()
    {
        $calculatedValue = static::$initiatedJavaClasses['SwitchTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'lookupswitch',
                9999
            );
        $result = StandardIO::getHeapspace();

        $this->assertEquals(
            'Elephant',
            $result
        );
    }
}
