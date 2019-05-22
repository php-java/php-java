<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected $fixtures = [];
    protected $initiatedJavaClasses = [];

    public function setUp(): void
    {
        parent::setUp();
        // build fixtures

        $pathRoot = __DIR__ . '/fixtures/java/';

        foreach ($this->fixtures as $fixture) {
            exec('javac -classpath ' . $pathRoot . ':' . $pathRoot . 'caches -encoding UTF8 ' . $pathRoot . str_replace(['../', './'], '', $fixture) . '.java -d ' . __DIR__ . '/caches');
            $this->initiatedJavaClasses[$fixture] = new \PHPJava\Core\JavaFileClass(
                new \PHPJava\Core\Stream\Reader\FileReader(
                    $this->getClassName($fixture)
                )
            );
        }
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
