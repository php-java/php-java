<?php

class JavaClass {

    /**
     * @var string Javaクラスを判定するためのマジックバイト
     */
    private $MagicBytes = 'CAFEBABE';
    
    /**
     * @var resource ファイルのハンドルリソースを格納します。
     */
    private $Handle = null;
    
    /**
     * @var string 読み込まれたファイルを格納します。
     */
    private $ClassFile = null;

    /**
     * @var int コンパイルされたJavaのバイトコードのマイナーバージョンを格納します。
     */
    private $MinorVersion = null;
    
    /**
     * @var int コンパイルされたJavaのバイトコードのメジャーバージョンを格納します。
     */
    private $MajorVersion = null;
    
    /**
     * @var int このクラスの参照番号を格納します。
     */
    private $ThisClass = null;
    
    /**
     * @var int この親クラスの参照番号を格納します。
     */
    private $SuperClass = null;

    /**
     * @var int 読み込まれているインタフェースの数を格納します。
     */
    private $InterfaceCount = 0;
    
    /**
     * @var int[] インタフェースまでの位置情報を格納します。
     */
    private $Interfaces = array();

    /**
     * @var int 読み込まれているフィールドの数を格納します。
     */
    private $FieldCount = 0;
    
    /**
     * @var JavaStructureFieldInfo[] フィールドの情報を格納したオブジェクトを格納します。
     */
    private $Fields = array();

    /**
     * @var array クラスの静的あるいは動的のフィールドを格納します。
     */
    private $ClassFields = array(
        'Statics' => null,
        'Instances' => null
    );

    /**
     * @var int 読み込まれているメソッドの数を格納します。
     */
    private $MethodCount = 0;
    
    /**
     * @var JavaStructureMethodInfo[] メソッドの情報を格納したオブジェクトを格納します。
     */
    private $Methods = array();

    /**
     * @var int Constant Poolの数を格納します。
     */
    private $cpPool = 0;

    /**
     * @var object Constant Poolの情報を格納したオブジェクトを格納します。
     */
    private $cpInfo = array();

    /**
     * @var int アトリビュートの数を格納します。
     */
    private $AttributesCount = 0;

    /**
     * @var JavaAttributeInfo[] アトリビュートの情報を格納したオブジェクトを格納します。
     */
    private $AttributeInfo = array();

    /**
     * @var JavaMethodInvoker Javaのメソッドを呼ぶためのオブジェクトを格納します。
     */
    private $MethodInvoker = null;

    /**
     * @var string ニーモニックを読み込んだログを書き込みます。
     */
    private $Trace = '';
    
    /**
     * @var string ニーモニックを読み込んだログを書き込みます。
     */
    private $TraceHeader = '';
    
    /**
     * @var string ニーモニックを読み込んだログを書き込みます。
     */
    private $TraceBuffering = '';

    /**
     * @var JavaManipulator このクラスを管理しているJARの情報を格納します。
     */
    private $Manipulator = null;

    /**
     * @var JavaBinaryStream Javaのバイトコード読んでいくためのクラスを格納します。
     */
    protected $JavaBinaryStream = null;

