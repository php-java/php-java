<?php
declare(strict_types=1);
namespace PHPJava\Compiler\Lang\Assembler\Traits;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Compiler\Lang\Stream\StreamReaderInterface;
use PHPJava\Exceptions\AssembleStructureException;
use PHPJava\Utilities\Formatter;
use PhpParser\Node;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method StreamReaderInterface getStreamReader()
 */
trait ParameterParseable
{
    public function parseParameterFromNode(Node $node): array
    {
        // Get parameters
        $parameters = [
            // variable name => literal type
        ];
        foreach ($node->getParams() as $parameter) {
            /**
             * @var \PhpParser\Node\Param $parameter
             */
            $parameters[$parameter->var->name] = $parameter->type;
        }

        $paramOrdersTable = [];

        foreach ($node->params as $index => $param) {
            /**
             * @var \PhpParser\Node\Param $param
             */
            $paramOrdersTable[$param->var->name] = $index;
        }

        foreach (($node->getAttribute('comments') ?? []) as $commentAttribute) {
            /**
             * @var \PhpParser\Comment\Doc $commentAttribute
             */
            $documentBlock = \phpDocumentor\Reflection\DocBlockFactory::createInstance()
                ->create($commentAttribute->getText());

            foreach ($documentBlock->getTagsByName('param') as $documentParameter) {
                /**
                 * @var \phpDocumentor\Reflection\DocBlock\Tags\Param $documentParameter
                 * @var null|\phpDocumentor\Reflection\Types\Object_ $typeObject
                 */
                $typeObject = $documentParameter
                    ->getType();
                $stringifiedType = (string) $typeObject;

                $type = $stringifiedType;

                if ($typeObject instanceof \phpDocumentor\Reflection\Types\Array_) {
                    $typeObject = $typeObject
                        ->getValueType();
                }

                if ($typeObject instanceof \phpDocumentor\Reflection\Types\Object_) {
                    $fullPath = (string) $typeObject->getFqsen();

                    $type = $typeObject
                        ->getFqsen()
                        ->getName();

                    // FIXED: phpDocumentor has an omitted path completion problem
                    // This statement fix it.
                    if ($fullPath !== '\\' . ((string) $type)) {
                        $type = $fullPath;
                    }
                }

                $variableName = $documentParameter->getVariableName();

                if (!isset($paramOrdersTable[$variableName])) {
                    throw new AssembleStructureException(
                        'Parameter is invalid $' . $variableName
                    );
                }

                // Update variable detail.
                $parameters[$variableName] = [
                    'type' => $this->convertWithImport(
                        Formatter::convertPHPPrimitiveTypeToJavaType(
                            str_replace(
                                '[]',
                                '',
                                $type
                            )
                        )
                    ),
                    'dimensions_of_array' => substr_count(
                        $stringifiedType,
                        '[]'
                    ),
                    'order' => $paramOrdersTable[$variableName],
                ];

                $definedType = $parameters[$variableName]['type'];
                $definedTypeDimensionsOfArray = $parameters[$variableName]['dimensions_of_array'];
            }
        }

        foreach ($parameters as $variableName => $parameter) {
            if ($parameter === null) {
                throw new AssembleStructureException(
                    'Parameter length are mismatch or $' . $variableName . ' is not defined parameter type.'
                );
            }
            if ($parameter instanceof Node\Identifier) {
                $type = $parameter->name;
                $parameters[$variableName] = [
                    'type' => $this->convertWithImport(
                        Formatter::convertPHPPrimitiveTypeToJavaType($type)
                    ),
                    'dimensions_of_array' => 0,
                    'order' => $paramOrdersTable[$variableName],
                ];
            }
        }

        uasort(
            $parameters,
            static function ($a, $b) {
                return $a['order'] <=> $b['order'];
            }
        );

        return $parameters;
    }
}
