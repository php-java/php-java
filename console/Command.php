<?php
namespace PHPJava\Console;

use PHPJava\Console\Commands\JVM\RunCommand;
use PHPJava\Core\JavaArchive;
use PHPJava\Core\PHPJava;
use Symfony\Component\Console\Application;

class Command
{
    public static function main()
    {
        $application = new Application();
        $runCommand = new RunCommand();
        $application->add($runCommand);
        $application->setDefaultCommand(
            $runCommand->getName(),
            true
        );
        $application->run();
    }
}
