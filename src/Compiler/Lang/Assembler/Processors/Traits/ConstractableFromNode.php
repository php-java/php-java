<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Processors\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\ReferenceCounter;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\Void_;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ReferenceCounter getReferenceCounter()
 */
trait ConstractableFromNode
{
    /**
     * @throws AssembleStructureException
     */
    private function assembleConstructorFromNode(Node $expression, ?string &$classType): array
    {
        if (!($expression->class instanceof Node\Name)) {
            throw new AssembleStructureException(
                'Unsupported class node type: ' . get_class($expression->class)
            );
        }

        $classPath = implode(
            '\\',
            $expression->class->parts
        );

        $this->getReferenceCounter()
            ->makeHashMap(
                $classPath,
                ReferenceCounter::CLASS_HASH_MAP,
                $this->getOperation()
                    ->getCurrentIndex()
            );

        $classType = $classPath;

        $operations = [];

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_new,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findClass($classPath)
            ),
        );

        // Dup from operand stack
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_dup
        );

        // TODO: Implement to allows to pass arguments.
        $descriptor = Descriptor::factory()
            ->setReturn(Void_::class);

        // invoke special constructor for <init>
        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_invokespecial,
            Operand::factory(
                Uint16::class,
                $this->getEnhancedConstantPool()
                    ->findMethod(
                        $classPath,
                        '<init>',
                        $descriptor
                            ->make()
                    )
            ),
        );

        return $operations;
    }
}
