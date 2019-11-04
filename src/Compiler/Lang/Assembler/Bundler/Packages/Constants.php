<?php

namespace PHPJava\Compiler\Lang\Assembler\Bundler\Packages;

use PHPJava\Compiler\Lang\Assembler\Bundler\PackageBundlerInterface;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\ConstantPoolEnhanceable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\MethodConstantValueReturnable;
use PHPJava\Compiler\Lang\Assembler\Traits\Enhancer\Operation\NumberLoadable;

class Constants extends AbstractPackageBundler implements PackageBundlerInterface
{
    use ConstantPoolEnhanceable;
    use MethodConstantValueReturnable;
    use NumberLoadable;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_VERSION = PHP_VERSION;

    /**
     * @var \PHPJava\Kernel\Types\_Int
     * @export
     */
    const PHP_MAJOR_VERSION = PHP_MAJOR_VERSION;

    /**
     * @var \PHPJava\Kernel\Types\_Int
     * @export
     */
    const PHP_MINOR_VERSION = PHP_MINOR_VERSION;

    /**
     * @var \PHPJava\Kernel\Types\_Int
     * @export
     */
    const PHP_RELEASE_VERSION = PHP_RELEASE_VERSION;

    /**
     * @var \PHPJava\Kernel\Types\_Int
     * @export
     */
    const PHP_VERSION_ID = PHP_VERSION_ID;

    /**
     * @var
     * @export
     */
    const PHP_EXTRA_VERSION = PHP_EXTRA_VERSION;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_EOL = PHP_EOL;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_INT_MAX = PHP_INT_MAX;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_INT_MIN = PHP_INT_MIN;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_FLOAT_EPSILON = PHP_FLOAT_EPSILON;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_FLOAT_MIN = PHP_FLOAT_MIN;

    /**
     * @var \PHPJava\Packages\java\lang\_String
     * @export
     */
    const PHP_FLOAT_MAX = PHP_FLOAT_MAX;
}
