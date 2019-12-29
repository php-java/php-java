<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Frames;

interface FrameInterface
{
    public function execute(): void;
}
