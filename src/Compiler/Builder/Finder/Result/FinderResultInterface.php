<?php

namespace PHPJava\Compiler\Builder\Finder\Result;

interface FinderResultInterface
{
    public function getResult();

    public function getArguments(): array;
}
