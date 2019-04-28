<?php
namespace PHPJava\Console\Commands\JVM;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RunCommand extends Command
{
    protected static $defaultName = 'jvm:run';

    protected function configure()
    {
        $this
            ->addArgument(
                'file',
                InputArgument::REQUIRED,
                'Specify to run [jar|class] file.'
            )
            ->addArgument(
                'parameters',
                InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                'Specify parameters to pass for entrypoint.'
            )
            ->addOption(
                'settings',
                's',
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Set option settings.'
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
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $settings = $input->getOption('settings') ?? [];
        $mode = $input->getOption('mode') ?? 'class';
        $entrypoint = $input->getOption('entrypoint') ?? null;
        $file = $input->getArgument('file');
        $parameters = $input->getArgument('parameters');


        var_dump($file);
    }
}
