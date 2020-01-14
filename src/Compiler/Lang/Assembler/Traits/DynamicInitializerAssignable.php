<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\Fields;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Exceptions\FinderException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Void_;
use PHPJava\Packages\java\lang\Object_;

/**
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @property Fields $fields
 * @property Methods $methods
 */
trait DynamicInitializerAssignable
{
    public function assignDynamicInitializer(string $className): self
    {
        // TODO: Implement to allows to pass arguments.
        $descriptor = Descriptor::factory()
            ->setReturn(Void_::class)
            ->make();

        try {
            // Assert method.
            $this->getEnhancedConstantPool()
                ->findMethod(
                    $className,
                    '<init>',
                    $descriptor
                )
                ->getResult(false);
        } catch (FinderException $e) {
            // Add <init> if not exists <init> on the ConstantPool.
            $this->getEnhancedConstantPool()
                ->addMethodref(
                    Object_::class,
                    '<init>',
                    $descriptor
                )
                ->addMethodref(
                    $className,
                    '<init>',
                    $descriptor
                );

            $dynamicInitializerOperations = [
                // Load `THIS`
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_aload_0
                ),

                // Call parent <init>
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_invokespecial,
                    Operand::factory(
                        Uint16::class,
                        $this->getEnhancedConstantPool()
                            ->findMethod(
                                Object_::class,
                                '<init>',
                                $descriptor
                            )
                    )
                ),
                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                    OpCode::_return
                ),
            ];

            $this->methods
                ->add(
                    (new Method(
                        (new MethodAccessFlag())->make(),
                        $className,
                        '<init>',
                        $descriptor
                    ))
                        ->setConstantPool($this->getConstantPool())
                        ->setConstantPoolFinder($this->getConstantPoolFinder())
                        ->setAttributes(
                            (new Attributes())
                                ->add(
                                    (new Code())
                                        ->setConstantPool($this->getConstantPool())
                                        ->setConstantPoolFinder($this->getConstantPoolFinder())
                                        ->setDefaultLocals(
                                            // This is the `THIS` parameter.
                                            1
                                        )
                                        ->setCode($dynamicInitializerOperations)
                                        ->beginPreparation()
                                )
                                ->toArray()
                        )
                );
        }

        return $this;
    }
}
