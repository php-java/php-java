<?php
declare(strict_types=1);
namespace PHPJava\Kernel\Structures\Annotations;

interface AnnotationInterface
{
    public function execute(): void;
}
