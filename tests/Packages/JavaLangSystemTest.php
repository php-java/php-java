<?php
namespace PHPJava\Tests\Packages;

use PHPJava\Core\JavaArchive;
use PHPJava\Tests\Base;

class JavaLangSystemTest extends Base
{
    protected $fixtures = [
        'JavaLangSystemTest',
    ];

    public function testIdentityHashCode()
    {
        ob_start();
        $this->initiatedJavaClasses['JavaLangSystemTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'identityHashCode'
            );

        $values = array_filter(explode("\n", ob_get_clean()));
        $this->assertCount(2, $values);

        $hashCodes = [];

        foreach ($values as $value) {
            $this->assertIsNumeric($value);
            $this->assertNotContains($value, $hashCodes);
            $hashCodes[] = $value;
        }
    }
}
