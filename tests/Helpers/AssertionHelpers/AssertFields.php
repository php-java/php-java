<?php
namespace PHPJava\Tests\Helpers\AssertionHelpers;

trait AssertFields
{
    /**
     * @param $expected
     * @param $number
     */
    private function assertStaticField($expected, $number)
    {
        $result = static::$initiatedJavaClasses[$this->fixtures[0]]
            ->getInvoker()
            ->getStatic()
            ->getFields()
            ->get("s_{$number}");

        $this->assertEquals($expected, (string) $result);
    }

    private function assertDynamicField($expected, $number)
    {
        static $instance = null;
        if ($instance === null) {
            $instance = static::$initiatedJavaClasses[$this->fixtures[0]]
                ->getInvoker()
                ->construct();
        }
        $result = $instance
            ->getDynamic()
            ->getFields()
            ->get("d_{$number}");

        $this->assertEquals($expected, (string) $result);
    }
}
