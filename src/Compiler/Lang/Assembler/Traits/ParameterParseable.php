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
    public function parseParameterFromNode(Node $node, array $defaultParameters = []): array
    {
        $paramOrdersTable = [];

        foreach ($node->params as $index => $param) {
            /**
             * @var \PhpParser\Node\Param $param
             */
            $paramOrdersTable[$param->var->name] = $index;
        }

        $parameters = $defaultParameters;
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
                    'type' => Formatter::convertStringifiedPrimitiveTypeToKernelType(
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

        $parameters = array_filter(
            $parameters,
            static function ($parameter, $name) {
                if ($parameter === null) {
                    throw new AssembleStructureException(
                        'Parameter length are mismatch or $' . $name . ' is not defined parameter type.'
                    );
                }
                return true;
            },
            ARRAY_FILTER_USE_BOTH
        );

        uasort(
            $parameters,
            static function ($a, $b) {
                return $a['order'] <=> $b['order'];
            }
        );

        return $parameters;
    }
}
