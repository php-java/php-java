<?php
namespace PHPJava\Core;

use PHPJava\Core\JVM\AttributePool;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\FieldPool;
use PHPJava\Core\JVM\InterfacePool;
use PHPJava\Core\JVM\MethodPool;
use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Core\Traits\Classifiable;
use PHPJava\Core\Traits\ClassInvokable;
use PHPJava\Core\Traits\Debuggable;
use PHPJava\Core\Traits\Finalizable;
use PHPJava\Core\Traits\OptionExtendable;
use PHPJava\Core\Traits\ParentClassExtendable;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Attributes\InnerClassesAttribute;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Kernel\Structures\_Utf8;
use PHPJava\Utilities\DebugTool;
use PHPJava\Utilities\Formatter;

class JavaClass implements JavaClassInterface
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
        $this->startTime = microtime(true);

        // Validate Java file
        if (!(new MagicByte($reader->getReader()->readUnsignedInt()))->isValid()) {
            throw new ValidatorException($reader . ' has broken or not Java class.');
        }

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

        $this->debugTool->getLogger()->info('Start class emulation');

        // read minor version
        $this->versions['minor'] = $reader->getReader()->readUnsignedShort();

        $this->debugTool->getLogger()->info('Minor version: ' . $this->versions['minor']);

        // read major version
        $this->versions['major'] = $reader->getReader()->readUnsignedShort();

        $this->debugTool->getLogger()->info('Major version: ' . $this->versions['major']);

        $this->debugTool->getLogger()->info('JDK version: ' . SDKVersionResolver::resolve($this->versions['major'] . '.' . $this->versions['minor']));

        // read constant pool size
        $this->constantPool = new ConstantPool(
            $reader,
            $reader->getReader()->readUnsignedShort()
        );

        $this->debugTool->getLogger()->info('Constant Pools: ' . count($this->constantPool));

        // read access flag
        $this->accessFlag = $reader->getReader()->readUnsignedShort();

        // read this class
        $this->thisClass = $reader->getReader()->readUnsignedShort();

        $this->className = $this->constantPool[$this->constantPool[$this->thisClass]->getClassIndex()];

        // read super class
        $this->superClassIndex = $reader->getReader()->readUnsignedShort();

        $cpInfo = $this->getConstantPool();
        [$resolvedType, $superClass] = $this->options['class_resolver']->resolve(
            $cpInfo[$cpInfo[$this->superClassIndex]->getClassIndex()]->getString(),
            $this
        );

        $this->debugTool->getLogger()->info(
            'Load super class: ' .
            ($superClass instanceof JavaClassInterface ? $superClass->getClassName() : $superClass)
        );

        switch ($resolvedType) {
            case ClassResolver::RESOLVED_TYPE_PACKAGES:
                $this->superClass = new $superClass();
                break;
            default:
                $this->superClass = $superClass;
                break;
        }

        // read interfaces
        $this->interfacePool = new InterfacePool(
            $reader,
            $reader->getReader()->readUnsignedShort(),
            $this->constantPool,
            $this->debugTool
        );

        $this->debugTool->getLogger()->info('Extracted interfaces: ' . count($this->interfacePool));

        // read fields
        $this->fieldPool = new FieldPool(
            $reader,
            $reader->getReader()->readUnsignedShort(),
            $this->constantPool,
            $this->debugTool
        );

        $this->debugTool->getLogger()->info('Extracted fields: ' . count($this->fieldPool));

        // read methods
        $this->methodPool = new MethodPool(
            $reader,
            $reader->getReader()->readUnsignedShort(),
            $this->constantPool,
            $this->debugTool
        );

        $this->debugTool->getLogger()->info('Extracted methods: ' . count($this->methodPool));

        // read Attributes
        $this->attributePool = new AttributePool(
            $reader,
            $reader->getReader()->readUnsignedShort(),
            $this->constantPool,
            $this->debugTool
        );

        $this->debugTool->getLogger()->info('Extracted attributes: ' . count($this->attributePool));

        $innerClasses = [];
        foreach ($this->attributePool as $entry) {
            if ($entry->getAttributeData() instanceof InnerClassesAttribute) {
                $innerClasses = array_merge(
                    $innerClasses,
                    $entry->getAttributeData()->getClasses()
                );
            }
        }

        // Add to class resolver
        foreach ($innerClasses as $innerClass) {
            $this->options['class_resolver']->add([
                [
                    ClassResolver::RESOURCE_TYPE_INNER_CLASS,
                    $innerClass,
                ],
            ]);
        }

        $this->debugTool->getLogger()->info('End of Class');

        $this->invoker = new JavaClassInvoker(
            $this,
            $options
        );
    }

    public function __debugInfo()
    {
        $superClass = $this->getSuperClass();
        return [
            'JDKVersion' => SDKVersionResolver::resolve($this->versions['major'] . '.' . $this->versions['minor']),
            'name' => str_replace('/', '.', $this->getClassName()),
            'super' => str_replace('/', '.', ($superClass instanceof JavaClassInterface ? $this->getSuperClass()->getClassName() : get_class($superClass))),
            'methods' => array_map(
                function (_MethodInfo $method) {
                    return Formatter::beatifyMethodFromConstantPool(
                        $method,
                        $this->constantPool
                    );
                },
                $this->methodPool->getEntries()
            ),
        ];
    }

    public function getClassName(bool $shortName = false): string
    {
        $className = $this->className->getString();
        if ($shortName === true) {
            $split = explode('$', $className);
            return $split[count($split) - 1];
        }
        return $className;
    }

    public function getPackageName(): ?string
    {
        $className = dirname($this->className->getString());
        if ($className === '') {
            return null;
        }
        return str_replace('/', '.', $className);
    }

    /**
     * @return PHPJava\Kernel\Structures\_Classes[]
     */
    public function getInnerClasses(): array
    {
        return $this->innerClasses;
    }

    /**
     * @return PHPJava\Core\JVM\_FieldInfo[]
     */
    public function getDefinedFields(): array
    {
        return $this->fieldPool->getEntries();
    }

    /**
     * @return PHPJava\Core\JVM\_MethodInfo[]
     */
    public function getDefinedMethods(): array
    {
        return $this->methodPool->getEntries();
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
        return $this->attributePool->getEntries();
    }
}
