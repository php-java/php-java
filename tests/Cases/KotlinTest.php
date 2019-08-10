<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Core\JavaArchive;
use PHPJava\Utilities\StandardIO;

class KotlinTest extends Base
{
    public function setUp(): void
    {
        if (!$this->hasKotlin()) {
            return;
        }
        exec('kotlinc ' . __DIR__ . '/kotlin/HelloWorldKotlin.kt -include-runtime -d ' . __DIR__ . '/caches/HelloWorldKotlin.jar');
    }

    public function testHelloWorldOnKotlin()
    {
        if (!$this->hasKotlin()) {
            $this->markTestSkipped('Not installed kotlin in your environment.');
            return;
        }

        $jar = new JavaArchive(__DIR__ . '/caches/HelloWorldKotlin.jar');
        $jar->execute([]);
        $result = rtrim(StandardIO::getHeapspace());

        $this->assertEquals('Hello World!', $result);
    }

    private function hasKotlin()
    {
        exec('which kotlinc', $output);
        return count($output) > 0;
    }
}
