<?php

class __JavaMethodInvoker extends JavaInvoker {
    
    public function __call ($methodName, $arguments) {
        
        $cpList = $this->getClass()->getCpInfo();
        
        foreach ($this->getClass()->getMethods() as $methodInfo) {
        
            $cpMethodName = $cpList[$methodInfo->getNameIndex()]->getString();
            
            if ($methodName === $cpMethodName) {
                
                $accessFlag = new JavaMethodAccessFlagEnum();
                $accessibility = array();
                
                foreach ($accessFlag->getValues() as $value) {
                    
                    if (($methodInfo->getAccessFlag() & $value) != 0) {
                        
                        $accessibility[] = strtolower(preg_replace('/^CONSTANT_/', '', $accessFlag->getName($value)));
                        
                    }
                    
                }
                
                $this->getClass()->appendMethodTrace($methodName, $accessibility, $this->getClass()->parseSignature($cpList[$methodInfo->getDescriptorIndex()]->getString()));
                    
                foreach ($methodInfo->getAttributes() as $attribute) {
                    
                    $attributeData = $attribute->getAttributeData();
                    
                    if ($attributeData instanceof JavaCodeAttribute) {
                        
                        // runnable code
                        $opCodes = $attributeData->getOpCodes();
                        
                        $handle = fopen('php://temp', 'rw');
                        fwrite($handle, $attributeData->getCode());
                        rewind($handle);
                        
                        $opCodeStream = new JavaBinaryStream($handle);
                        
                        // 局所変数格納用
                        $localstorage = array(
                            0 => null,
                            1 => null,
                            2 => null,
                            3 => null
                        );
                        
                        $i = 0;
                        foreach ($arguments as $argument) {
                            
                            $localstorage[$i] = $argument;
                            $i++;
                                    
                        }
                        
                        $stacks = array();
                        
                        // code
                        // var_dump(bin2hex($attributeData->getCode()));
                        
                        $callMethod = null;
                        
                        for (; $opCodeStream->getOffset() < $attributeData->getOpCodeLength(); ) {
                            
                            $opcode = $opCodeStream->readUnsignedByte();
                            
                            $pointer = $opCodeStream->getOffset() - 1;
                            
                            $traceInfo = null;
                            
                            switch ($opcode) {
                                case JavaMnemonicEnum::MNEMONIC_nop:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aconst_null:
                                    
                                    $stacks[] = null;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_m1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_1:
                                    
                                    $stacks[] = 1;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_2:
                                    
                                    $stacks[] = 2;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_3:
                                    
                                    $stacks[] = 3;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_4:
                                    
                                    $stacks[] = 4;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iconst_5:
                                    
                                    $stacks[] = 5;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lconst_0:
                                    
                                    $stacks[] = 0;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lconst_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fconst_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fconst_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fconst_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dconst_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dconst_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_bipush:
                                    
                                    $stacks[] = $opCodeStream->readUnsignedByte();
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_sipush:
                                    
                                    $stacks[] = $opCodeStream->readUnsignedShort();
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ldc:
                                    
                                    $stacks[] = $cpList[$cpList[$opCodeStream->readUnsignedByte()]->getStringIndex()];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ldc_w:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ldc2_w:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iload:
                                    
                                    $index = $opCodeStream->readUnsignedByte();
                                    
                                    $stacks[] = $localstorage[$index];
                                    
                                    // var_dump($cpList[$cpList[$cpList[$i]->getClassIndex()]->getClassIndex()]->getString());

                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iload_0:
                                    
                                    $stacks[] = $localstorage[0];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iload_1:
                                    
                                    $stacks[] = $localstorage[1];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iload_2:
                                    
                                    $stacks[] = $localstorage[2];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iload_3:
                                    
                                    $stacks[] = $localstorage[3];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lload_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lload_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lload_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lload_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fload_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fload_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fload_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fload_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dload_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dload_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dload_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dload_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aload_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aload_1:
                                    
                                    $stacks[] = $localstorage[1];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aload_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aload_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iaload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_laload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_faload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_daload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aaload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_baload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_caload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_saload:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_istore:
                                    
                                    $index = $opCodeStream->readUnsignedByte();
                                    
                                    $localstorage[$index] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lstore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fstore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dstore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_astore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_istore_0:
                                    
                                    $localstorage[0] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_istore_1:
                                    
                                    $localstorage[1] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_istore_2:
                                    
                                    $localstorage[2] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_istore_3:
                                    
                                    $localstorage[3][] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lstore_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lstore_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lstore_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lstore_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fstore_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fstore_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fstore_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fstore_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dstore_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dstore_1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dstore_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dstore_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_astore_0:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_astore_1:
                                    
                                    $localstorage[1][] = array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_astore_2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_astore_3:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_aastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_bastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_castore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_sastore:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_pop:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_pop2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup:
                                    
                                    $stacks[] = $stacks[sizeof($stacks) - 1];
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup_x1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup_x2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup2_x1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dup2_x2:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_swap:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iadd:
                                    
                                    $stacks[] = array_pop($stacks) + array_pop($stacks);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ladd:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fadd:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dadd:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_isub:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lsub:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fsub:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dsub:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_imul:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lmul:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fmul:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dmul:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_idiv:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ldiv:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fdiv:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ddiv:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_irem:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lrem:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_frem:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_drem:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ineg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lneg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fneg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dneg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ishl:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lshl:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ishr:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lshr:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iushr:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lushr:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iand:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_land:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ior:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lor:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ixor:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lxor:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iinc:
                                    
                                    $index = $opCodeStream->readUnsignedByte();
                                    $const = $opCodeStream->readByte();
                                    
                                    $localstorage[$index] += $const;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2l:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2f:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2d:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_l2i:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_l2f:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_l2d:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_f2i:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_f2l:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_f2d:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_d2i:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_d2l:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_d2f:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2b:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2c:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_i2s:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lcmp:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fcmpl:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_fcmpg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dcmpl:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dcmpg:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifeq:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifne:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_iflt:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifge:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifgt:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifle:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmpeq:
                                    
                                    $offset = $opCodeStream->readUnsignedShort();
                                    
                                    $leftOperand = array_pop($stacks);
                                    $rightOperand = array_pop($stacks);
                                    
                                    if ($leftOperand === $rightOperand) {
                                        
                                        $opCodeStream->setOffset($pointer + $offset);
                                        
                                    }
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmpne:
                                    
                                    $offset = $opCodeStream->readShort();
                                    
                                    $leftOperand = array_pop($stacks);
                                    $rightOperand = array_pop($stacks);
                                    
                                    if ($leftOperand !== $rightOperand) {
                                        
                                        $opCodeStream->setOffset($pointer + $offset);
                                        
                                    }
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmplt:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmpge:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmpgt:
                                    
                                    $offset = $opCodeStream->readShort();
                                    
                                    $leftOperand = array_pop($stacks);
                                    $rightOperand = array_pop($stacks);
                                    
                                    // var_dump($leftOperand, $rightOperand);
                                    if ($leftOperand <= $rightOperand) {
                                        
                                        $opCodeStream->setOffset($pointer + $offset);
                                        
                                    }
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_icmple:
                                    
                                    
                                    $offset = $opCodeStream->readShort();
                                    
                                    $leftOperand = array_pop($stacks);
                                    $rightOperand = array_pop($stacks);
                                    
                                    // var_dump($leftOperand, $rightOperand);
                                    if ($leftOperand >= $rightOperand) {
                                        
                                        $opCodeStream->setOffset($pointer + $offset);
                                        
                                    }
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_acmpeq:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_if_acmpne:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_goto:
                                    
                                    $offset = $opCodeStream->readShort();
                                    
                                    $opCodeStream->setOffset($pointer + $offset);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_jsr:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ret:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_tableswitch:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lookupswitch:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ireturn:
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_lreturn:
                                    
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);

                                break;
                                case JavaMnemonicEnum::MNEMONIC_freturn:
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_dreturn:
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, traceInfo);
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_areturn:
                                    
                                    $result = array_pop($stacks);
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);
                                    
                                    return $result;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_return:
                                    
                                    $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);
                                    // return
                                    return;
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_getstatic:
                                    
                                    $cp = $cpList[$opCodeStream->readUnsignedShort()];
                                    
                                    $traceInfo = $cp;
                                    
                                    $class = $cpList[$cpList[$cp->getClassIndex()]->getClassIndex()]->getString();
                                    
                                    $this->loadPlatform($class);
                                    
                                    // test
                                    include __DIR__ . '/../Platform/java/io/PrintStream.php';
                                    $stacks[] = new \java\io\PrintStream();
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_putstatic:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_getfield:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_putfield:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_invokevirtual:
                                    
                                    $cp = $cpList[$opCodeStream->readUnsignedShort()];
                                    
                                    $traceInfo = $cp;
                                    
                                    $class = $cpList[$cpList[$cp->getClassIndex()]->getClassIndex()]->getString();
                                    
                                    // load platform
                                    $this->loadPlatform($class);
                                    
                                    $invokeClassName = '\\' . str_replace('/', '\\', $class);
                                    
                                    $nameAndTypeIndex = $cpList[$cp->getNameAndTypeIndex()];
                                    
                                    // signature
                                    $signature = $this->getClass()->parseSignature($cpList[$nameAndTypeIndex->getDescriptorIndex()]->getString());
                                    
                                    $arguments = array();
                                    
                                    for ($i = 0; $i < $signature['argumentsCount']; $i++) {
                                        
                                        $arguments[] = array_pop($stacks);
                                        
                                    }
                                    
                                    $result = call_user_func_array(array(

                                        array_pop($stacks),
                                        $cpList[$cpList[$cp->getNameAndTypeIndex()]->getNameIndex()]->getString()

                                    ), $arguments);
                                    
                                    // empty to array
                                    // $stacks = array();

                                    if ($signature[0]['type'] !== 'void') {

                                        $stacks[] = $result;
                                        
                                    }
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_invokespecial:
                                    
                                    $class = $opCodeStream->readUnsignedShort();
                                    $traceInfo = $cpList[$class];
                                    
                                    // $invokeClassName = '\\' . str_replace('/', '\\', $cpList[$class->getClassIndex()]->getString());
                                    
                                    $invokeClassName = array_pop($stacks);
                                    
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_invokestatic:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_invokeinterface:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_invokedynamic:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_new:
                                    
                                    $class = $cpList[$opCodeStream->readUnsignedShort()];
                                    
                                    // load platform
                                    $this->loadPlatform($cpList[$class->getClassIndex()]->getString());
                                    
                                    $invokeClassName = '\\' . str_replace('/', '\\', $cpList[$class->getClassIndex()]->getString());
                                    
                                    $stacks[] = new $invokeClassName();
                                    
                                break;
                                case JavaMnemonicEnum::MNEMONIC_newarray:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_anewarray:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_arraylength:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_athrow:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_checkcast:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_instanceof:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_monitorenter:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_monitorexit:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_wide:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_multianewarray:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifnull:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_ifnonnull:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_goto_w:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_jsr_w:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_breakpoint:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_impdep1:
                                break;
                                case JavaMnemonicEnum::MNEMONIC_impdep2:
                                break;
                            }
                        
                            $this->getClass()->appendTrace($opcode, $pointer, $stacks, $traceInfo);
                            
                        }
                            
                        return;
                        
                    }
                    
                }
                
            }
            
            
        }
        
        throw new JavaClassUndefined();
        
        //var_dump($methodName, $arguments);
        
    }
    
}
