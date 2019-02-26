<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class ConstructTest extends Base
{
    protected $fixtures = [
        'ConstructTest',
    ];

    public function testDynamicField()
    {
        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamicFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);

        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->getDynamicFields()
            ->set('text', 'New Text')
            ->get('text');

        $this->assertEquals('New Text', $text);

        // Re-construction will be changed to default text

        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamicFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);
    }
}
