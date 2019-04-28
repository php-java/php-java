<?php
namespace PHPJava\Console;

use PHPJava\Console\Commands\JVM\RunCommand;
use PHPJava\Core\JavaArchive;
use PHPJava\Core\PHPJava;
use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application();
$runCommand = new RunCommand();
$application->add($runCommand);
$application->setDefaultCommand(
    $runCommand->getName(),
    true
);
$application->run();