    /**
     * JavaClassを読み込みます。
     * 
     * @param string $file ファイル名を指定します。
     * @param string|null $byteCode Javaのバイトコードを渡します。nullの場合$fileから読み込みます。
     * @return void
     */
    public function __construct ($file, $byteCode = null) {

        $this->ClassFile = $file;

        foreach (glob(__DIR__ . '/../{Common,Exceptions,Enums,Stream,Invoker,Attributes,Structures,Types,Utils}/*.php', GLOB_BRACE) as $loadFile) {

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

    /**
     * Constant Poolの情報を取得します。
     */
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

    /**
     * フィールドの情報を取得します。
     * @return JavaStructureFieldInfo
     */
    private function __Fields () {

        return new JavaStructureFieldInfo($this);

    }

    /**
     * メソッドの情報を取得します。
     * @return JavaStructureMethodInfo
     */
    private function __Method () {

        return new JavaStructureMethodInfo($this);

    }

    /**
     * 読み込まれているファイルのハンドルを取得します。
     * @return resource
     */
    public function getHandle () {

        return $this->Handle;

    }

    /**
     * Constant Poolの情報を取得します。
     * @return object
     */
    public function getCpInfo () {

        return $this->cpInfo;

    }

    /**
     * メソッドの情報を取得します。
     * @return JavaStructureMethodInfo[]
     */
    public function getMethods () {

        return $this->Methods;

    }

    /**
     * メソッドの情報を取得します。
     * @return JavaStructureFieldInfo[]
     */
    public function getFields () {

        return $this->Fields;

    }

    /**
     * Javaのメソッドを呼び出すオブジェクトを取得します。
     * @return JavaMethodInvoker
     */
    public function getMethodInvoker () {

        return $this->MethodInvoker;

    }

    /**
     * Javaの引数やクラス定義におけるシグネチャを取得します。
     * @return array
     */
    public static function parseSignature ($signature) {

        return self::_parseSignature($signature);

    }

    /**
     * Javaの引数やクラス定義におけるシグネチャを取得します。
     * @return array
     */
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

    /**
     * シグネチャにおける型付を取得します。
     * @return string
     */
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

    /**
     * メソッド実行時のトレース情報を格納します。
     * 
     * @param string $methodName 実行されたメソッド名を指定します。
     * @param string $accessibility メソッドにおけるアクセス修飾子を指定します。
     * @param array  $signature パースされたシグネチャの情報を指定します。
     * @return void
     */
    public function appendMethodTrace ($methodName, $accessibility, $signature) {

        $arguments = array();

        foreach ($signature['arguments'] as $argument) {

            $arguments[] = str_replace('/', '.', ($argument['type'] === 'class' ? $argument['className'] : $argument['type'])) . str_repeat('[]', $argument['deepArray']);

        }

        $this->TraceHeader .= implode(' ', $accessibility) . ' ' . str_replace('/', '.', ($signature[0]['type'] === 'class' ? $signature[0]['className'] : $signature[0]['type'])) . ' ' . $methodName . ' (' . implode(', ', $arguments) . ')' . "\n";

    }

    /**
     * 実行されたバイトコードのトレースをします。
     * 
     * @param int    $opcode            オペレーションコードを指定します。
     * @param int    $programCounter    オペレーションコードがどこまで実行されたか指定します。
     * @param array  $stacks            現状のスタックの状況を指定します。
     * @param array  $operands          渡されているオペランドの情報を指定します。
     * @return void
     */
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

    /**
     * トレース情報を別の変数に移し替えます。
     * @return void
     */
    public function traceCompletion () {

        $trace = '';

        $trace .= $this->TraceHeader;
        $trace .= "PC\tOPCODE\tMNEMONIC\tSTACKS\tOPERAND(s)\n";
        $trace .= "----------------------------------------------------------------\n";

        $this->TraceBuffering[] = $trace . $this->Trace;

        $this->TraceHeader = '';
        $this->Trace = '';


    }

    /**
     * トレース情報を出力します。
     * 
     * @return void
     */
    public function trace () {

        echo implode("\n", $this->TraceBuffering);

    }

    /**
     * Javaのバイトコードを読み取っているストリームを返します。
     * 
     * @return JavaBinaryStream
     */
    public function getJavaBinaryStream () {

        return $this->JavaBinaryStream;

    }

    /**
     * 読み込んでいる対象のクラスの情報を返します。
     * 
     * @return object
     */
    public function getThisClass () {

        return $this->cpInfo[$this->ThisClass];

    }

    /**
     * 読み込んでいる対象の親クラスの情報を返します。
     * 
     * @return object
     */
    public function getSuperClass () {

        return $this->cpInfo[$this->SuperClass];

    }

    /**
     * 管理しているjarファイルを定義します。
     * 
     * @return void
     */
    public function setManipulator (JavaManipulator &$manipulator) {

        $this->Manipulator = $manipulator;

    }

    /**
     * 管理しているjarファイルを返します
     * 
     * @return JavaManipulator
     */
    public function getManipulator () {

        return $this->Manipulator;

    }

    /**
     * アトリビュートの情報を返します
     * 
     * @return JavaAttributeInfo[]
     */
    public function getAttributeInfo () {

        return $this->AttributeInfo;

    }

    /**
     * 読み込んでいるクラスファイルの情報を返します
     * 
     * @return string
     */
    public function getClassFile () {

        return $this->ClassFile;

    }

    /**
     * このクラスにおける静的なメンバを定義します。
     * 
     * @return void
     */
    public function setStatic ($key, $value) {

        $this->ClassFields->Statics->{$key} = $value;

    }

    /**
     * このクラスにおける動的なメンバを定義します。
     * 
     * @return void
     */
    public function setInstance ($key, $value) {

        $this->ClassFields->Instances->{$key} = $value;

    }

    /**
     * このクラスにおける静的なメンバを返します
     * 
     * @return mixed
     */
    public function getStatic ($key) {

        return isset($this->ClassFields->Statics->{$key}) ? $this->ClassFields->Statics->{$key} : null;

    }

    /**
     * このクラスにおける動的なメンバを返します
     * 
     * @return mixed
     */
    public function getInstance ($key) {

        return isset($this->ClassFields->Instances->{$key}) ? $this->ClassFields->Instances->{$key} : null;

    }

}