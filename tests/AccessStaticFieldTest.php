<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class AccessStaticFieldTest extends Base
{
    protected $fixtures = [
        'AccessStaticFieldTest',
    ];

    public function testGetPuttedField()
    {
        $this->assertEquals(5, $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->get('number'));
        $this->assertEquals('Hello World', $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->get('string'));
    }

    public function testOverwriteField()
    {
        $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->set('number', 1000);
        $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->set('string', 'New String!');
        $this->assertEquals(1000, $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->get('number'));
        $this->assertEquals('New String!', $this->initiatedJavaClasses['AccessStaticFieldTest']->getInvoker()->getStaticFields()->get('string'));
    }
}
