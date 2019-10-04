# What is the JVM language of PHP syntax?
PHPJava is able to become a JVM language with PHP syntax. 
This feature analyze to AST using `nikic/php-parser`, And PHPJava assemble a intermediately code with assembler in PHPJava, and you can run it as a JVM language with `java` command.
This feature is a experimental implementation more than any other.

# DEMO
![DEMO](../img/php_jvm_lang.gif)

# Get started
1. Create `HelloWorld.php`
```php
<?php
class HelloWorld
{
    public static function main(array $strings)
    {
        echo "Hello World!";        
    }
}
```

2. To run `PackageAssembler`, and assemble an intermediately code.

```php
<?php 
use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;

(new PackageAssembler(
    (new FileStream(__DIR__ . '/HelloWorld.php'))
        // Specify output directory after compile is finished.
        ->setDistributeDirectory(__DIR__ . '/dist')
))->assemble();

```

3. To run generated `HelloWorld.class` in `dist` directory.

```
$ cd dist
$ java HelloWorld
```

You'll get `Hello World!`.
 
# About compile
## Compatibility
This feature compile as the JDK 8.

## About types
PHPJava will try to convert to a string when passed literal or object is not a string.
For example, The number literal `1` will convert as below roughly on Java.

```java
int number = 1;
(new java.lang.Integer(number)).toString()
```

PHPJava will assemble operation code as follows:

```
 0: iconst_1
 1: istore_1
 2: getstatic     #21                 // Field java/lang/System.out:Ljava/io/PrintStream;
 5: new           #9                  // class java/lang/Integer
 8: dup
 9: iload_1
10: invokespecial #7                  // Method java/lang/Integer."<init>":(I)V
13: invokevirtual #13                 // Method java/lang/Integer.toString:()Ljava/lang/String;
16: invokevirtual #25                 // Method java/io/PrintStream.print:(Ljava/lang/String;)V
```

## PHPRuntime.PHPStandard
`PHPStandard` is a namespace for runtime classes of PHP.  

### PHPRuntime.PHPStandard.Constants (旧: PHPStandardClass)
TBD

### PHPRuntime.PHPStandard.Classes
TBD

### PHPRuntime.PHPStandard.Functions
TBD

### PHPRuntime.GlobalStore
TBD

## PHPRuntime.EntryPoint
TBD
