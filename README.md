# PHPJava - JVM Emulator by PHP
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
![Compatibility](https://img.shields.io/badge/Compatibility-7.2%20and%20greater-green.svg) 
[![Build Status](https://travis-ci.org/memory-agape/php-java.png?branch=master)](https://travis-ci.org/memory-agape/php-java)
[![Total Downloads](https://poser.pugx.org/memory-agape/php-java/downloads)](https://packagist.org/packages/memory-agape/php-java)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
<p align="center"><img src="./docs/img/phpjava.jpg" height="300"></p>

# What is the PHPJava?
The PHPJava is experimental library which emulate JVM (a.k.a. Java Virtual Machine) by PHP 🐘
The PHPJava proceed to read binary from pre-compiled Java file(s) ☕
This project reference to [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html) documentation when We makes.

We welcoming to contributions this project 💪

## Requirements
- PHP >= 7.2
- Composer
- ext-zip

## Not currently supported
Sorry, I do not have enough time (T_T) 

- Implements
- Event
- Many built-in libraries (ex. java.lang.xxx, java.io.xxx and so on) 
- etc...

## Quick start
- 1) Install the PHPJava into your project.
```
$ composer require memory-agape/php-java
```

- 2) Write Java
```java
class HelloWorld 
{
    public static void main(String[] args)
    {
        System.out.println(args[0] + " " + args[1]);
    }
}
```

- 3) Compile Java
```
$ javac -UTF8 /path/to/HelloWorld.java
```

- 4) Call to main method as following.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

(new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class')))
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello", 'World']
    );
```

- 5) Get a result
```
$ php /path/to/HelloWorld.php
Hello World
```

## Java Archive (Execute to *.jar file)

- 1) Build your java files to class. Building example is below.
```
$ javac -encoding UTF8 -d build src/*
$ cd build && jar -cvfe ../Test.jar Test *
```

- 2) execute jar on PHPJava with enrtypoint or your targeted method.
```php
<?php
use PHPJava\Core\JavaArchive;

(new JavaArchive('Test.jar'))->execute();

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

### Get/Set a static fields

- ex) Set or Get a static fields as follows.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$staticFieldAccessor = (new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class')))
    ->getInvoker()
    ->getStatic()
    ->getFields();

// Set
$staticFieldAccessor->set('fieldName', 'value');

// Get
echo $staticFieldAccessor->get('fieldName');
```

### Call to a static method

- ex) Call to static method as follows.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

(new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class')))
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

// Or if called method have return value then you can store to variable.
$result = (new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class')))
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

// The $result you want is output.
echo $result;
```


### Get/Set a dynamic fields
If you want to get/set dynamic fields, you need call to `construct` method on Java by PHPJava.

- ex) Call dynamic field as following.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$javaClass = new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class'));

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

### Call to a dynamic method
If you want to get/set dynamic method (same as field), you need call to `construct` method on Java by PHPJava.

- ex) Call dynamic method as following.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$dynamicMethodAccessor = (new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class')))
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

// Or if called method have return value then you can store to variable.
$dynamicMethodAccessor
   ->call(
       'methodWithSomethingReturn',
       $firstArgument,
       $secondArgument,
       $thirdArgument,
       ...
   );

// The $result you want is output.
echo $result;
```

### Output PHPJava operations

- Output debug trace as following if you want to show operated log.

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$javaClass = new JavaClass(new JavaClassFileReader('/path/to/HelloWorld.class'));

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

- Outputted debug trace is below.

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

- **[method]** is showing called method.
- **[code]** is showing JVM's real programs.
- **[executed]** is showing executed programs.
  - **PC** is showing Program Counter.
  - **OPCODE** is showing Operation Codes.
  - **MNEMONIC** is naming Operation Codes.
  - **OPERANDS** is showing stacked items on memory.
  - **LOCAL STORAGE** is showing stacked items on a method.

## PHP problems
- **Problem 1:** The PHP is cannot calculating big numbers because of PHP is different to the Java.
  But the PHPJava use `bcmath` functions and `gmp` functions to a certain extent to cover to calculate.
  The PHPJava return valued is mixed why therefore We recommend to cast to `string` on the PHPJava.

- **Problem 2:** The PHPJava cannot cover to Java's types completely because of PHP is different to the Java.
  The Java and the PHPJava comparison table is below.
  
|Java        |PHPJava         |
|:-------------:|:-------------:|
|null |null |
|boolean |\PHPJava\Kernel\Types\\_Boolean (including `__toString`) |
|char |\PHPJava\Kernel\Types\\_Char (including `__toString`), string |
|byte |\PHPJava\Kernel\Types\\_Byte (including `__toString`), string |
|short |\PHPJava\Kernel\Types\\_Short (including `__toString`), string, int |
|int |\PHPJava\Kernel\Types\\_Int (including `__toString`), string, int |
|long |\PHPJava\Kernel\Types\\_Long (including `__toString`), string, int |
|float |\PHPJava\Kernel\Types\\_Float (including `__toString`), string, float |
|double |\PHPJava\Kernel\Types\\_Char (including `__toString`), string, float |

- **Problem 3:** The PHPJava cannot calculate big numbered `double` and `float` values because of `gmp_pow` cannot calculate negative exponents.
  So the PHPJava use built-in functions which is `pow`.

## Run unit tests

- PHPUnit test is below.
```
$ ./vendor/bin/phpunit tests
```

- PHP Coding standards testing is below.

```
$ ./vendor/bin/phpcs --standard=phpcs.xml src
```

- All testing is below.

```
$ composer run tests
```

## Reference
- [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html)

## License
MIT