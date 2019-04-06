<?php
namespace PHPJava\Utilities;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPJava\Core\JVM\Parameters\Runtime;

class DebugTool
{
    private $logger;

    public function __construct(string $channelName, array $options = [])
    {
        $this->logger = new Logger($channelName);
        $stream = new StreamHandler(
            $this->options['log']['path'] ?? Runtime::LOG_PATH,
            $this->options['log']['level'] ?? Runtime::LOG_LEVEL
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