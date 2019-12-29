<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Emulator\Mnemonics;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Emulator\Accumulator;

interface OperationCodeInterface
{
    public function __construct(Operation $operation, Accumulator $accumulator, int $programCounter);

    public function execute(): void;
}
