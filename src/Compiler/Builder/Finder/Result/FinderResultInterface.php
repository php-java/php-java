<?php

namespace PHPJava\Compiler\Builder\Finder\Result;

interface FinderResultInterface
{
    public function getResult(bool $enableCache = true);

    public function getArguments(): array;
}
