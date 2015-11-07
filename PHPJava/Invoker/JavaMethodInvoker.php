<?php

class JavaMethodInvoker extends JavaInvoker {
    
    /**
     * @var bool コンストラクターが実行されているかどうかを判定します。
     */
    private $_constructed = false;
    
    /**
     * 
     * @access private
     * @var bool インスタンス化されているかどうか判定します
     */
    public function __construct(\JavaClass &$Class, $constructed = false) {
        parent::__construct($Class);
        $this->_constructed = $constructed;
    }
    
    /**
     * Javaのメンバをコールします。
     * 
     * @param $fieldName フィールド名
     * @return mixed
     */
    public function __get ($fieldName) {
        
        $cpInfo = $this->getClass()->getCpInfo();

        foreach ($this->getClass()->getFields() as $fieldInfo) {

            $cpFieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if ($fieldName === $cpFieldName) {
                
                $accessibility = $this->_getAccessiblity($fieldInfo);
                $fieldSignature = JavaClass::parseSignature($cpInfo[$fieldInfo->getDescriptorIndex()]->getString());
                
                // 静的メンバの場合
                if (in_array('static', $accessibility)) {
                    return $this->getClass()->getStatic($fieldName);
                }
                $type = 'JavaType' . ucfirst($fieldSignature[0]['type']);
                return new $type($this->getClass()->getInstance($fieldName));
            }
        }
        
        throw new JavaInvokerException('undefined field "' . $fieldName . '"');
        
    }
    
    /**
     * Javaのメンバの値を設定します。
     * 
     * @param string $fieldName フィールド名
     * @param mixed $value 書き換える値
     * @return mixed
     */
    public function __set($fieldName, $value) {
        
        $cpInfo = $this->getClass()->getCpInfo();

        foreach ($this->getClass()->getFields() as $fieldInfo) {

            $cpFieldName = $cpInfo[$fieldInfo->getNameIndex()]->getString();

            if ($fieldName === $cpFieldName) {
                
                $accessibility = $this->_getAccessiblity($fieldInfo);
                $fieldSignature = JavaClass::parseSignature($cpInfo[$fieldInfo->getDescriptorIndex()]->getString());
                
                // 静的メンバの場合
                if (in_array('static', $accessibility)) {
                    $this->getClass()->setStatic($fieldName, $value);
                    return;
                }
                $this->getClass()->setInstance($fieldName, $value);
                return;
            }
        }
        
        throw new JavaInvokerException('undefined field "' . $fieldName . '"');
    }
    
    /**
     * Javaのメソッドをエミュレートします。
     * 
     * @param $fieldName フィールド名
     * @return mixed
     */
    public function __call ($methodName, $arguments) {

        $cpInfo = $this->getClass()->getCpInfo();

        foreach ($this->getClass()->getMethods() as $methodInfo) {

            $cpMethodName = $cpInfo[$methodInfo->getNameIndex()]->getString();

            if ($methodName === $cpMethodName) {

                $accessibility = $this->_getAccessiblity($methodInfo);

                // メソッドのシグネチャを取得する
                $javaArguments = JavaClass::parseSignature($cpInfo[$methodInfo->getDescriptorIndex()]->getString());

                if (sizeof($arguments) !== $javaArguments['argumentsCount']) {

                    // 引数の配列の大きさが違う
                    continue;

                } else {

                    foreach ($arguments as $argument) {

                        // 型比較


                    }

                }

                $this->getClass()->appendMethodTrace($methodName, $accessibility, $javaArguments);

                foreach ($methodInfo->getAttributes() as $attribute) {

                    $attributeData = $attribute->getAttributeData();

                    if ($attributeData instanceof \JavaCodeAttribute) {

                        // runnable code
                        $opCodes = $attributeData->getOpCodes();

                        $handle = fopen('php://memory', 'rw');
                        fwrite($handle, $attributeData->getCode());
                        rewind($handle);

                        $byteCodeStream = new JavaByteCodeStream($handle);

                        // 局所変数格納用
                        $localstorage = array(
                            0 => $this->getClass(),
                            1 => null,
                            2 => null,
                            3 => null
                        );

                        $i = 1;
                        foreach ($arguments as $argument) {

                            $localstorage[$i] = $argument;
                            $i++;

                        }

                        $stacks = array();

                        $mnemonic = new JavaMnemonicEnum();

                        for (; $byteCodeStream->getOffset() < $attributeData->getOpCodeLength(); ) {

                            $opcode = $byteCodeStream->readUnsignedByte();

                            $pointer = $byteCodeStream->getOffset() - 1;

                            $name = 'JavaStatement_' . preg_replace('/^MNEMONIC_/', '', $mnemonic->getName($opcode));

                            require_once dirname(__DIR__) . '/Statements/' . $name . '.php';

                            $statement = new $name($methodName, $this, $byteCodeStream, $stacks, $localstorage, $cpInfo, $attributeData, $pointer);
                            $returnValue = $statement->execute();
                            
                            // write trace
                            $this->getClass()->appendTrace($opcode, $pointer, $stacks, $byteCodeStream->getOperands());

                            if ($returnValue !== null) {
                                $this->getClass()->traceCompletion();
                                return $returnValue;
                            }

                        }

                        $this->getClass()->traceCompletion();
                        return;

                    }

                }

            }


        }

        throw new JavaInvokerException('undefined method "' . $methodName . '"');

    }

    /**
     * 型の変換を行います
     * 
     * @param mixed $value 変換対象を指定
     * @return int 変換された型を返します。
     */
    public function valueOf ($value) {

        return (int) $value;

    }

    /**
     * アクセス修飾子を取得します。
     * 
     * @param JavaMethodInfo|JavaFieldInfo $info アクセス修飾子を取得したいストラクチャを指定
     * @return array アクセス修飾子を返します。
     */
    private function _getAccessiblity ($info) {
        
        $accessFlag = new JavaAccessFlagEnum();
        $accessibility = array();

        foreach ($accessFlag->getValues() as $value) {

            if (($info->getAccessFlag() & $value) != 0) {

                $accessibility[] = strtolower(preg_replace('/^CONSTANT_/', '', $accessFlag->getName($value)));

            }

        }
        
        return $accessibility;
    }

}
