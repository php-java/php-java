<?php

class JavaClassAccessFlagEnum extends JavaEnum {

  const CONSTANT_Public     = 0x0001;
  const CONSTANT_Final      = 0x0010;
  const CONSTANT_Super      = 0x0020;
  const CONSTANT_Interface  = 0x0200;
  const CONSTANT_Abstract   = 0x0400;
  const CONSTANT_Synthetic  = 0x1000;
  const CONSTANT_Annotation = 0x2000;
  const CONSTANT_Enum       = 0x4000;
    
}