<?php

class JavaManipulator {

    private $Archives = array();
    private $Classes = array();

    public function __construct () {

        require_once 'JavaManipulatorInfo.php';

    }

    public function registerClass (JavaClass &$class, JavaArchive &$archive = null) {

        $this->Classes[] = new JavaManipulatorInfo($class, $archive);

        $class->setManipulator($this);

        return $class->getMethodInvoker();

    }

    public function __get ($className) {

        foreach ($this->Classes as &$class) {

            $cpInfo = $class->getClass()->getCpInfo();

            if ($cpInfo[$class->getClass()->getThisClass()->getClassIndex()]->getString() === $className) {

                return $class;

            }

        }

        throw new JavaManipulatorException('Not found class');

    }

    public function getRegisteredClasses () {

        return sizeof($this->Classses);

    }

    public function getRegisteredArchives () {

        return sizeof($this->Archives);

    }

}