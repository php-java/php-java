<?php
namespace PHPJava\Core;

use PHPJava\Core\Extended\Classifiable;
use PHPJava\Core\Extended\ClassInvokable;
use PHPJava\Core\Extended\Debuggable;
use PHPJava\Core\Extended\Finalizable;
use PHPJava\Core\Extended\InvokerProvidable;
use PHPJava\Core\Extended\OptionExtendable;
use PHPJava\Core\JVM\AttributePool;
use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Core\JVM\ConstantPool;
use PHPJava\Core\JVM\FieldPool;
use PHPJava\Core\JVM\InterfacePool;
use PHPJava\Core\JVM\JavaClassInvoker;
use PHPJava\Core\JVM\MethodPool;
use PHPJava\Core\JVM\Validations\MagicByte;
use PHPJava\Core\Stream\Reader\ReaderInterface;
use PHPJava\Exceptions\ValidatorException;
use PHPJava\Kernel\Attributes\AttributeInfo;
use PHPJava\Kernel\Attributes\InnerClassesAttribute;
use PHPJava\Kernel\Resolvers\ClassResolver;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Kernel\Structures\InnerClasses;
use PHPJava\Kernel\Structures\Utf8Info;
use PHPJava\Utilities\DebugTool;
use PHPJava\Utilities\Formatter;

class JavaCompiledClass implements JavaGenericClassInterface, JavaClassInterface
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
     * @var null|Utf8Info
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

        ClassResolver::add([
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

        $this->superClass = JavaClass::load(
            $cpInfo[$cpInfo[$this->superClassIndex]->getClassIndex()]->getString(),
            $this->options
        );

        $this->debugTool->getLogger()->info(
            'Load super class: ' . $this->superClass->getClassName()
        );

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

        $this->debugTool->getLogger()->info('Load inner classes');

        $innerClasses = [];
        foreach ($this->attributePool as $entry) {
            /**
             * @var AttributeInfo $entry
             */
            if ($entry->getAttributeData() instanceof InnerClassesAttribute) {
                /**
                 * @var InnerClassesAttribute $attributeData
                 */
                $attributeData = $entry->getAttributeData();
                foreach ($attributeData->getClasses() as $innerClassInfo) {
                    /**
                     * @var InnerClasses $innerClassInfo
                     */
                    $info = $this->constantPool[$innerClassInfo->getInnerClassInfoIndex()];
                    $className = $this->constantPool[$info->getClassIndex()]->getString();

                    $innerClasses[] = [
                        JavaClass::deferred(
                            $className,
                            $this->options
                        ),
                        $innerClassInfo,
                        $this->constantPool,
                    ];
                }
            }
        }

        $this->innerClasses = $innerClasses;

        $this->debugTool->getLogger()->info('Loaded inner classes');

        $this->invoker = new JavaClassInvoker(
            $this,
            $options
        );

        $this->debugTool->getLogger()->info('End of Class');
    }

    public function __debugInfo()
    {
        $superClass = $this->getSuperClass();
        return [
            'JDKVersion' => SDKVersionResolver::resolve($this->versions['major'] . '.' . $this->versions['minor']),
            'name' => str_replace('/', '.', $this->getClassName()),
            'super' => str_replace('/', '.', $this->getSuperClass() ? $this->getSuperClass()->getClassName() : null),
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

    public function getDefinedExtendedClasses(): array
    {
        $parents = [];
        $currentClassObject = $this;
        while ($parentClass = $currentClassObject->getSuperClass()) {
            $parents[] = Formatter::convertPHPNamespacesToJava($parentClass->getClassName());
            $currentClassObject = $parentClass;
        }
        $parents[] = Formatter::convertPHPNamespacesToJava($this->getClassName());
        return $parents;
    }

    public function getDefinedInnerClasses(): array
    {
        return $this->innerClasses;
    }

    public function getDefinedInterfaceClasses(): array
    {
        return $this->interfacePool->getEntries();
    }

    public function getInvoker(): ClassInvokerInterface
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
