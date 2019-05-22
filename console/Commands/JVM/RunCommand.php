<?php
namespace PHPJava\Console\Commands\JVM;

use PHPJava\Core\JavaArchive;
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaSingleClass;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\Stream\Reader\FileReader;
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
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $settings = $input->getOption('settings') ?? [];
        $mode = strtolower($input->getOption('mode') ?? 'class');
        $file = $input->getArgument('file');
        $parameters = $input->getArgument('parameters');

        // Set global options
        GlobalOptions::set($settings);

        if ($mode === 'jar') {
            return $this->runJar($file, $parameters);
        } elseif ($mode === 'class') {
            return $this->runClass($file, $parameters);
        }

        $output->writeln(
            '<error>Unable to run `' . $mode . '` mode.</error>'
        );
    }

    private function runJar(string $file, array $parameters)
    {
        $jar = new JavaArchive($file);
        $jar->execute(
            $parameters
        );
    }

    private function runClass(string $file, array $parameters)
    {
        $class = new JavaClass(
            new JavaSingleClass(
                new FileReader($file)
            )
        );
        $class
            ->getInvoker()
            ->getStatic()
            ->getMethods()
            ->call(
                'main',
                $parameters
            );
    }
}
