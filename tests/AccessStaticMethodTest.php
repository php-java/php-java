<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class AccessStaticMethodTest extends Base
{
    protected $fixtures = [
        'AccessStaticMethodTest',
    ];

    /**
     * @var \PHPJava\Core\JavaClass
     */
    private $javaClass;

    public function setUp(): void
    {
        parent::setUp();

        $this->javaClass = new \PHPJava\Core\JavaClass(
            new \PHPJava\Core\JavaClassReader($this->getClassName('AccessStaticMethodTest'))
        );
    }

    public function testCallMainHavingStringArguments()
    {
        ob_start();
        // call main
        $this->javaClass->getInvoker()->getStaticMethods()->call(
            'main',
            ["Hello", "World"]
        );
        $result = ob_get_clean();

        $this->assertEquals("HelloWorld", $result);
    }

    public function testCallMainHavingIntegerArguments()
    {
        ob_start();
        // call main
        $this->javaClass->getInvoker()->getStaticMethods()->call(
            'main',
            [1234, 5678]
        );
        $result = ob_get_clean();

        $this->assertEquals(246811356, $result);
    }
}
