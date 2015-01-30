<?php

class JavaClass {

    private $MagicBytes = 'CAFEBABE';
    private $Handle = null;
    private $ClassFile = null;

    private $MinorVersion = null;
    private $MajorVersion = null;
    private $ThisClass = null;
    private $SuperClass = null;

    private $InterfaceCount = 0;
    private $Interfaces = array();

    private $FieldCount = 0;
    private $Fields = array();

    private $ClassFields = array(
        'Statics' => null,
        'Instances' => null
    );

    private $MethodCount = 0;
    private $Methods = array();

    private $cpPool = 0;

    private $cpInfo = array();

    private $AttributesCount = array();

    private $AttributeInfo = array();

    private $MethodInvoker = null;

    private $Trace = '';
    private $TraceHeader = '';
    private $TraceBuffering = '';

    private $Manipulator = null;

    protected $JavaBinaryStream = null;

    public function __construct ($file, $byteCode = null) {

        $this->ClassFile = $file;

        foreach (glob(__DIR__ . '/../{Common,Exceptions,Enums,Stream,Invoker,Attributes,Structures,Utils}/*.php', GLOB_BRACE) as $loadFile) {

            require_once($loadFile);

        }

        if ($byteCode === null) {

            $this->Handle = fopen($file, 'r');

        } else {

            $this->Handle = fopen('php://memory', 'rw');
            fwrite($this->Handle, $byteCode);
            rewind($this->Handle);

        }

        $this->ClassFields = (object) $this->ClassFields;
        $this->ClassFields->Statics = (object) $this->ClassFields->Statics;
        $this->ClassFields->Instances = (object) $this->ClassFields->Instances;

        $this->JavaBinaryStream = new JavaBinaryStream($this->Handle);

        // read magic byte
        if ($this->MagicBytes !== BinaryTools::toHex($this->JavaBinaryStream->readUnsignedInt())) {

            throw new JavaClassException($this->ClassFile . ' is not java class');

        }

        // read minor version
        $this->MinorVersion = $this->JavaBinaryStream->readUnsignedShort();

        // read major version
        $this->MajorVersion = $this->JavaBinaryStream->readUnsignedShort();

        // read cp_pool
        $this->cpPool = $this->JavaBinaryStream->readUnsignedShort();

        for ($entry = 1; $entry < $this->cpPool; $entry++) {

            $this->cpInfo[$entry] = $this->__CpInfo($entry);

            if ($this->cpInfo[$entry] instanceof \JavaStructureLong ||
                    $this->cpInfo[$entry] instanceof \JavaStructureDouble) {

                // Java ConstantPool Problem
                $entry++;

            }

        }

        // read access flag
        $this->AccessFlag = $this->JavaBinaryStream->readUnsignedShort();

        // read this class
        $this->ThisClass = $this->JavaBinaryStream->readUnsignedShort();

        // read super class
        $this->SuperClass = $this->JavaBinaryStream->readUnsignedShort();

        // read interfaces
        $this->InterfaceCount = $this->JavaBinaryStream->readUnsignedShort();

        for ($i = 0; $i < $this->InterfaceCount; $i++) {

            $this->Interfaces[] = $this->JavaBinaryStream->readUnsignedShort();

        }

        // read fields
        $this->FieldCount = $this->JavaBinaryStream->readUnsignedShort();

        for ($i = 0; $i < $this->FieldCount; $i++) {

            $this->Fields[] = $this->__Fields();

        }

        // read methods
        $this->MethodCount = $this->JavaBinaryStream->readUnsignedShort();

        for ($i = 0; $i < $this->MethodCount; $i++) {

            $this->Methods[] = $this->__Method();

        }

        $this->AttributesCount = $this->JavaBinaryStream->readUnsignedShort();

        for ($i = 0; $i < $this->AttributesCount; $i++) {

            $this->AttributeInfo[] = new JavaAttributeInfo($this);

        }

        $this->MethodInvoker = new JavaMethodInvoker($this);

        // find clinit
        foreach ($this->getMethods() as $method) {

            if ($this->cpInfo[$method->getNameIndex()]->getString() === '<clinit>') {

                // call clinit
                call_user_func_array(array(
                    $this->MethodInvoker,
                    '<clinit>'
                ), array());

            }

        }

    }

