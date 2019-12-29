<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases\Compiler;

use PHPJava\Tests\Cases\Base;

class NamespaceTest extends Base
{
    use JavaRunnable;

    public function testNamespacePattern1()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__, 'PHPJava');

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }

    public function testNamespacePattern2()
    {
        [$output, $return] = $this->runJavaTest(__METHOD__, 'PHPJava.Test');

        $this->assertSame(
            'Hello World!',
            $output[0]
        );
    }
}
