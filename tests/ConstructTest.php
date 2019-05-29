<?php
namespace PHPJava\Tests;

class ConstructTest extends Base
{
    protected $fixtures = [
        'ConstructTest',
        'ConstructorWithParametersTest',
        'ConstructorNoParameterTest',
    ];

    public function testConstructorWithParametersPattern1()
    {
        ob_start();
        $result = static::$initiatedJavaClasses['ConstructorWithParametersTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testConstructorWithParametersPattern2()
    {
        ob_start();
        $result = static::$initiatedJavaClasses['ConstructorWithParametersTest']
            ->getInvoker()
            ->construct('Hello World!')
            ->getDynamic()
            ->getMethods()
            ->call('entrypoint');
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\nEntrypoint\n", $result);
    }

    public function testConstructorNoParameterPattern1()
    {
        ob_start();
        $result = static::$initiatedJavaClasses['ConstructorNoParameterTest']
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                []
            );
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\n", $result);
    }

    public function testConstructorNoParameterPattern2()
    {
        ob_start();
        $result = static::$initiatedJavaClasses['ConstructorNoParameterTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getMethods()
            ->call('entrypoint');
        $result = ob_get_clean();
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