    private function __CpInfo () {

        // read tag
        switch ($this->JavaBinaryStream->readUnsignedByte()) {

            case JavaClassConstantEnum::CONSTANT_Class:

                return new JavaStructureClass($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Fieldref:

                return new JavaStructureFieldref($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Methodref:

                return new JavaStructureMethodref($this);

            break;
            case JavaClassConstantEnum::CONSTANT_InterfaceMethodref:

                return new JavaStructureInterfaceMethodref($this);

            break;
            case JavaClassConstantEnum::CONSTANT_String:

                return new JavaStructureString($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Integer:

                return new JavaStructureInteger($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Float:

                return new JavaStructureFloat($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Long:

                return new JavaStructureLong($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Double:


                return new JavaStructureDouble($this);

            break;
            case JavaClassConstantEnum::CONSTANT_NameAndType:

                return new JavaStructureNameAndType($this);

            break;
            case JavaClassConstantEnum::CONSTANT_Utf8:

                return new JavaStructureUtf8($this);

            break;

        }

    }

    private function __Fields () {

        return new JavaStructureFieldInfo($this);

    }

    private function __Method () {

        return new JavaStructureMethodInfo($this);

    }

    public function getHandle () {

        return $this->Handle;

    }

    public function getCpInfo () {

        return $this->cpInfo;

    }

    public function getMethods () {

        return $this->Methods;

    }

    public function getFields () {

        return $this->Fields;

    }

    public function getMethodInvoker () {

        return $this->MethodInvoker;

    }

    public static function parseSignature ($signature) {

        return self::_parseSignature($signature);

    }


    private static function _parseSignature ($signature, $i = 0) {

        $data = array();
        $deepArray = 0;

        for ($size = strlen($signature); $i < $size; ) {

            switch ($signature[$i]) {

                case 'B':
                case 'C':
                case 'D':
                case 'F':
                case 'I':
                case 'J':
                case 'S':
                case 'V':
                case 'Z':

                    $data[] = array(

                        'type' => self::_getSignatureType($signature[$i]),
                        'deepArray' => $deepArray

                    );

                    $deepArray = 0;



                break;
                case 'L':

                    // class name
                    $build = '';

                    // read to ;
                    for ($i++; $i < $size && $signature[$i] !== ';'; $i++) {

                        $build .= $signature[$i];

                    }

                    $data[] = array(

                        'type' => 'class',
                        'deepArray' => $deepArray,
                        'className' => $build

                    );

                    $deepArray = 0;

                break;
                case '[':

                    // array
                    $deepArray++;

                    for ($i++; $signature[$i] === '['; $i++) {

                        $deepArray++;

                    }

                    // loop
                    continue 2;

                break;
                case '(':

                    $build = '';

                    // read to )
                    for ($i++; $i < $size && $signature[$i] !== ')'; $i++) {

                        $build .= $signature[$i];

                    }

                    $data['arguments'] = ($build !== '') ? self::_parseSignature($build) : array();
                    $data['argumentsCount'] = sizeof($data['arguments']);

                break;

            }

            $i++;

        }

        return $data;

    }

    public static function _getSignatureType ($signature) {

        switch ($signature) {

            case 'B': return 'byte';
            case 'C': return 'char';
            case 'D': return 'double';
            case 'F': return 'float';
            case 'I': return 'int';
            case 'J': return 'long';
            case 'S': return 'short';
            case 'V': return 'void';
            case 'Z': return 'boolean';

        }

        return 'Undefined';

    }

    public function appendMethodTrace ($methodName, $accessibility, $signature) {

        $arguments = array();

        foreach ($signature['arguments'] as $argument) {

            $arguments[] = str_replace('/', '.', ($argument['type'] === 'class' ? $argument['className'] : $argument['type'])) . str_repeat('[]', $argument['deepArray']);

        }

        $this->TraceHeader .= implode(' ', $accessibility) . ' ' . str_replace('/', '.', ($signature[0]['type'] === 'class' ? $signature[0]['className'] : $signature[0]['type'])) . ' ' . $methodName . ' (' . implode(', ', $arguments) . ')' . "\n";

    }

    public function appendTrace ($opcode, $programCounter, $stacks, $operands) {

        $mnemonic = new JavaMnemonicEnum();

        $mnemonicName = preg_replace('/^MNEMONIC_/', '', $mnemonic->getName($opcode));

        foreach ($operands as $key => $operand) {

            if (is_object($operands[$key])) {

                $operands[$key] = '#' . get_class($operands[$key]);

            }

        }

        $this->Trace .= '#' . $programCounter . "\t" . sprintf('0x%02X', $opcode) . "\t" . $mnemonicName . (strlen($mnemonicName) < 8 ? "\t" : '') . "\t" . sizeof($stacks) . "\t" . implode("\t", $operands) . "\n";

    }

    public function traceCompletion () {

        $trace = '';

        $trace .= $this->TraceHeader;
        $trace .= "PC\tOPCODE\tMNEMONIC\tSTACKS\tOPERAND(s)\n";
        $trace .= "----------------------------------------------------------------\n";

        $this->TraceBuffering[] = $trace . $this->Trace;

        $this->TraceHeader = '';
        $this->Trace = '';


    }

    public function _trace () {

        echo $this->Trace;

    }

    public function trace () {

        echo implode("\n", $this->TraceBuffering);

    }

    public function getJavaBinaryStream () {

        return $this->JavaBinaryStream;

    }

    public function getThisClass () {

        return $this->cpInfo[$this->ThisClass];

    }

    public function getSuperClass () {

        return $this->cpInfo[$this->SuperClass];

    }


    public function setManipulator (JavaManipulator &$manipulator) {

        $this->Manipulator = $manipulator;

    }


    public function getManipulator () {

        return $this->Manipulator;

    }

    public function getAttributeInfo () {

        return $this->AttributeInfo;

    }

    public function getClassFile () {

        return $this->ClassFile;

    }

    public function setStatic ($key, $value) {

        $this->ClassFields->Statics->{$key} = $value;

    }

    public function setInstance ($key, $value) {

        $this->ClassFields->Instances->{$key} = $value;

    }


    public function getStatic ($key) {

        return isset($this->ClassFields->Statics->{$key}) ? $this->ClassFields->Statics->{$key} : null;

    }

    public function getInstance ($key) {

        return isset($this->ClassFields->Instances->{$key}) ? $this->ClassFields->Instances->{$key} : null;

    }

}