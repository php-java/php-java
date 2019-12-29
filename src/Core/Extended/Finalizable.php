<?php
declare(strict_types=1);
namespace PHPJava\Core\Extended;

trait Finalizable
{
    public function __destruct()
    {
        if (!isset($this->debugTool)) {
            return;
        }
        $this->debugTool->getLogger()->info(
            'Spent time: ' . (microtime(true) - $this->startTime) . ' sec.'
        );
    }
}
