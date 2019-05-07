<?php
namespace PHPJava\Tests;

use PHPUnit\Framework\TestCase;

class ConstructTest extends Base
{
    protected $fixtures = [
        'ConstructTest',
        'ConstructorWithParametersTest',
        'ConstructorNoParameterTest',
    ];

    public function testConstructorWithParameters_Pattern1()
    {
        ob_start();
        $result = $this->initiatedJavaClasses['ConstructorWithParametersTest']
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


    public function testConstructorWithParameters_Pattern2()
    {
        ob_start();
        $result = $this->initiatedJavaClasses['ConstructorWithParametersTest']
            ->getInvoker()
            ->construct("Hello World!")
            ->getDynamic()
            ->getMethods()
            ->call('entrypoint');
        $result = ob_get_clean();
        $this->assertEquals("Hello World!\nEntrypoint\n", $result);
    }

    public function testConstructorNoParameter_Pattern1()
    {
        ob_start();
        $result = $this->initiatedJavaClasses['ConstructorNoParameterTest']
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


    public function testConstructorNoParameter_Pattern2()
    {
        ob_start();
        $result = $this->initiatedJavaClasses['ConstructorNoParameterTest']
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
        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);

        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->getDynamic()
            ->getFields()
            ->set('text', 'New Text')
            ->get('text');

        $this->assertEquals('New Text', $text);

        // Re-construction will be changed to default text

        $text = $this->initiatedJavaClasses['ConstructTest']
            ->getInvoker()
            ->construct()
            ->getDynamic()
            ->getFields()
            ->get('text');

        $this->assertEquals('Default Text', $text);
    }
}
