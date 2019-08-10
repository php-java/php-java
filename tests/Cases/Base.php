<?php
namespace PHPJava\Tests\Cases;

use PHPJava\Core\JavaClass;
use PHPJava\IO\Standard\Output;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected $fixtures = [];
    protected static $initiatedJavaClasses = [];

    public function setUp(): void
    {
        parent::setUp();
        // build fixtures

        $pathRoot = __DIR__ . '/fixtures/java/';

        ClassResolver::add([
            [ClassResolver::RESOURCE_TYPE_FILE, __DIR__ . '/caches'],
        ]);

        foreach ($this->fixtures as $fixture) {
            if (isset(static::$initiatedJavaClasses[$fixture])) {
                continue;
            }
            exec('javac -classpath ' . $pathRoot . ' -encoding UTF8 ' . $pathRoot . str_replace(['../', './'], '', $fixture) . '.java -d ' . __DIR__ . '/caches');
            static::$initiatedJavaClasses[$fixture] = JavaClass::load(
                $fixture
            );
        }
    }

    public function tearDown(): void
    {
        Output::clearHeapspace();

        parent::tearDown();
    }

    public function createJAR($name, $entrypoint, array $fixtures = [])
    {
        $classes = implode(
            ' ',
            array_map(
                function ($fixture) {
                    return $fixture . '.class';
                },
                $fixtures
            )
        );
        exec('cd ' . __DIR__ . '/caches && jar -cvfe ' . $name . ' ' . $entrypoint . ' ' . $classes);
        return $this;
    }

    protected function getClassName($fixtureName)
    {
        return __DIR__ . '/caches/' . $fixtureName . '.class';
    }
}
