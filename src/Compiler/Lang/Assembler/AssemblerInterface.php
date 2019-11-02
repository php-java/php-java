<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PhpParser\Node;

/**
 * <Only for use from `OperationManageable` trait>.
 * @method AssemblerInterface setStore(Store $store)
 * @method Store getStore()
 */
interface AssemblerInterface
{
    public function __construct(Node $parser);

    /**
     * Must to set array or void.
     *
     * @return array|void
     */
    public function assemble();
}
