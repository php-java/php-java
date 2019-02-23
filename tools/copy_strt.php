<?php

foreach (glob(__DIR__ . '/../old/PHPJava/Structures/*') as $file) {
    $class = str_replace('JavaStructure', '_', basename($file));
    $a = file_get_contents($file);
    $a = str_replace('JavaStructure', '_', $a);
    $a = str_replace('Varification', 'Verification', $a);
    $a = str_replace('$Class', '$this->getClass()', $a);
    $a = str_replace('getJavaBinaryStream()->', '', $a);
    $a = str_replace('extends _ {', "implements StructureInterface\n{\n    use \\PHPJava\\Kernel\\Core\\BinaryReader;[LB]", $a);
    $a = str_replace('public function __construct (&$this->getClass()) {', "public function execute(): void\n    {", $a);
    $a = str_replace('parent::__construct($this->getClass());', '', $a);
    $a = preg_replace("/\s*[\\n]+/", "\n", $a);
    $a = str_replace('<?php', "<?php\nnamespace PHPJava\\Kernel\\Structures;\n\nuse \\PHPJava\\Exceptions\NotImplementedException;\nuse \\PHPJava\\Utilities\\BinaryTool;\n", $a);
    $a = str_replace('[LB]', "\n", $a);
    $a = str_replace('$this->getClass()->read', '$this->read', $a);
    var_dump($class, $a);
    file_put_contents(__DIR__ . '/../src/kernel/structures/' . $class, $a . "\n");
}
