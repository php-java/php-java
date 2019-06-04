<?php
namespace PHPJava\Core;

use PHPJava\Core\Extended\Classifiable;
use PHPJava\Core\Extended\ClassInvokable;
use PHPJava\Core\Extended\Debuggable;
use PHPJava\Core\Extended\Finalizable;
use PHPJava\Core\Extended\InvokerProvidable;
use PHPJava\Core\Extended\OptionExtendable;
use PHPJava\Core\JVM\PHPClassInvoker;
use PHPJava\Core\JVM\Stream\ReflectionClassReader;
use PHPJava\Core\Stream\Reader\PackageReader;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Maps\ClassAccessFlag;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Utilities\DebugTool;
use PHPJava\Utilities\Formatter;

class JavaSimpleClass implements JavaGenericClassInterface, JavaClassInterface
{
    use \PHPJava\Kernel\Core\ConstantPool;
    use Classifiable;
    use Debuggable;
    use OptionExtendable;
    use Finalizable;
    use ClassInvokable;
    use InvokerProvidable;

    /**
     * @var int[]
     */
    private $versions = [
        'minor' => null,
        'major' => null,
    ];

    /**
     * @var int
     */
    private $accessFlag = 0;

    /**
     * @var null|Utf8Info
     */
    private $className;

    /**
     * @var float
     */
    private $startTime = 0.0;

    /**
     * @var PackageReader
     */
    private $reader;

    private $superClass;

    /**
     * @throws ValidatorException
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     */
    public function __construct(ReaderInterface $reader, array $options = [])
    {
        $this->accessFlag = ClassAccessFlag::ACC_PUBLIC;
        $this->startTime = microtime(true);
        $this->reader = $reader;

        // options
        $this->options = $options;

        ClassResolver::add([
            [ClassResolver::RESOURCE_TYPE_FILE, dirname($reader->getFileName())],
            [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
        ]);

        // Debug tool
        $this->debugTool = new DebugTool(
            $reader->getJavaPathName(),
            $options
        );

        $this->invoker = new PHPClassInvoker(
            $this,
            $this->options
        );
    }

    public function __debugInfo()
    {
        return [
            'name' => $this->getClassName(),
        ];
    }

    public function getClassName(bool $shortName = false): string
    {
        return $this->reader->getFileName();
    }

    public function getPackageName(): ?string
    {
    }

    /**
     * @return PHPJava\Kernel\Structures\_Classes[]
     */
    public function getDefinedInnerClasses(): array
    {
        return [];
    }

    /**
     * @return PHPJava\Core\JVM\_FieldInfo[]
     */
    public function getDefinedFields(): array
    {
        /**
         * @var ReflectionClassReader $reader
         */
        $reader = $this->reader->getReader();
        return $reader->getFields();
    }

    /**
     * @return PHPJava\Core\JVM\_MethodInfo[]
     */
    public function getDefinedMethods(): array
    {
        /**
         * @var ReflectionClassReader $reader
         */
        $reader = $this->reader->getReader();
        return $reader->getMethods();
    }

    public function getDefinedExtendedClasses(): array
    {
        $className = $this->getClassName();
        return array_map(
            function ($value) {
                return Formatter::convertPHPNamespacesToJava(
                    $value
                );
            },
            array_merge(
                array_values(
                    class_parents($className)
                ),
                [$className]
            )
        );
    }

    public function getDefinedInterfaceClasses(): array
    {
        $className = $this->getClassName();
        return array_map(
            function ($value) {
                return Formatter::convertPHPNamespacesToJava(
                    $value
                );
            },
            array_values(
                class_implements($className)
            )
        );
    }

    /**
     * @return JavaClass
     */
    public function getSuperClass()
    {
        return $this->superClass;
    }

    /**
     * @return PHPJava\Core\JVM\_AttributeInfo[]
     */
    public function getAttributes(): array
    {
        return [];
    }
}
