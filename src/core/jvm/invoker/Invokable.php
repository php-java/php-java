<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClass;
use PHPJava\Core\JVM\Stream\BinaryReader;
use PHPJava\Exceptions\IllegalJavaClassException;
use PHPJava\Exceptions\UndefinedMethodException;
use PHPJava\Exceptions\UndefinedOpCodeException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\AttributeInterface;
use PHPJava\Kernel\Attributes\CodeAttribute;
use PHPJava\Kernel\Core\Accumulator;
use PHPJava\Kernel\Core\ConstantPool;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\OpCode\OpCodeInterface;
use PHPJava\Kernel\Structures\_MethodInfo;

trait Invokable
{
    private $javaClass;
    private $methods = [];

    public function __construct(JavaClass $javaClass, array $methods)
    {
        $this->javaClass = $javaClass;
        $this->methods = $methods;
    }

    public function __call($name, $arguments)
    {
        /**
         * @var _MethodInfo|null $method
         */
        $method = $this->methods[$name] ?? null;
        if ($method === null) {
            throw new UndefinedMethodException('Undefined ' . $name . ' method.');
        }

        $codeAttribute = $this->getCodeAttribute($method->getAttributes());

        if ($codeAttribute === null) {
            throw new IllegalJavaClassException('Java class does not having code attribution.');
        }

        $handle = fopen('php://memory', 'r+');
        fwrite($handle, $codeAttribute->getCode());
        rewind($handle);

        $reader = new BinaryReader($handle);

        $localStorage = [
            $this->javaClass,
            $arguments[0] ?? null,
            $arguments[1] ?? null,
            $arguments[2] ?? null,
        ];

        $opcodeMap = new OpCode();
        while ($reader->getOffset() < $codeAttribute->getOpCodeLength()) {
            $cursor = $reader->readUnsignedByte();
            $opcode = $opcodeMap->getName($cursor);
            if ($opcode === null) {
                throw new UndefinedOpCodeException('Undefined OpCode ' . sprintf('0x%X', $cursor) . '.');
            }
            $pointer = $reader->getOffset() - 1;

            $fullName = '\\PHPJava\\Kernel\\OpCode\\' . $opcode;

            /**
             * @var OpCodeInterface|Accumulator|ConstantPool $executor
             */
            $executor = new $fullName();
            $executor->setConstantPool($this->javaClass->getConstantPool());
            $executor->setParameters($this->javaClass, $reader, $localStorage, $pointer);
            $executor->execute();
            var_dump($executor);
            exit();
        }

        var_dump($codeAttribute);
        exit();
    }

    private function getCodeAttribute(array $attributes): ?CodeAttribute
    {
        foreach ($attributes as $attribute) {
            /**
             * @var AttributeInfo $attribute
             */
            if ($attribute->getAttributeData() instanceof CodeAttribute) {
                return $attribute->getAttributeData();
            }
        }
        return null;
    }
}
