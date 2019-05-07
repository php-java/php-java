<?php
namespace PHPJava\Tests\Packages;

use PHPJava\Core\JavaArchive;
use PHPJava\Tests\Base;

class JavaUtilObjectsTest extends Base
{
    protected $fixtures = [
        'JavaUtilObjectsTest',
    ];

    public function testHashCode()
    {
        ob_start();
        $this->initiatedJavaClasses['JavaUtilObjectsTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'testHashCode'
            );

        $values = array_filter(explode("\n", ob_get_clean()));
        $this->assertCount(3, $values);
        $this->assertSame('2728214739616339340', $values[0]);
        $this->assertSame('2728214739616339340', $values[1]);
        $this->assertSame('2728214739616339340', $values[2]);
    }
}
