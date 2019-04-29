<?php
namespace PHPJava\Tests\Packages\PHPJava\Extended\_Object;

use PHPUnit\Framework\TestCase;
use PHPJava\Packages\java\lang\CloneNotSupportedException;

class DummyObject
{
    use \PHPJava\Packages\PHPJava\Extended\_Object;
}

class _ObjectTest extends Base
{
    public function testClone()
    {
        $this->expectException(CloneNotSupportedException);
        $target = new DummyObject();
        $method = new \ReflectionMethod(get_class($target), '__clone');
        $method->setAccessible(true);
        $method->invoke($target);
    }
}
