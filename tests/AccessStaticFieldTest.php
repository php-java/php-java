<?php
namespace PHPJava\Tests;

class AccessStaticFieldTest extends Base
{
    protected $fixtures = [
        'AccessStaticFieldTest',
    ];

    public function testGetPuttedField()
    {
        $this->assertEquals(5, $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStatic()->getFields()->get('number')->getValue());
        $this->assertEquals('Hello World', $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStatic()->getFields()->get('string'));
    }

    public function testOverwriteField()
    {
        $static = $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStatic();
        $static->getFields()->set('number', 1000);
        $static->getFields()->set('string', 'New String!');
        $this->assertEquals(1000, $static->getFields()->get('number'));
        $this->assertEquals('New String!', $static->getFields()->get('string'));
    }
}
