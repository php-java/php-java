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
    system('rm test.class');
    system('javac -encoding UTF8 test.java');

    $invoker = new JavaClass('test.class');

    $invoker->getMethodInvoker()->main(array(999, 888));

    $invoker->trace();

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

    var_dump($e);

}