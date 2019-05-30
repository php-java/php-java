<?php
namespace PHPJava\Tests\Packages;

use PHPJava\Tests\Base;

class JavaUtilObjectsTest extends Base
{
    protected $fixtures = [
        'JavaUtilObjectsTest',
    ];

    public function testHashCode()
    {
        ob_start();
        static::$initiatedJavaClasses['JavaUtilObjectsTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testHashCode'
            );

        $values = array_filter(explode("\n", ob_get_clean()));
        $this->assertCount(3, $values);
        $this->assertSame('-640608884', $values[0]);
        $this->assertSame('-640608884', $values[1]);
        $this->assertSame('-640608884', $values[2]);
    }
}
