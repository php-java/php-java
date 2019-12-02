<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Lang\Assembler\Store\Store;

/**
 * <Only for use from `OperationManageable` trait>.
 * @method AssemblerInterface setStore(Store $store)
 * @method Store getStore()
 */
interface AssemblerInterface
{
    /**
     * Must to set array or void.
     *
     * @return array|void
     */
    public function assemble();
}
