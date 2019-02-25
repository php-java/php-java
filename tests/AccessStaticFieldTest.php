<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class AccessStaticFieldTest extends Base
{
    protected $fixtures = [
        'AccessStaticFieldTest',
    ];

    /**
     * @var \PHPJava\Core\JavaClass
     */
    private $javaClass;

    public function setUp(): void
    {
        parent::setUp();

        $this->javaClass = new \PHPJava\Core\JavaClass(
            new \PHPJava\Core\JavaClassReader($this->getClassName('AccessStaticFieldTest'))
        );
    }

    public function testGetPuttedField()
    {
        $this->assertEquals(5, $this->javaClass->getInvoker()->getStaticFields()->get('number'));
        $this->assertEquals('Hello World', $this->javaClass->getInvoker()->getStaticFields()->get('string'));
    }

    public function testOverwriteField()
    {
        $this->javaClass->getInvoker()->getStaticFields()->set('number', 1000);
        $this->javaClass->getInvoker()->getStaticFields()->set('string', 'New String!');
        $this->assertEquals(1000, $this->javaClass->getInvoker()->getStaticFields()->get('number'));
        $this->assertEquals('New String!', $this->javaClass->getInvoker()->getStaticFields()->get('string'));
    }
}
