<?php
namespace PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation;

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Lang\Assembler\Processors\ExpressionProcessor;
use PHPJava\Compiler\Lang\Assembler\Store\Store;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Utilities\ArrayTool;
use PHPJava\Utilities\Formatter;

/**
 * @method Store getStore()
 * @method Operation getOperation()
 * @method ConstantPoolFinder getConstantPoolFinder()
 * @method ConstantPoolEnhancer getEnhancedConstantPool()
 */
trait Outputable
{
    public function assembleOutput(array $expressions): array
    {
        $operations = [];

        $operations[] = \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
            OpCode::_getstatic,
            Operand::factory(
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
                )
            )
        );

        // Concat string.
        $stringConcatOperations = $this->assembleConcatStringOperation(
            ...$this->bindParameters(ExpressionProcessor::factory())
                ->execute(
                    $expressions
                )
        );

        ArrayTool::concat(
            $operations,
            ...$stringConcatOperations
        );

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

        $operations[] = $this->assembleCallMethodOperations(
            \PHPJava\Packages\java\io\PrintStream::class,
            'print',
            $descriptor
        )[0];

        return $operations;
    }
}
