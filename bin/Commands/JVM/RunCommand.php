<?php
namespace PHPJava\Console\Commands\JVM;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RunCommand extends Command
{
    protected static $defaultName = 'jvm:run';

    protected function configure()
    {
        $this
            ->setDescription('Run JVM')
            ->addOption(
                'options',
                'o',
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Set options'
            )
            ->addOption(
                'mode',
                'm',
                InputOption::VALUE_OPTIONAL,
                'Set run mode [jar|class]. Default is class.'
            )
            ->addOption(
                'entrypoint',
                'e',
                InputOption::VALUE_OPTIONAL,
                'Overwrite entrypoint'
            )
            ->addArgument(
                'parameters',
                InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                'Define parameters to pass for entrypoint.'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $input->getOptions();
    }
}
