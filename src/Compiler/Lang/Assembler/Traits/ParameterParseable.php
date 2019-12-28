<?php
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
                 */
                $type = (string) $documentParameter->getType();

                $variableName = $documentParameter->getVariableName();

                if (!isset($paramOrdersTable[$variableName])) {
                    throw new AssembleStructureException(
                        'Parameter is invalid $' . $variableName
                    );
                }

                // Update variable detail.
                $parameters[$variableName] = [
                    'type' => Formatter::convertPHPPrimitiveTypeToJavaType(
                        str_replace(
                            '[]',
                            '',
                            ltrim(
                                $type,
                                '\\'
                            )
                        )
                    ),
                    'dimensions_of_array' => substr_count($type, '[]'),
                    'order' => $paramOrdersTable[$variableName],
                ];

                $definedType = $parameters[$variableName]['type'];
                $definedTypeDimensionsOfArray = $parameters[$variableName]['dimensions_of_array'];

                if (!\PHPJava\Kernel\Resolvers\TypeResolver::isPrimitive($definedType)) {
                    $className = Formatter::buildSignature(
                        $definedType,
                        $definedTypeDimensionsOfArray
                    );

                    $this->getEnhancedConstantPool()
                        ->addClass($className);
                }
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
                    'type' => Formatter::convertPHPPrimitiveTypeToJavaType($type),
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
