<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\AttributePool;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\FieldPool;
use PHPJava\Core\JVM\InterfacePool;
use PHPJava\Core\JVM\MethodPool;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Core\Traits\Classifiable;
use PHPJava\Core\Traits\ClassInvokable;
use PHPJava\Core\Traits\Debuggable;
use PHPJava\Core\Traits\Finalizable;
use PHPJava\Core\Traits\OptionExtendable;
use PHPJava\Core\Traits\ParentClassExtendable;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\DebugTool;

class JavaPackageClass implements JavaClassInterface
{
    use \PHPJava\Kernel\Core\ConstantPool;
    use ParentClassExtendable;
    use Classifiable;
    use Debuggable;
    use OptionExtendable;
    use Finalizable;
    use ClassInvokable;

    /**
     * @var int[]
     */
    private $versions = [
        'minor' => null,
        'major' => null,
    ];

    /**
     * @var ConstantPool
     */
    private $constantPool;

    /**
     * @var InterfacePool
     */
    private $interfacePool;

    /**
     * @var FieldPool
     */
    private $fieldPool;

    /**
     * @var MethodPool
     */
    private $methodPool;

    /**
     * @var AttributePool
     */
    private $attributePool;

    /**
     * @var int
     */
    private $accessFlag = 0;

    /**
     * @var int
     */
    private $thisClass = 0;

    /**
     * @var int
     */
    private $superClassIndex = 0;

    /**
     * @var null|_Utf8
     */
    private $className;

    /**
     * @var JavaClassInvoker
     */
    private $invoker;

    /**
     * @var PHPJava\Kernel\Structures\_Classes[]
     */
    private $innerClasses = [];

    /**
     * @var JavaClass
     */
    private $parentClass;

    /**
     * @var mixed
     */
    private $superClass;

    /**
     * @var float
     */
    private $startTime = 0.0;

    /**
     * @throws ValidatorException
     * @throws \PHPJava\Exceptions\ReadEntryException
     * @throws \PHPJava\Exceptions\UnknownVersionException
     */
    public function __construct(ReaderInterface $reader, array $options = [])
    {
        // options
        $this->options = $options;

        if (!(($this->options['class_resolver'] ?? null) instanceof ClassResolver)) {
            $this->options['class_resolver'] = new ClassResolver(
                $this->options
            );
        }

        $this->options['class_resolver']->add([
            [ClassResolver::RESOURCE_TYPE_FILE, dirname($reader->getFileName())],
            [ClassResolver::RESOURCE_TYPE_FILE, getcwd()],
        ]);

        // Debug tool
        $this->debugTool = new DebugTool(
            $reader->getJavaPathName(),
            $options
        );
    }

    public function __debugInfo()
    {
        return [];
    }

    public function getClassName(bool $shortName = false): string
    {
    }

    public function getPackageName(): ?string
    {
    }

    /**
     * @return PHPJava\Kernel\Structures\_Classes[]
     */
    public function getInnerClasses(): array
    {
        return [];
    }

    /**
     * @return PHPJava\Core\JVM\_FieldInfo[]
     */
    public function getDefinedFields(): array
    {
        return [];
    }

    /**
     * @return PHPJava\Core\JVM\_MethodInfo[]
     */
    public function getDefinedMethods(): array
    {
        return [];
    }

    public function getInvoker(): JavaClassInvoker
    {
        return $this->invoker;
    }

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
