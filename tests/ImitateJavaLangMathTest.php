<?php
namespace PHPJava\Tests;

use PHPJava\Core\JavaArchive;
use PHPUnit\Framework\TestCase;

class ImitateJavaLangMathTest extends Base
{
    protected $fixtures = [
        'ImitateJavaLangMathTest',
    ];

    public function testDecrementExact()
    {
        ob_start();
        $this->initiatedJavaClasses['ImitateJavaLangMathTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'decrementExact',
                1234
            );
        $value = (int) ob_get_clean();
        $this->assertEquals(1233, $value);
    }
}
