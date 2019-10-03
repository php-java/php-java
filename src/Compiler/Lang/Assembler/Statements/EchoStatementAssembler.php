<?php
namespace PHPJava\Compiler\Lang\Assembler\Statements;

use PHPJava\Compiler\Builder\Generator\Operation\Operation;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\AbstractAssembler;
use PHPJava\Compiler\Lang\Assembler\AssemblerInterface;
use PHPJava\Compiler\Lang\Assembler\MethodAssembler;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Castable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\ClassConstractable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\StringConcatable;
use PHPJava\Compiler\Lang\Assembler\Traits\ExpressionParseable;
use PHPJava\Compiler\Lang\Assembler\Traits\OperationManageable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParentRecurseable;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Utilities\Formatter;

/**
 * @method MethodAssembler getParentCoordinator()
 * @property \PhpParser\Node\Stmt\Echo_ $node
 */
class EchoStatementAssembler extends AbstractAssembler implements StatementCoordinatorInterface, AssemblerInterface
{
    use ConstantPoolEnhanceable;
    use StringConcatable;
    use ExpressionParseable;
    use MethodCallable;
    use ClassConstractable;
    use OperationManageable;
    use ParentRecurseable;
    use Castable;

    public function assemble(): void
    {
        $this->getOperation()->add(
            OpCode::_getstatic,
            [
                [
                    Uint16::class,
                    $this->getConstantPoolFinder()->find(
                        FieldrefInfo::class,
                        Formatter::convertPHPNamespacesToJava(
                            \PHPJava\Packages\java\lang\System::class,
                            '/'
                        ),
                        'out',
                        Descriptor::factory()
                            ->addArgument(\PHPJava\Packages\java\io\PrintStream::class)
                            ->make()
                    ),
                ],
            ]
        );

        // Concat string.
        $stringConcatOperations = $this->assembleConcatStringOperation(
            ...$this->parseExpression(
                $this->node->exprs ?? [$this->node->expr]
            )
        );

        // Add arguments.
        foreach ($stringConcatOperations as $operation) {
            /**
             * @var Operation $operation
             */
            $this->getOperation()->add(
                $operation->getOpCode(),
                $operation->getOperands()
            );
        }

        $descriptor = Descriptor::factory()
            ->addArgument(\PHPJava\Packages\java\lang\String::class)
            ->setReturn(
                _Void::class
            )
            ->make();

        $this->getEnhancedConstantPool()
            ->addClass(\PHPJava\Packages\java\lang\System::class)
            ->addClass(\PHPJava\Packages\java\io\PrintStream::class);

        $this->getEnhancedConstantPool()
            ->addFieldref(
                \PHPJava\Packages\java\lang\System::class,
                'out',
                Descriptor::factory()
                    ->addArgument(\PHPJava\Packages\java\io\PrintStream::class)
                    ->make()
            );

        /**
         * @var Operation $call
         */
        $call = $this->assembleCallMethodOperations(
            \PHPJava\Packages\java\io\PrintStream::class,
            'print',
            $descriptor
        )[0];

        $this->getOperation()->add(
            $call->getOpCode(),
            $call->getOperands()
        );
    }
}
