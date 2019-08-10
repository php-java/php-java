<?php
namespace PHPJava\Core\JVM\Invoker;

use PHPJava\Core\JVM\ClassInvokerInterface;
use PHPJava\Core\JVM\Parameters\Runtime;
use PHPJava\Kernel\Structures\_MethodInfo;
use PHPJava\Utilities\DebugTool;

class PHPClassMethodInvoker implements InvokerInterface
{
    use Extended\PHPMethodCallable;
    use Extended\MethodListable;
    use Extended\StaticConstructorInitializable;
    use Extended\PHPMethodAnnotationAffectable;
    use Extended\PHPMethodFindable;
    use Extended\PHPMethodSpecifiable;

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
            ltrim(
                str_replace(
                    [Runtime::PHP_PACKAGES_NAMESPACE, '\\'],
                    ['', '.'],
                    $javaClassInvoker->getJavaClass()->getClassName()
                ),
                '.'
            ),
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
