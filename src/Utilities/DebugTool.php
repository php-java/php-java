<?php
namespace PHPJava\Utilities;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use PHPJava\Core\JVM\Parameters\Runtime;

class DebugTool
{
    private $logger;
    private $options = [];

    public function __construct(string $channelName, array $options = [])
    {
        $this->logger = new Logger($channelName);
        $this->options = $options;
        $stream = new StreamHandler(
            $this->options['log']['path'] ?? GlobalOptions::get('log.path') ?? Runtime::LOG_PATH,
            $this->options['log']['level'] ?? GlobalOptions::get('log.level') ?? Runtime::LOG_LEVEL
        );
        $stream->setFormatter(
            new LineFormatter(
                null,
                null,
                true,
                true
            )
        );
        $this->logger->pushHandler($stream);
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}
