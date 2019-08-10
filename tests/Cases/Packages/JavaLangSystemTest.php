<?php
namespace PHPJava\Tests\Cases\Packages;

use PHPJava\Tests\Cases\Base;
use PHPJava\Utilities\PrintTool;

class JavaLangSystemTest extends Base
{
    protected $fixtures = [
        'JavaLangSystemTest',
    ];

    public function testIdentityHashCode()
    {
        static::$initiatedJavaClasses['JavaLangSystemTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'identityHashCode'
            );

        $values = array_filter(explode("\n", PrintTool::getHeapspace()));
        $this->assertCount(2, $values);

        $hashCodes = [];

        foreach ($values as $value) {
            $this->assertIsNumeric($value);
            $this->assertNotContains($value, $hashCodes);
            $hashCodes[] = $value;
        }
    }
}
