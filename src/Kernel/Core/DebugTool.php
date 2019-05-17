<?php
namespace PHPJava\Kernel\Core;

trait DebugTool
{
    /**
     * @var \PHPJava\Utilities\DebugTool
     */
    private $debugTool;

    public function setDebugTool(\PHPJava\Utilities\DebugTool $debugTool)
    {
        $this->debugTool = $debugTool;
        return $this;
    }

    public function getDebugTool(): \PHPJava\Utilities\DebugTool
    {
        return $this->debugTool;
    }
}
