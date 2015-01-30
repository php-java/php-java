<?php

class JavaManipulatorInfo {

    private $Class = null;
    private $Archive = null;

    public function __construct (&$class, &$archive) {

        $this->Class = $class;
        $this->Archive = $archive;

    }

    public function getClass () {

        return $this->Class;

    }

    public function getArchive () {

        return $this->Archive;

    }

}