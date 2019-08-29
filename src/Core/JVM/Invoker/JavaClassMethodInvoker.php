<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\DebugTool;

class JavaClassMethodInvoker implements InvokerInterface
{
    use Extended\SpecialMethodCallable;
    use Extended\JavaMethodCallable;
    use Extended\JavaMethodFindable;
    use Extended\MethodListable;
    use Extended\ArgumentsStringifyable;
    use Extended\StaticConstructorInitializable;
    use Extended\JavaMethodAnnotationInjectable;
    use Extended\JavaMethodSpecifiable;

    /**
     * @var ClassInvokerInterface
     */
    private $javaClassInvoker;

    /**
     * @var _MethodInfo[]
     */
    private $methods = [];

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var DebugTool
     */
    private $debugTool;

    /**
     * @param _MethodInfo[] $methods
     */
    public function __construct(ClassInvokerInterface $javaClassInvoker, array $methods, array $options = [])
    {
        $this->javaClassInvoker = $javaClassInvoker;
        $this->methods = $methods;
        $this->options = $options;
        $this->debugTool = new DebugTool(
            str_replace('/', '.', $javaClassInvoker->getJavaClass()->getClassName()),
            $this->options
        );
    }

    public function isDynamic(): bool
    {
        return false;
    }

    public function has(string $name): bool
    {
        return count($this->methods[$name] ?? []) > 0;
    }
}
