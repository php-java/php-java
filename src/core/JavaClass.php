<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\ActiveAttributes;
use PHPJava\Core\JVM\ActiveFields;
use PHPJava\Core\JVM\ActiveInterface;
use PHPJava\Core\JVM\ActiveMethods;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Maps\AccessFlag;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\Formatter;

class JavaClass
{
    use \PHPJava\Kernel\Core\ConstantPool;

    private $versions = [
        'minor' => null,
        'major' => null,
    ];

    /**
     * @var ConstantPool
     */
    private $constantPool;

    /**
     * @var ActiveInterface
     */
    private $activeInterfaces;

    /**
     * @var ActiveFields
     */
    private $activeFields;

    /**
     * @var ActiveMethods
     */
    private $activeMethods;

    /**
     * @var ActiveAttributes
     */
    private $activeAttributes;

    private $accessFlag = 0;
    private $thisClass = 0;
    private $superClass = 0;

    /**
     * @var _Utf8|null
     */
    private $className = null;

    private $debugTraces = [];

    /**
     * JavaClass constructor.
     * @param JavaClassReader $reader
     * @throws ValidatorException
     * @throws \PHPJava\Exceptions\ReadEntryException
     */
    public function __construct(JavaClassReader $reader)
    {
        // Validate Java file
        if (!(new MagicByte($reader->getBinaryReader()->readUnsignedInt()))->isValid()) {
            throw new ValidatorException($reader . ' has broken or not Java class.');
        }

        // read minor version
        $this->versions['minor'] = $reader->getBinaryReader()->readUnsignedShort();

        // read major version
        $this->versions['major'] = $reader->getBinaryReader()->readUnsignedShort();

        // read constant pool size
        $this->constantPool = new ConstantPool(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort()
        );

        // read access flag
        $this->accessFlag = $reader->getBinaryReader()->readUnsignedShort();

        // read this class
        $this->thisClass = $reader->getBinaryReader()->readUnsignedShort();

        $constantPoolEntries = $this->constantPool->getEntries();
        $this->className = $constantPoolEntries[$constantPoolEntries[$this->thisClass]->getClassIndex()];

        // read super class
        $this->superClass = $reader->getBinaryReader()->readUnsignedShort();

        // read interfaces
        $this->activeInterfaces = new ActiveInterface(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );

        // read fields
        $this->activeFields = new ActiveFields(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );

        // read methods
        $this->activeMethods = new ActiveMethods(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );

        // read attributes
        $this->activeAttributes = new ActiveAttributes(
            $reader,
            $reader->getBinaryReader()->readUnsignedShort(),
            $this->constantPool
        );
    }

    public function getClassName(): string
    {
        return $this->className->getString();
    }

    public function getFields(): array
    {
        return $this->activeFields->getEntries();
    }

    public function getMethods(): array
    {
        return $this->activeMethods->getEntries();
    }

    public function getInvoker(): JavaClassInvoker
    {
        return new JavaClassInvoker($this);
    }

    public function appendDebug($log)
    {
        $this->debugTraces[] = $log;
        return $this;
    }

    public function debug(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();
        foreach ($this->debugTraces as $debugTraces) {
            $methodAccessFlags = $debugTraces['method']->getAccessFlag();
            $accessFlags = [];
            $accessFlag = new AccessFlag();
            foreach ($accessFlag->getValues() as $value) {
                if (($methodAccessFlags & $value) !== 0) {
                    $accessFlags[] = strtolower(str_replace('_', '', $accessFlag->getName($value)));
                }
            }

            $methodName = $cpInfo[$debugTraces['method']->getNameIndex()]->getString();
            $descriptor = Formatter::parseSignature($cpInfo[$debugTraces['method']->getDescriptorIndex()]->getString());
            $formattedArguments = str_replace(
                '/',
                '.',
                implode(
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
                )
            );


            $type = $descriptor[0]['type'];
            if ($type === 'class') {
                $type = $descriptor[0]['class_name'];
            }

            $type = str_replace('/', '.', $type);

            $methodAccessibility = implode(' ', $accessFlags);

            printf("[method]\n");
            printf(ltrim("$methodAccessibility $type $methodName($formattedArguments)\n", ' '));
            printf("\n");
            printf("[code]\n");

            $codeCounter = 0;
            printf(
                "%s\n",
                implode(
                    "\n",
                    array_map(
                        function ($codes) use (&$codeCounter, &$debugTraces) {
                            return implode(
                                ' ',
                                array_map(
                                    function ($code) use (&$codeCounter, &$debugTraces) {
                                        $isMnemonic = in_array($codeCounter, $debugTraces['mnemonic_indexes']);
                                        $codeCounter++;
                                        return ($isMnemonic ? "\e[1m\e[35m" : "") . "<0x{$code}>" . ($isMnemonic ? "\e[m" : "");
                                    },
                                    $codes
                                )
                            );
                        },
                        array_chunk(str_split(bin2hex($debugTraces['raw_code']), 2), 20)
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

            foreach ($debugTraces['executed'] as [$opcode, $mnemonic, $localStorage, $stacks, $pointer]) {
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
            printf("\n");
        }
    }
}
