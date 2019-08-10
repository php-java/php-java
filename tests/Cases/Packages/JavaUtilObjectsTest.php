<?php
namespace PHPJava\Tests\Cases\Packages;

use PHPJava\IO\Standard\Output;
use PHPJava\Tests\Cases\Base;

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

        $values = array_filter(explode("\n", Output::getHeapspace()));
        $this->assertCount(3, $values);
        $this->assertSame('-640608884', $values[0]);
        $this->assertSame('-640608884', $values[1]);
        $this->assertSame('-640608884', $values[2]);
    }
}
