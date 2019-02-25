<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected $fixtures = [];

    public function setUp(): void
    {
        parent::setUp();
        // build fixtures

        foreach ($this->fixtures as $fixture) {
            exec('javac -encoding UTF8 ' . __DIR__ . '/fixtures/java/' . str_replace(['../', './'], '', $fixture) . '.java -d ' . __DIR__ . '/caches');
        }
    }

    protected function getClassName($fixtureName)
    {
        return __DIR__ . '/caches/' . $fixtureName . '.class';
    }
}
