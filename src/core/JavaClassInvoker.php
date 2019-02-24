<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\Field\FieldInterface;
use PHPJava\Core\JVM\Invoker\Invokable;
use PHPJava\Core\JVM\Invoker\InvokerInterface;
use PHPJava\Kernel\Maps\AccessFlag;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Structures\_FieldInfo;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\Formatter;

class JavaClassInvoker
{
    /**
     * @var JavaClass
     */
    private $javaClass;

    private $hiddenMethods = [];
    private $dynamicMethods = [];
    private $staticMethods = [];

    private $hiddenFields = [];
    private $dynamicFields = [];
    private $staticFields = [];

    private $debugTraces = [];

    public function __construct(JavaClass $javaClass)
    {
        $this->javaClass = $javaClass;
        $cpInfo = $javaClass->getConstantPool()->getEntries();

        foreach ($javaClass->getMethods() as $methodInfo) {
            /**
             * @var _MethodInfo $methodInfo
             */
            $methodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if ($methodInfo->getAccessFlag() === 0 || ($methodInfo->getAccessFlag() & AccessFlag::_Public) !== 0) {
                $this->dynamicMethods[$methodName] = $methodInfo;
            } elseif (($methodInfo->getAccessFlag() & AccessFlag::_Static) !== 0) {
                $this->staticMethods[$methodName] = $methodInfo;
            }
        }

        foreach ($javaClass->getFields() as $fieldInfo) {
            /**
             * @var _FieldInfo $fieldInfo
             */
            $fieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if ($fieldInfo->getAccessFlag() === 0) {
                $this->dynamicFields[$fieldName] = $fieldInfo;
            } elseif (($fieldInfo->getAccessFlag() & AccessFlag::_Static) !== 0) {
                $this->staticFields[$fieldName] = $fieldInfo;
            }
        }

        // call <clinit>
        if (isset($this->staticMethods['<clinit>'])) {
            $this->getStaticMethods()->{'<clinit>'}();
        }
    }

    public function getJavaClass(): JavaClass
    {
        return $this->javaClass;
    }

    public function getDynamicMethods(): InvokerInterface
    {
        return new JVM\Invoker\DynamicMethodInvoker(
            $this,
            $this->dynamicMethods,
            $this->debugTraces
        );
    }

    public function getStaticMethods(): InvokerInterface
    {
        return new JVM\Invoker\StaticMethodInvoker(
            $this,
            $this->staticMethods,
            $this->debugTraces
        );
    }

    public function getDynamicFields(): FieldInterface
    {
        return new JVM\Field\DynamicField(
            $this,
            $this->dynamicFields
        );
    }

    public function getStaticFields(): JVM\Field\StaticField
    {
        return new JVM\Field\StaticField();
    }

    public function debug(): void
    {
        $cpInfo = $this->getJavaClass()->getConstantPool()->getEntries();

        $methodAccessFlags = $this->debugTraces['method']->getAccessFlag();
        $accessFlags = [];
        $accessFlag = new AccessFlag();
        foreach ($accessFlag->getValues() as $value) {
            if (($methodAccessFlags & $value) !== 0) {
                $accessFlags[] = strtolower(str_replace('_', '', $accessFlag->getName($value)));
            }
        }

        $methodName = $cpInfo[$this->debugTraces['method']->getNameIndex()]->getString();
        $descriptor = Formatter::parseSignature($cpInfo[$this->debugTraces['method']->getDescriptorIndex()]->getString());
        $formattedArguments = implode(
            ', ',
            array_map(
                function ($argument) {
                    $arrayBrackets = str_repeat('[]', $argument['deep_array']);
                    if ($argument['type'] === 'class') {
                        return $argument['class_name'] . $arrayBrackets;
                    }
                    return $argument['type'] . $arrayBrackets;
                },
                $descriptor['arguments']
            )
        );


        $type = $descriptor[0]['type'];
        if ($type === 'class') {
            $type = $descriptor[0]['class_name'];
        }

        $methodAccessibility = implode(' ', $accessFlags);

        printf("[method]\n");
        printf(ltrim("$methodAccessibility $type $methodName($formattedArguments)\n", ' '));
        printf("\n");
        printf("[code]\n");
        printf(
            "%s\n",
            implode(
                "\n",
                array_map(
                    function ($code) {
                        return '<0x' . implode('> <0x', $code) . '>';
                    },
                    array_chunk(str_split(bin2hex($this->debugTraces['raw_code']), 2), 20)
                )
            )
        );
        printf("\n");
        printf("[executed]\n");

        printf(
            "% 8s | %-6.6s | %-20.20s | %-10.10s | %-15.15s\n",
            "PC",
            "OPCODE",
            "MNEMONIC",
            "OPERANDS",
            "LOCAL STORAGE"
        );

        $line = sprintf(
            "%8s+%8s+%22s+%12s+%17s\n",
            "---------",
            "--------",
            "----------------------",
            "------------",
            "-----------------"
        );

        printf($line);

        // [$mnemonic, $localStorage, $stacks, $pointer]
        foreach ($this->debugTraces['executed'] as [$opcode, $mnemonic, $localStorage, $stacks, $pointer]) {
            printf(
                "% 8s | 0x%02X   | %-20.20s | %-10.10s | %-15.15s\n",
                (int) $pointer,
                $opcode,
                // Remove prefix
                ltrim($mnemonic, '_'),
                count($stacks),
                count($localStorage)
            );
        }

        printf($line);
    }
}
