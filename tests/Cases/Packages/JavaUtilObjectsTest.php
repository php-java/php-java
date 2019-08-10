<?php
namespace PHPJava\Tests\Cases\Packages;

use PHPJava\Tests\Cases\Base;
use PHPJava\Utilities\PrintTool;

class JavaUtilObjectsTest extends Base
{
    protected $fixtures = [
        'JavaUtilObjectsTest',
    ];

    public function testHashCode()
    {
        static::$initiatedJavaClasses['JavaUtilObjectsTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testHashCode'
            );

        $values = array_filter(explode("\n", PrintTool::getHeapspace()));
        $this->assertCount(3, $values);
        $this->assertSame('-640608884', $values[0]);
        $this->assertSame('-640608884', $values[1]);
        $this->assertSame('-640608884', $values[2]);
    }
}
