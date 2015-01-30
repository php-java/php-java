<?php

class JavaArchive {

    private $Files = array();
    private $Manipulator = null;

    public function __construct ($file) {

        $archive = new ZipArchive();

        if ($archive->open($file)) {

            for ($i = 0; $i < $archive->numFiles; $i++) {

                $name = $archive->getNameIndex($i);

                if ($name[strlen($name) - 1] !== '/') {

                    $this->Files[$name] = $archive->getFromIndex($i);

                }

            }

        }

        foreach (glob(__DIR__ . '/../{Common,Exceptions,Enums,Stream,Invoker,Attributes,Structures,Utils}/*.php', GLOB_BRACE) as $file) {

            require_once($file);

        }

        $this->Manipulator = new JavaManipulator();


        foreach ($this->Files as $fileName => $data) {

            if (!preg_match('/\.class$/', $fileName)) {

                // load class only

                continue;

            }

            if (strpos($fileName, '$') === false) {

                $this->Manipulator->registerClass(new JavaClass($fileName, $data), $this);

            }

        }

    }

    public function getClassBytecode ($name) {

        $className = str_replace('.', '/', $name);
        $name = $className . '.class';

        // search
        foreach ($this->Files as $fileName => $data) {

            if ($name === $fileName) {

                return $data;

            }

        }

        throw new JavaArchiveException('Not found class');

    }

    public function getClass ($name) {

        $className = str_replace('.', '/', $name);
        $name = $className . '.class';

        // search
        foreach ($this->Files as $fileName => $data) {

            if ($name === $fileName) {

                return $this->Manipulator->$className->getClass()->getMethodInvoker();

            }

        }

        throw new JavaArchiveException('Not found class');

    }

    public function hasClass ($name) {

        $className = str_replace('.', '/', $name);
        $name = $className . '.class';

        // search
        foreach ($this->Files as $fileName => $data) {

            if ($name === $fileName) {

                return true;

            }

        }

        return false;

    }

    public function getFiles () {

        return $this->Files;

    }

}