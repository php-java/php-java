# PHPJava - JVM Emulator by PHP
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
![Compatibility](https://img.shields.io/badge/Compatibility-7.2%20and%20greater-green.svg) 
[![Build Status](https://travis-ci.org/memory-agape/php-java.png?branch=master)](https://travis-ci.org/memory-agape/php-java)
[![Total Downloads](https://poser.pugx.org/memory-agape/php-java/downloads)](https://packagist.org/packages/memory-agape/php-java)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
<p align="center"><img src="./docs/img/phpjava.jpg" height="300"></p>

# What is the PHPJava?
The PHPJava is an experimental library which emulates JVM (a.k.a. Java Virtual Machine) by PHP 🐘
The PHPJava reads binary from pre-compiled Java file(s) ☕
This project referred to [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html) documentation at the time we made it.

We are welcoming any contributions to this project 💪

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
- 1) Install the PHPJava into your project:
```
$ composer require memory-agape/php-java
```

- 2) Write Java:
```java
class HelloWorld 
{
    public static void main(String[] args)
    {
        System.out.println(args[0] + " " + args[1]);
    }
}
```

- 3) Compile Java:
```
$ javac -UTF8 /path/to/HelloWorld.java
```

- 4) Call the main method as follows:

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

- 5) Get the result
```
$ php /path/to/HelloWorld.php
Hello World
```

## Java Archive (Execute to *.jar file)

- 1) Build your Java files to class. An example is shown below:
```
$ javac -encoding UTF8 -d build src/*
$ cd build && jar -cvfe ../Test.jar Test *
```

- 2) Execute jar on PHPJava with either an enrtypoint or your targeted method.
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

### Get/Set static fields

- ex) Set or Get static fields as follows:

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

### Call a static method

- ex) Call a static method as follows:

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


### Get/Set dynamic fields
If you want to get/set dynamic fields, you need to call the `construct` method on Java by PHPJava.

- ex) Call dynamic field as follows:

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

### Call a dynamic method
If you want to get/set dynamic method (same as a field), you need to call the `construct` method on Java by PHPJava.

- ex) Call dynamic method as follows:

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

### Call ambiguous method into Java from PHP
- PHP types are ambiguous than Java.
- You may want to call a methods in PHP that contain long type in Java.
In its case, you can call a method as follows:

#### ex. ) Wrap with `\PHPJava\Kernel\Types\_Long`. We recommend this.
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


#### ex. ) Set `false` to strict mode within options.
##### In PHP
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$javaClass = new JavaClass(
    new JavaClassFileReader('Test'),
    [
        'strict' => false,
    ]
);
```

### Runtime options
- Available options on `JavaClass` or `JavaArchive` is below:

|Options        | Value | Default | Description         |Targeted         |
|:-------------:|:-------------:|:-------------:|:-------------:|:-------------:|
| max_stack_exceeded | integer | 9999 | Execute more than the specified number of times be stopped the operation. | JavaClass | 
| strict | boolean | true | If strict mode is `true` then execute method, variables and so on with strict. But if strict mode is `false` then execute ambiguously method, variable and etc in PHPJava. | Both |
| validation.method.arguments_count_only | boolean | false | If this mode `true` then ClassResolver validate arguments size only. | JavaClass |

- For example:
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\JavaClassFileReader;

$javaClass = new JavaClass(
    new JavaClassFileReader('Test'),
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

### Output PHPJava operations

- Output debug trace as follows if you want to show operation log:

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

- Output debug trace is shown below:

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

## PHP problems
- **Problem 1:** PHP cannot calculate big numbers because PHP is different from Java.
  But PHPJava uses `bcmath` functions and `gmp` functions to a certain extent to cover such calculations.
  Therefore, PHPJava returns a mixed value and we recommend to cast them to `string` on PHPJava.

- **Problem 2:** PHPJava cannot completely cover Java types because PHP is different from Java.
  The comparison table of Java and PHPJava is shown below:
  
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

- **Problem 3:** PHPJava cannot calculate big number of `double` and `float` because `gmp_pow` cannot calculate negative exponents. So, PHPJavas use built-in function `pow`.

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
