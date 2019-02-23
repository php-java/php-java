<?php

foreach (glob(__DIR__ . '/../old/PHPJava/Attributes/*') as $file) {
    $class = str_replace('Java', '', basename($file));
    $a = file_get_contents($file);
    $a = str_replace('public function __construct (&$Class) {', "public function execute(): void\n    {", $a);
    $a = str_replace("parent::__construct(\$Class);", '', $a);
    $a = str_replace('class Java', 'class ', $a);
    $a = str_replace('throw new JavaAttributeException(__CLASS__ . \' is not defined.\');', 'throw new NotImplementedException(__CLASS__);', $a);
    $a = preg_replace("/\s*[\\n]+/", "\n", $a);
    $a = str_replace('extends JavaAttribute {', "implements AttributeInterface\n{\n    use \\PHPJava\\Kernel\\Core\\BinaryReader;\n", $a);
    $a = str_replace('class ', 'final class ', $a);
    $a = str_replace('<?php', "<?php\nnamespace PHPJava\\Kernel\\Attributes;\n\nuse \\PHPJava\\Exceptions\NotImplementedException;\nuse \\PHPJava\\Utilities\\BinaryTool;\n", $a);
    $a = str_replace('$this->Class', '$this->getCurrentClass()', $a);
    $a = str_replace('BinaryTools::', 'BinaryTool::', $a);
    $a = str_replace('getJavaBinaryStream()->', '', $a);
    var_dump($class, $a);
    file_put_contents(__DIR__ . '/../src/kernel/attributes/' . $class, $a . "\n");
}