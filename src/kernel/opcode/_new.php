<?php
namespace PHPJava\Kernel\OpCode;

use \PHPJava\Exceptions\NotImplementedException;
use PHPJava\Utilities\BinaryTool;

final class _new implements OpCodeInterface
{
    use \PHPJava\Kernel\Core\Accumulator;
    use \PHPJava\Kernel\Core\ConstantPool;

    public function execute(): void
    {
        $cpInfo = $this->getConstantPool()->getEntries();

        $class = $cpInfo[$this->getByteCodeStream()->readUnsignedShort()];

        $className = $cpInfo[$class->getClassIndex()]->getString();

        if (isset($this->getInvoker()->getClass()->getManipulator()->$className) &&
            $this->getInvoker()->getClass()->getManipulator()->$className !== null) {

            // call constructor
            call_user_func_array(
                array(
                    $this->getInvoker()->getClass()->getManipulator()->$className->getMethodInvoker(),
                    '<init>'
                ),
                array()
            );

            $this->pushStack($this->getInvoker()->getClass()->getManipulator()->$className);
        } else {
            if (($this->getInvoker()->getClass()->getManipulator() !== null &&
                    $this->getInvoker()->getClass()->getManipulator()->$className->getArchive() !== null &&
                    $this->getInvoker()->getClass()->getManipulator()->$className->getArchive()->hasClass($className)) ||
                    is_file(dirname($this->getInvoker()->getClass()->getClassFile()) . '/' . $className . '.class')) {
                $javaClass = null;

                if ($this->getInvoker()->getClass()->getManipulator() !== null &&
                        $this->getInvoker()->getClass()->getManipulator()->$className->getArchive() !== null &&
                        $this->getInvoker()->getClass()->getManipulator()->$className->getArchive()->hasClass($className)) {
                    $javaClass = new JavaClass($className . '.class', $this->getInvoker()->getClass()->getManipulator()->$className->getArchive()->getClassBytecode($className));
                } else {
                    $javaClass = new JavaClass(dirname($this->getInvoker()->getClass()->getClassFile()) . '/' . $className . '.class');
                }

                $outerClasses = explode('$', $className);

                $javaClass->setInstance('this', $javaClass);

                for ($i = 1, $size = sizeof($outerClasses); $i < $size; $i++) {
                    $javaClass->setInstance('this$' . ($i - 1), $this->getInvoker()->getClass()->getManipulator()->{implode('$', array_slice($outerClasses, 0, $i))});
                }

                if (method_exists($javaClass->getMethodInvoker(), '<init>')) {

                    // call constructor
                    call_user_func_array(
                        array(
                            $javaClass->getMethodInvoker(),
                            '<init>'
                        ),
                        array(
                            $this->getInvoker()->getClass()
                        )
                    );
                }

                if ($this->getInvoker()->getClass()->getManipulator() !== null) {

                    // regist to manipulator
                    $this->getInvoker()->getClass()->getManipulator()->registerClass($javaClass);
                }

                // push to stack
                $this->pushStack($javaClass);
            } else {

                // load platform
                $this->getInvoker()->loadPlatform($className);

                $invokeClassName = '\\' . str_replace('/', '\\', $className);

                $this->pushStack(new $invokeClassName());
            }
        }
    }
}
