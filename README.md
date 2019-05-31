# PHPJava - JVM Emulator by PHP
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
![Compatibility](https://img.shields.io/badge/Compatibility-7.2%20and%20greater-green.svg) 
[![Build Status](https://travis-ci.org/php-java/php-java.svg?branch=master)](https://travis-ci.org/php-java/php-java)
[![Total Downloads](https://poser.pugx.org/php-java/php-java/downloads)](https://packagist.org/packages/php-java/php-java)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
<p align="center"><img src="./docs/img/logo.png" height="300"></p>

# What is PHPJava?
PHPJava is an experimental library which emulates JVM (a.k.a. Java Virtual Machine) by PHP 🐘
And PHPJava reads binary from pre-compiled Java file(s) ☕
So, PHPJava is **NOT** bridge to Java. This library can be run 100% in PHP.
This project referred to [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html) documentation at the time we made it.

We are welcoming any contributions to this project 💪

Contribution guide is here:
- [The Contribution Guide](https://github.com/php-java/php-java/wiki/The-Contribution-Guide) 

## Documents

- [English](https://github.com/php-java/php-java/blob/master/README.md)
- [日本語](https://github.com/php-java/php-java/blob/master/README-ja.md)

## DEMO
![DEMO](https://user-images.githubusercontent.com/1282995/58679222-87070880-839d-11e9-8c98-978fdd0bb015.gif)

## Requirements
- PHP >= 7.2
- Composer
- ext-zip

## Run with PHPJava's binary 
You can run PHPJava as same as an executable binary.

### Run Class
```shell
./vendor/bin/PHPJava HelloWorld
```

or

```shell
./vendor/bin/PHPJava HelloWorld.class
```

### Run Jar
```shell
./vendor/bin/PHPJava -m jar HelloWorld.jar
```

### help

```shell
./vendor/bin/PHPJava -h
```

## Quick start
1) Install PHPJava in your project:
```
$ composer require php-java/php-java
```

2) Write Java:
```java
class HelloWorld 
{
    public static void main(String[] args)
    {
        System.out.println(args[0]);
    }
}
```

3) Compile Java:
```
$ javac -encoding UTF8 /path/to/HelloWorld.java
```

4) Call the main method as follows:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;
 
JavaClass::load('HelloWorld')
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello World!"]
    );

// Or, you can specify file path as follows. 
(new JavaClass(new JavaCompiledClass(new FileReader('/path/to/HelloWorld.class'))))
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello World!"]
    );
```

5) Get the result
```
$ php /path/to/HelloWorld.php
Hello World!
```

## Java Archive (Execute *.jar file)

1) Build your Java files into a class:
```
$ javac -encoding UTF8 -d build src/*
$ cd build && jar -cvfe ../Test.jar Test *
```

2) Execute the jar on PHPJava with either an enrtypoint or your target method.
```php
<?php
use PHPJava\Core\JavaArchive;

// You must pass parameters to entrypoint within the `execute` method.
// The `execute` method does not have any default parameters.
(new JavaArchive('Test.jar'))->execute([]);

// or
(new JavaArchive('Test.jar'))
    ->getClassByName('Test')
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        []
    );
```

### Get/Set static fields

e.g., Set or Get static fields:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$staticFieldAccessor = JavaClass::load('HelloWorld')
    ->getInvoker()
    ->getStatic()
    ->getFields();

// Set
$staticFieldAccessor->set('fieldName', 'value');

// Get
echo $staticFieldAccessor->get('fieldName');
```

### Call a static method

e.g., Call a static method:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

JavaClass::load('HelloWorld')
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'methodName',
        $firstArgument,
        $secondArgument,
        $thirdArgument,
        ...
    );

// Or, if the called method has a return value, you can store it to a variable.
$result = JavaClass::load('HelloWorld')
   ->getInvoker()
   ->getStatic()
   ->getMethods()
   ->call(
       'methodWithSomethingReturn',
       $firstArgument,
       $secondArgument,
       $thirdArgument,
       ...
   );

// Output the $result you want
echo $result;
```


### Get/Set dynamic fields
If you want to get/set dynamic fields, you need to call the `construct` method on Java by PHPJava.

e.g., Call dynamic field:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = JavaClass::load('HelloWorld');

$javaClass->getInvoker()->construct();

$dynamicFieldAccessor = $javaClass
    ->getInvoker()
    ->getDynamic()
    ->getFields();

// Set
$dynamicFieldAccessor->set('fieldName', 'value');

// Get
echo $dynamicFieldAccessor->get('fieldName');
```

### Call a dynamic method
If you want to call a dynamic method (same as a field), you need to call the `construct` method on Java by PHPJava.

e.g., Call dynamic method:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$dynamicMethodAccessor = JavaClass::load('HelloWorld')
     ->getInvoker()
     ->construct()
     ->getDynamic()
     ->getMethods(); 

$dynamicMethodAccessor
    ->call(
        'methodName',
        $firstArgument,
        $secondArgument,
        $thirdArgument,
        ...
    );

// Or, if the called method has a return value, you can store it to a variable.
$dynamicMethodAccessor
   ->call(
       'methodWithSomethingReturn',
       $firstArgument,
       $secondArgument,
       $thirdArgument,
       ...
   );

// Output the $result you want
echo $result;
```

### Call a method in a built-in package on Java
PHPJava can call a built-in package in the same way as `JavaClass::load` after the version 0.0.8.5.
This feature is emulated by `ReflectionClass` on `PHP` and any static methods/fields will dynamically be generated in fact.

e.g.) To Call `java.lang.Math` is below. 
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

echo JavaClass::load('java.lang.Math')
     ->getInvoker()
     ->getStatic()
     ->getMethods()
     ->call(
         'pow',
         2,
         4
     ); 
````

The example will return `16`.

### Call ambiguous methods in Java from PHP
- In PHP, types are more ambiguous than Java.
- For example, you may want to call a method that accepts a `long` parameter in Java from PHP.
In this case, you can call that method as follows:

#### e.g., [Recommended] Wrap with `\PHPJava\Kernel\Types\_Long`.
##### In Java
```java
class Test
{
    public static void includingLongTypeParameter(long n)
    {
        System.out.println(n);
    }
}
```

##### In PHP
```php
<?php
$javaClass->getInvoker()->getStatic()->getMethods()->call(
    'includingLongTypeParameter',
    new \PHPJava\Kernel\Types\_Long(1234)
);
```

The example will return `1234`.

#### e.g., Set `false` to strict mode option.
##### In PHP
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = JavaClass::load(
    'HelloWorld',
    [
        'strict' => false,
    ]
);
```

### Runtime options
- Available options on `JavaClass` or `JavaArchive`:

| Options | Value | Default | Description | Targeted |
|:--------|:------|:--------|:------------|:---------|
| entrypoint | string or null | null | The entrypoint in JAR. | JavaArchive |
| max_stack_exceeded | integer | 9999 | Execute more than the specified number of times be stopped the operation. | JavaClass |
| max_execution_time | integer | 30 | Maximum execution time. | JavaClass |
| strict | boolean | true | When `true`, PHPJava calls a method, variables, and so on strictly; otherwise, it calls them ambiguously. | Both |
| validation.method.arguments_count_only | boolean | false | When `true`, ClassResolver validates arguments by their number only. | JavaClass |
| operations.enable_trace | boolean | false | When `true`, PHPJava stores the operation history. | JavaClass |
| operations.temporary_code_stream | string | php://memory | Operation code will be output to temporary stream. Change this if your code is heavy so you'll be happy. | JavaClass |
| operations.injector.before | callable | null | Inject an executor before executing an operation. | JavaClass |
| operations.injector.after | callable | null | Inject an executor after executing an operation. | JavaClass |
| log.level | int | Logger::EMERGENCY | The output level of `Monolog`. | Both |
| log.path | string or resource | php://stdout | The output destination of `Monolog`. | Both |
| dry_run (Not Implemented) | boolean | false | Checking JavaClass/JavaArchive structure only. When `true`, PHPJava runs in dry-run mode. | Both |
| env (Not Implemented) | enum | Environment::EXPERIMENTAL | Your environment. | Both |

- Example of JavaClass:
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = JavaClass::load(
    'HelloWorld',
    [
        'max_stack_exceeded' => 12345,
        'validation' => [
            'method' => [
                'arguments_count_only' => true,
            ],
        ],
    ]
);
```

- Example of GlobalOptions
```php
<?php
use PHPJava\Core\JVM\Parameters\GlobalOptions;
use Monolog\Logger;

GlobalOptions::set([
    'log' => [
        'level' => Logger::DEBUG,
    ],
    'validation' => [
        'method' => [
            'arguments_count_only' => true,
        ],
    ],
]);

```

### Output PHPJava operations

- Output debug trace if you want to see operation log:

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = JavaClass::load('HelloWorld');

$javaClass
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello", 'World']
    );

// Show debug traces.
$javaClass->debug();
```

- Output debug trace:

```
[method]
public static void main(java.lang.String[])

[code]
<0xb2> <0x00> <0x02> <0x2a> <0x03> <0x32> <0xb6> <0x00> <0x03> <0xb2> <0x00> <0x02> <0x2a> <0x04> <0x32> <0xb6> <0x00> <0x03> <0xb2> <0x00>
<0x02> <0x2a> <0x05> <0x32> <0xb6> <0x00> <0x03> <0xb1>

[executed]
      PC | OPCODE | MNEMONIC             | OPERANDS   | LOCAL STORAGE  
---------+--------+----------------------+------------+-----------------
       0 | 0xB2   | getstatic            | 0          | 1              
       3 | 0x2A   | aload_0              | 1          | 1              
       4 | 0x03   | iconst_0             | 2          | 1              
       5 | 0x32   | aaload               | 3          | 1              
       6 | 0xB6   | invokevirtual        | 2          | 1              
       9 | 0xB2   | getstatic            | 0          | 1              
      12 | 0x2A   | aload_0              | 1          | 1              
      13 | 0x04   | iconst_1             | 2          | 1              
      14 | 0x32   | aaload               | 3          | 1              
      15 | 0xB6   | invokevirtual        | 2          | 1              
      18 | 0xB2   | getstatic            | 0          | 1              
      21 | 0x2A   | aload_0              | 1          | 1              
      22 | 0x05   | iconst_2             | 2          | 1              
      23 | 0x32   | aaload               | 3          | 1              
      24 | 0xB6   | invokevirtual        | 2          | 1              
      27 | 0xB1   | return               | 0          | 1              
---------+--------+----------------------+------------+-----------------
```

- **[method]** shows the called method.
- **[code]** shows the JVM's real programs.
- **[executed]** shows the executed programs.
  - **PC** shows the Program Counter.
  - **OPCODE** shows the Operation Codes.
  - **MNEMONIC** shows the names of the Operation Codes.
  - **OPERANDS** shows the stacked items on memory.
  - **LOCAL STORAGE** shows the stacked items on a method.

## About big number calculation
- In normally, PHP cannot calculate big numbers as such as `long` and `double` types.
  But, PHPJava uses external `Math` library for covering above problems.
  And, PHPJava to use Java's type as below comparison table.
  Therefore, we recommend to cast them to `string` on PHPJava.
  And, if it can be calculated with 64-bitPHP, PHPJava uses PHP's arithmetic operations.
  
## Types of Java 
- The comparison table of Java and PHPJava is shown below:

| Java | PHPJava |
|:-----|:--------|
| null | null |
| boolean | \PHPJava\Kernel\Types\\_Boolean (including `__toString`) |
| char | \PHPJava\Kernel\Types\\_Char (including `__toString`) |
| byte | \PHPJava\Kernel\Types\\_Byte (including `__toString`) |
| short | \PHPJava\Kernel\Types\\_Short (including `__toString`) |
| int | \PHPJava\Kernel\Types\\_Int (including `__toString`) |
| long | \PHPJava\Kernel\Types\\_Long (including `__toString`) |
| float | \PHPJava\Kernel\Types\\_Float (including `__toString`) |
| double | \PHPJava\Kernel\Types\\_Double (including `__toString`) |

## Run Kotlin on the PHPJava
Do you wanna run Kotlin on the PHPJava? Are you serious?
Haha, yes, you can, but this feature is currently experimental.

### Quick Start

1) Write Kotlin:

```kotlin
fun main(args: Array<String>) {
    println("Hello World!")
}
```

2) Compile Kotlin:
```
$ kotlinc HelloWorld.kt -include-runtime -d HelloWorld.jar
```

3) Execute JAR:

```php
<?php
use PHPJava\Core\JavaArchive;

$jar = new JavaArchive(__DIR__ . '/HelloWorld.jar');
$jar->execute([]);
```

You'll get the result: `Hello World!`.

## Run unit tests

- To run a PHPUnit test:
```
$ ./vendor/bin/phpunit tests
```

- To run PHP Coding standards test:

```
$ ./vendor/bin/phpcs --standard=phpcs.xml src
```

- To run all tests:

```
$ composer run tests
```

## Reference
- [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html)

## License
MIT
