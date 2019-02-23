<?php

foreach (glob(__DIR__ . '/../old/PHPJava/Statements/*') as $file) {
    $class = str_replace('JavaStatement', '', basename($file));
    $a = str_replace('JavaStatement', '', file_get_contents($file));
    $a = str_replace("throw new Exception(__CLASS__ . ' hasnot statement.');\n", 'throw new NotImplementedException(__CLASS__);', $a);
    $a = str_replace('public function execute () {' . "\n", "public function execute(): void\n    {", $a);
    $a = str_replace('extends  {', "implements MnemonicInterface\n{\n    use \\PHPJava\\Kernel\\Core\\Accumulator;", $a);
    $a = str_replace('<?php', "<?php\nnamespace PHPJava\\Kernel\\Mnemonics;\n\nuse \\PHPJava\\Exceptions\NotImplementedException;", $a);
    $a = str_replace('class _', 'final class _', $a);
    var_dump($class, $a);
    file_put_contents(__DIR__ . '/../src/kernel/mnemonics/' . $class, $a);
}