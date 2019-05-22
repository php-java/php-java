<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JavaClassInvoker;
use PHPJava\Core\JVM\JavaClassInvokerInterface;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\DebugTool;

class Invoker implements InvokerInterface
{
    use Extended\SpecialMethodCallable;
    use Extended\MethodCallable;
    use Extended\MethodFindable;
    use Extended\MethodListable;
    use Extended\ArgumentsStringifyable;

    /**
     * @var JavaClassInvoker
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
    public function __construct(JavaClassInvokerInterface $javaClassInvoker, array $methods, array $options = [])
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
