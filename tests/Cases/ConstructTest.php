<?php
declare(strict_types=1);
namespace PHPJava\Tests\Cases;

use PHPJava\IO\Standard\Output;

class ConstructTest extends Base
{
    protected $fixtures = [
        'ConstructTest',
        'ConstructorWithParametersTest',
        'ConstructorNoParameterTest',
    ];

    public function testConstructorWithParametersPattern1()
    {
        $result = static::$initiatedJavaClasses['ConstructorWithParametersTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testConstructorWithParametersPattern2()
    {
        $result = static::$initiatedJavaClasses['ConstructorWithParametersTest']
            ->getInvoker()
            ->construct('Hello World!')
            ->getDynamic()
            ->getMethods()
            ->call('entrypoint');
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\nEntrypoint\n", $result);
    }

    public function testConstructorNoParameterPattern1()
    {
        $result = static::$initiatedJavaClasses['ConstructorNoParameterTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testConstructorNoParameterPattern2()
    {
        $result = static::$initiatedJavaClasses['ConstructorNoParameterTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getMethods()
            ->call('entrypoint');
        $result = Output::getHeapspace();
        $this->assertEquals("Hello World!\nEntrypoint\n", $result);
    }

    public function testDynamicField()
    {
        $text = static::$initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);

        $text = static::$initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->getDynamic()
            ->getFields()
            ->set('text', 'New Text')
            ->get('text');

        $this->assertEquals('New Text', $text);

        // Re-construction will be changed to default text

        $text = static::$initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);
    }
}
