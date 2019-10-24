<?php
namespace PHPJava\Compiler\Lang\Assembler\Processors;

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Lang\Assembler\Processors\Traits\ConstLoadableFromNode;
use PHPJava\Compiler\Lang\Assembler\Processors\Traits\MagicConstLoadableFromNode;
use PHPJava\Compiler\Lang\Assembler\Processors\Traits\OperationCalculatableFromNode;
use PHPJava\Compiler\Lang\Assembler\Processors\Traits\StringLoadableFromNode;
use PHPJava\Compiler\Lang\Assembler\Processors\Traits\VariableLoadableFromNode;
use PHPJava\Compiler\Lang\Assembler\Traits\Calculatable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\Conditionable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodCallable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;
use PHPJava\Compiler\Lang\Assembler\Traits\ParentRecurseable;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\MnemonicResolver;
use PHPJava\Kernel\Types\_Int;
use PHPJava\Packages\java\lang\Integer;

class ExpressionProcessor extends AbstractProcessor implements ProcessorInterface
{
    use OperationCalculatableFromNode;
    use ParentRecurseable;
    use ConstLoadableFromNode;
    use MagicConstLoadableFromNode;
    use StringLoadableFromNode;
    use VariableLoadableFromNode;
    use NumberLoadable;
    use MethodCallable;
    use Calculatable;
    use Conditionable;

    public function execute(array $expressions, ?callable $callback = null): array
    {
        $operations = [];
        $classType = null;
        foreach ($expressions as $expression) {
            $nodeType = get_class($expression);
            switch ($nodeType) {
                case \PhpParser\Node\Scalar\String_::class:
                    $operations = $this
                        ->assembleLoadStringFromNode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Scalar\LNumber::class:
                    $operations = $this->assembleLoadNumber(
                        $expression->value,
                        $classType
                    );
                    break;
                case \PhpParser\Node\Expr\Variable::class:
                    $operations = $this
                        ->assembleLoadVariableFromNode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Expr\ConstFetch::class:
                    $operations = $this
                        ->assembleLoadConstFromNode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Scalar\MagicConst\Class_::class: // __CLASS__
                case \PhpParser\Node\Scalar\MagicConst\Method::class: // __METHOD__
                case \PhpParser\Node\Scalar\MagicConst\Namespace_::class: // __NAMESPACE__
                case \PhpParser\Node\Scalar\MagicConst\Dir::class: // __DIR__
                case \PhpParser\Node\Scalar\MagicConst\File::class: // __FILE__
                case \PhpParser\Node\Scalar\MagicConst\Function_::class: // __FUNCTION__
                case \PhpParser\Node\Scalar\MagicConst\Trait_::class: // __TRAIT__
                case \PhpParser\Node\Scalar\MagicConst\Line::class: // __LINE__
                    $operations = $this
                        ->assembleLoadMagicConstFromNode(
                            $expression,
                            $classType
                        );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Concat::class:
                    array_push(
                        $operations,
                        ...$this->execute(
                            [
                                // Left operator.
                                $expression->left,
                            ],
                            $callback
                        ),
                        ...$this->execute(
                            [
                                // Right operator.
                                $expression->right,
                            ],
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\BooleanAnd::class:
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_iand,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Mul::class:
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_imul,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Div::class:
                    // TODO: Add float converter
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_idiv,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Minus::class:
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_isub,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Plus::class:
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_iadd,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Mod::class:
                    array_push(
                        $operations,
                        ...$this->assembleCalculateOperationFromNode(
                            $expression->left,
                            $expression->right,
                            OpCode::_irem,
                            $callback
                        )
                    );
                    break;
                case \PhpParser\Node\Expr\BinaryOp\Identical::class:
                    /**
                     * @var \PhpParser\Node\Expr\BinaryOp\Identical $conditionNode
                     */
                    // Left operator.
                    $leftOperands = $this->execute(
                        [$expression->left],
                        $callback
                    );

                    // Right operator.
                    $rightOperands = $this->execute(
                        [$expression->right],
                        $callback
                    );

                    $lastLeftOperand = array_slice($leftOperands, -1, 1)[0];
                    $lastRightOperand = array_slice($rightOperands, -1, 1)[0];
                    switch ([MnemonicResolver::resolveTypeByOpCode($lastLeftOperand), MnemonicResolver::resolveTypeByOpCode($lastRightOperand)]) {
                        case [_Int::class, _Int::class]:
                            array_push(
                                $operations,
                                ...$leftOperands,
                                ...$rightOperands
                            );

                            array_push(
                                $operations,
                                ...$this->assembleStaticCallMethodOperations(
                                    Integer::class,
                                    'compare',
                                    Descriptor::factory()
                                        ->addArgument(_Int::class)
                                        ->addArgument(_Int::class)
                                        ->setReturn(_Int::class)
                                        ->make()
                                )
                            );

                            array_push(
                                $operations,
                                ...$this->assembleConditions(
                                    [
                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                            OpCode::_iconst_1
                                        ),
                                    ],
                                    [
                                        \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                            OpCode::_iconst_0
                                        ),
                                    ]
                                )
                            );
                            break;
                        default:
                            throw new AssembleStructureException(
                                'Unsupported operation type'
                            );
                    }
                    break;
                default:
                    throw new AssembleStructureException(
                        'Unsupported expression: ' . get_class($expression)
                    );
            }

            if ($callback !== null) {
                $callback(
                    $operations,
                    $nodeType,
                    $classType
                );
            }
        }
        return $operations;
    }
}
