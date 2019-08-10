<?php
namespace PHPJava\Tests\Cases;

class AccessDynamicFieldTest extends Base
{
    protected $fixtures = [
        'AccessDynamicFieldTest',
    ];

    public function testGetPuttedField()
    {
        $constructed = static::$initiatedJavaClasses['AccessDynamicFieldTest']->getInvoker()->construct();
        $this->assertEquals(5, $constructed->getDynamic()->getFields()->get('number')->getValue());
        $this->assertEquals('Hello World', $constructed->getDynamic()->getFields()->get('string'));
    }

    public function testOverwriteField()
    {
        $constructed = static::$initiatedJavaClasses['AccessDynamicFieldTest']->getInvoker()->construct();
        $constructed->getStatic()->getFields()->set('number', 1000);
        $constructed->getStatic()->getFields()->set('string', 'New String!');
        $this->assertEquals(1000, $constructed->getStatic()->getFields()->get('number'));
        $this->assertEquals('New String!', $constructed->getStatic()->getFields()->get('string'));
    }

    public function testAffectedNewConstructingTest()
    {
        $constructed = static::$initiatedJavaClasses['AccessDynamicFieldTest']->getInvoker()->construct();
        $constructed->getStatic()->getFields()->set('number', 1000);
        $constructed->getStatic()->getFields()->set('string', 'New String!');

        // affected assertion
        $constructed = static::$initiatedJavaClasses['AccessDynamicFieldTest']->getInvoker()->construct();
        $this->assertEquals(5, $constructed->getDynamic()->getFields()->get('number')->getValue());
        $this->assertEquals('Hello World', $constructed->getDynamic()->getFields()->get('string'));
    }
}
