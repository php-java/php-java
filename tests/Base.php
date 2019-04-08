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
            $this->initiatedJavaClasses[$fixture] = new \PHPJava\Core\JavaClass(
                new \PHPJava\Core\Stream\Reader\FileReader(
                    $this->getClassName($fixture)
                )
            );
        }
    }

    protected function getClassName($fixtureName)
    {
        return __DIR__ . '/caches/' . $fixtureName . '.class';
    }
}
