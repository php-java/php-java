<?php

error_reporting(E_ALL);
mb_internal_encoding('UTF-8');

include 'PHPJava/Core/JavaManipulator.php';
include 'PHPJava/Core/JavaClass.php';
include 'PHPJava/Core/JavaArchive.php';

set_error_handler(function ($errno, $errstr, $errfile, $errline, $errcontext) {

    throw new ErrorException($errstr, $errno, 1, $errfile, $errline);

});

try {
    // ini_set('memory_limit', '1024M');
    system('rm test.class');
    system('javac -encoding UTF8 test.java');


    $javaClass = new JavaClass('test.class');
    $invoker = $javaClass->construct();
    
    // 動的メンバコールテスト
    var_dump(get_class($invoker->z));
    
    // 動的メンバ値変更&コールテスト
    $invoker->z = 9999;
    
    // 格納されている値
    var_dump($invoker->z->getValue());
    
    // 実際の値
    var_dump((string) $invoker->z);
    
    // 静的メンバコールテスト
    var_dump(get_class($invoker->b));
    
    // toString
    var_dump((string) $invoker->b);
    
    // メインメソッドを呼ぶ
    // $invoker->getMethodInvoker()->main(array(999, 888));
    
    // testIntを呼ぶ
    var_dump($invoker->testInt(1111));
    
    // testIntを呼ぶ
    var_dump((string) $invoker->testInt(1111));
    
    // testString(java/lang/String)を呼ぶ
    var_dump($invoker->testString("8888"));
    // 
    // testString(java/lang/String)を呼ぶ
    var_dump((string) $invoker->testString("8888"));

    $javaClass->trace();

/*
    // $a = new JavaArchive('JavaTest/dist/JavaTest.jar');

    // var_dump($a->getClass('javatest.JavaTest')->main(array(999, 888)));
    $manipulator = new JavaManipulator();

    $invoker = $manipulator->registerClass(new JavaClass('test.class'));

    // call main method
    var_dump($invoker->main(array(999, 888)));

    // var_dump($invoker->test(999, 999, 999, 999, 999, 999));

    $invoker->getClass()->trace();*/

} catch (Exception $e) {

    $javaClass->trace();

    var_dump($e->getMessage(), $e->getFile(), $e->getLine());

}