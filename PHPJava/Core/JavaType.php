<?php

class JavaType {
    
    /**
     * 
     * @var mixed 値を設定する
     */
    private $value = null;
    
    /**
     * 返却する予定の値を設定します。
     * 
     * @param mixed $value 値を指定します
     */
    public function setValue ($value) {
        $this->value = $value;
    }
    
    /**
     * 設定されている値を返します。
     * 
     * @return mixed 設定されている値を返します
     */
    public function getValue () {
        return $this->value;
    }
    
    /**
     * 値を出力します。
     * 
     * @return mixed
     */
    public function __toString() {
        return $this->getValue();
    }
    
}
