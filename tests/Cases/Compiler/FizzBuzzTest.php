<?php
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class FizzBuzzTest extends Base
{
    use JavaRunnable;

    public function testFizzBuzz()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__);

        $this->assertSame(0, $return);
        $this->assertEquals(
            file_get_contents(__DIR__ . '/../templates/FizzBuzzTest.txt'),
            implode("\n", $output) . "\n"
        );
    }
}
