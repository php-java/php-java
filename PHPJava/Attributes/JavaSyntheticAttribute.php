<?php

class JavaSyntheticAttribute extends JavaAttribute {

    public function __construct (&$Class) {

        parent::__construct($Class);

        throw new JavaAttributeException(__CLASS__ . ' is not defined.');

    }

}