<?php
namespace PHPJava\Compiler\Lang\Assembler;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Processors\AbstractProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;

/**
 * @method AbstractAssembler|AbstractProcessor setConstantPool(ConstantPool $constantPool)
 * @method ConstantPool getConstantPool()
 * @method AbstractAssembler|AbstractProcessor setNamespace(?array $namespace)
 * @method null|array getNamespace()
 * @method AbstractAssembler|AbstractProcessor setStore(Store $store)
 * @method Store getStore()
 * @method Operation getOperation()
 * @method AbstractAssembler|AbstractProcessor setOperation(Operation $operation)
 * @method AbstractAssembler|AbstractProcessor setConstantPoolFinder(ConstantPoolFinder $constantPoolFinder)
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method AbstractAssembler|AbstractProcessor setMethodAssembler(MethodAssembler $methodAssembler)
 * @method MethodAssembler getMethodAssembler()
 * @method AbstractAssembler|AbstractProcessor setClassAssembler(ClassAssembler $methodAssembler)
 * @method ClassAssembler getClassAssembler()
 */
interface ParameterServiceInterface
{
}
