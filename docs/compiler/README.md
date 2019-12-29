# PHPJava Intermediate Code Compiler
# What is PHPJava Intermediate Code Compiler?
The PHPJava Intermediate Code Compiler is another feature of PHPJava that generates intermediate code for JVM by using APIs.
This is capable of self-hosting generated intermediate codes on PHPJava. Note that this is an experimental implementation.

# DEMO
![DEMO](../img/php_compiler.gif)


# Get started
The following is an example that outputs `Hello World`.

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Compiler\Lang\Assembler\Enhancer\ConstantPoolEnhancer;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Packages\java\lang\Object_;
use PHPJava\Packages\java\io\PrintStream;
use PHPJava\Packages\java\lang\String_ ;
use PHPJava\Packages\java\lang\System;
use PHPJava\Kernel\Types\Void_ ;
use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Signatures\ClassAccessFlag;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Compiler\Builder\Generator\Operation\Operand;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;

$constantPool = new ConstantPool();
$finder = new ConstantPoolFinder($constantPool);
[$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(8);

$enhancedConstantPool = ConstantPoolEnhancer::factory(
    $constantPool,
    $finder
);

$className = 'HelloWorld';

$enhancedConstantPool
    ->addString('Hello PHPJava Compiler!')
    ->addClass(Object_::class)
    ->addClass($className)
    ->addClass(System::class)
    ->addClass(PrintStream::class)
    ->addFieldref(
        System::class,
        'out',
        (new Descriptor())
            ->addArgument(PrintStream::class)
            ->make()
    )
    ->addMethodref(
        PrintStream::class,
        'println',
        (new Descriptor())
            ->addArgument(String_::class)
            ->setReturn(Void_::class)
            ->make()
    )
    ->addNameAndType(
        'main',
        (new Descriptor())
            ->addArgument(String_::class, 1)
            ->setReturn(Void_::class)
            ->make()
    );

$compiler = new Compiler(
    (new ClassFileStructure())
        ->setMinorVersion($minorVersion)
        ->setMajorVersion($majorVersion)
        ->setAccessFlags(
            (new ClassAccessFlag())
                ->enableSuper()
                ->make()
        )
        ->setThisClass($enhancedConstantPool->findClass($className))
        ->setSuperClass($enhancedConstantPool->findClass(Object_::class))
        ->setMethods(
            (new Methods())
                ->add(
                    (new Method(
                        (new MethodAccessFlag())
                            ->enablePublic()
                            ->enableStatic()
                            ->make(),
                        $className,
                        'main',
                        (new Descriptor())
                            ->addArgument(String_::class, 1)
                            ->setReturn(Void_::class)
                            ->make()
                    ))
                        ->setConstantPool($constantPool)
                        ->setConstantPoolFinder($finder)
                        ->setAttributes(
                            (new Attributes())
                                ->add(
                                    (new Code($enhancedConstantPool->findUtf8('Code')))
                                        ->setConstantPool($constantPool)
                                        ->setConstantPoolFinder($finder)
                                        ->setCode(
                                            [
                                                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                    OpCode::_getstatic,
                                                    Operand::factory(
                                                        Uint16::class,
                                                        $enhancedConstantPool->findField(
                                                            System::class,
                                                            'out',
                                                            (new Descriptor())
                                                                ->addArgument(PrintStream::class)
                                                                ->make()
                                                        )
                                                    )
                                                ),
                                                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                    OpCode::_ldc,
                                                    Operand::factory(
                                                        Uint8::class,
                                                        $enhancedConstantPool->findString('Hello PHPJava Compiler!')
                                                    )
                                                ),
                                                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                    OpCode::_invokevirtual,
                                                    Operand::factory(
                                                        Uint16::class,
                                                        $enhancedConstantPool->findMethod(
                                                            PrintStream::class,
                                                            'println',
                                                            (new Descriptor())
                                                                ->addArgument(String_::class)
                                                                ->setReturn(Void_::class)
                                                                ->make()
                                                        )
                                                    )
                                                ),
                                                \PHPJava\Compiler\Builder\Generator\Operation\Operation::create(
                                                    OpCode::_return
                                                )
                                            ]
                                        )
                                        ->beginPreparation()
                                )
                                ->toArray()
                        )
                )
                ->toArray()
        )
        ->setConstantPool($constantPool->toArray())
);

$compiler->compile(fopen($className . '.class', 'w+'));
```

Run `java` command after the `HelloWorld.class` file is generated.
```
$ java HelloWorld
```

You'll get `Hello World!`

*NOTICE: The `ConstantPool:toArray` decides Constant Pool entries.*
*For that reason, You should to add method, attribute and anymore before deciding the Constant Pool.*
*Because it has entry resolver as such as class name, method name and anymore, You cannot to add an entry if the Constant Pool entries are decided.*
*As a simple solution, you call `ConstantPool:toArray` at last.*

# How to use?

## ClassFileStructure Builder

`ClassFileStructure` Builder is a builder class that defines the structure of a class file.
This class helps the definition of a class file structure by setting the required parameters and values when running `java` command.

`ClassFileStructure` Builder requires call and set the APIs below.

| Required? | Method name | Summary |
| --- | ------- | ---- |
| Required | `setMinorVersion(int)` | Set the minor version of the class file structure. This value can be obtained by using `SDKVersionResolver::resolveByVersion`. |
| Required | `setMajorVersion(int)` | Set the major version of the class file structure. This value can be obtained by using `SDKVersionResolver::resolveByVersion`. |
| Required | `setConstantPool(EntryInterface[])` | Set the entries of the Constant Pool. |
| Required | `setAccessFlags(int)` | Set an AccessFlag for the current class. You need to either specify the value generated by `AccessFlag Signature Builder` or directly set the integer number. |
| Required | `setThisClass(FinderResultInterface)` | Set to which class it maps from the Constant Pool. Pass the result object returned by `ConstantPoolFinder`, which finds an entry on the ConstantPool. |
| Required | `setSuperClass(FinderResultInterface)` | Set mapping super class from the Constant Pool. Pass the result object returned by `ConstantPoolFinder`, which finds an entry on the ConstantPool. |
|          | `setInterfaces(EntryInterface[])` | Set the interface entries of the class file structure. This feature is **not yet implemented**. |
|          | `setFields(EntryInterface[])` | Set the field entries of the class file structure. This feature is **not yet implemented**. |
|          | `setMethods(EntryInterface[])` | Set the method entries of the class file structure. The defining method is required to add a `Method` entry on an `EntryCollection`. |
|          | `setAttributes(EntryInterface[])` | Set the attribute entries of the class file structure. |

## ConstantPoolFinder
`ConstantPoolFinder` is a finder that looks for an entry from the ConstantPool.
By this approach, you do not need to think of the entry index in the Constant Pool and you can refer to any entries from the Constant Pool at any time.

An example below uses this feature:
```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\FinderException;

// Define EntryCollection for the ConstantPool.
$constantPool = new ConstantPool();

// Pass an EntryCollection to a Finder.
$finder = new ConstantPoolFinder($constantPool);

// Register an entry
$constantPool
    ->add(new Utf8Info('Hello World!'));

try {
    // Start to find
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
    );

    // In case you need to run now.
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
        ->getResult()
    );
} catch (FinderException $e) {
    // Not found
    printf("Unfortunately, an entry not found");
}
```

`ConstantPoolFinder` is **not executed immediately** after you call `find` method because it is a lazy evaluation.
It instead starts to find one when compiled.

You can find by the entries shown below:

| Entry name      | Argument size | Example |
| --------------- | :---: | --- |
| Utf8Info        | 1     | `$finder->find(Utf8Info::class, 'Hello World!')` |
| ClassInfo       | 1     | `$finder->find(ClassInfo::class, 'HelloWorld')` |
| StringInfo      | 1     | `$finder->find(StringInfo::class, 'Hello World!')`  |
| NameAndTypeInfo | 2     | `$finder->find(NameAndTypeInfo::class, '<init>', (new Descriptor())->setReturn(Void_::class)->make())`  |
| MethodrefInfo   | 3     | `$finder->find(MethodrefInfo::class, 'java/io/PrintStream', 'println', (new Descriptor())->addArgument(String_::class)->setReturn(Void_::class)->make())`  |
| FieldrefInfo    | 3     | `$finder->find(FieldrefInfo::class, 'java/lang/System', 'out', (new Descriptor())->addArgument(PrintStream::class)->make())`  |


If you need to execute immediately, you are required to call the `getResult` method after calling the `find` method.
Furthermore, as the search results will be cached, you need to either disable cache by calling `enableCache(false)` or remove it by `clearCaches()` when the latest entries are required.

## AccessFlag Signature Builder
`AccessFlag Signature Builder` is a builder class that helps you generate access flags by means of a visually understandable method.
By using this class, you don't need to understand the proper combinations of the numeral flags for building a class file structure.

An example for using AccessFlag Signature Builder is shown below:

### Class Access Flags:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use \PHPJava\Compiler\Builder\Signatures\ClassAccessFlag;
(new ClassAccessFlag())
    // Define a public class
    ->enablePublic()
    // Define a super class
    ->enableSuper()
    // Make a string by specified parameters.
    ->make();

// Same as:
var_dump(
    \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_PUBLIC
     | \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_SUPER
);
```

You can use the APIs below.

| Access Flags |
| --------- |
| enablePublic |
| enableSuper |
| enableFinal |
| enableInterface |
| enableAbstract |
| enableSynthetic |
| enableEnum |
| enableModule |

### Method Access Flags:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
(new MethodAccessFlag())
    // Define a public method.
    ->enablePublic()
    // Define a static method.
    ->enableStatic()
    // Make a string by specified parameters.
    ->make();

// Same as:
var_dump(
    \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_PUBLIC
    | \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_STATIC
);
```

You can use the APIs below:

| Access Flags |
| --------- |
| enablePublic |
| enableStatic |
| enablePrivate |
| enableProtected |
| enableFinal |
| enableSynchronized |
| enableBridge |
| enableVarArgs |
| enableNative |
| enableAbstract |
| enableStrict |
| enableSynthetic |

## Descriptor Signature Builder
`Descriptor Signature Builder` is a builder class that helps you generate a string representation of an intermediate code with method parameters and its signatures.
For instance, `Java` interprets `String[] args` and `void` as `([Ljava/lang/String;)V` when `public static void main(String[] args)` compiles.
This builer class solves an issue where this interpretation is such an unefficient task for a human being.

To use `Descriptor Signature Builder`:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Kernel\Types\Void_ ;
use PHPJava\Packages\java\lang\String_ ;

(new Descriptor())
    // Add an argument. addArgument can be called any times.
    ->addArgument(
        // The first argument is a java.lang.String
        String_::class,
        // Set the depth of an array. Defaults to zero.
        1
    )
    // Set the return value
    ->setReturn(
        // The return value is void.
        Void_::class
    )
    ->make();

// Same as:
var_dump(
    '([Ljava/lang/String;)V'
);
```

## Interface Entry Builder
_This feature is not yet implemented._

## Fields Entry Builder
_This feature is not yet implemented._

## Method Entry Builder
`Method Entry Builder` is a builder class which helps generation of an entry when appending it to `Methods` that is an `EntryCollection`.
This class makes it easy to add a method to the class file structure.

An example is shown below:

```php
<?php
require __DIR__ . '/../../vendor/autoload.php';

use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;

$compiler = new Compiler(
    (new ClassFileStructure())
        // ...Omitted
        ->setMethods(
            (new Methods())
                // Add a method to a method collection.
                ->add(
                    // Define the method structure according to the method_info attribute in the JVM Spec.
                    (new Method(
                        // Defined the access flags of the method.
                        (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                            ->enablePublic()
                            ->enableStatic()
                            ->make(),
                        // Find a method name from the ConstantPool.
                        $finder->find(
                            Utf8Info::class,
                            'main'
                        ),
                        // Find a descriptor and the return types from the Constant Pool.
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(String_::class, 1)
                                ->setReturn(Void_::class)
                                ->make()
                        )
                    )
                    ->setAttributes(
                        // ...Omitted
                    )
                )
                ->toArray()
        )
);
```

## Code Attribution Builder
`Code Attribution Builder` is a builder class which extends `Attribute` Builder.
Originally, the architecture of the `Attribute` Builder is meant to pass only binary string by [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-4.html#jvms-4.7).
`Code Attribution Builder` supports generation of a binary string for the Attribute classes because it is too early for a human being to write a binary string by hand and it is almost impossible to generate them manually; but we ignore crazy binary-string lovers and recluses.

An example is shown below:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Kernel\Maps\OpCode;


(new Code($finder->find(Utf8Info::class, 'Code')))
    ->setMaxStacks(0)
    ->setMaxLocals(0)
    // Set the return opcode only.
    ->setCode(
        pack('C', OpCode::_return)
    )
    ->getValue();

// Same as:
var_dump(
    ""
    // attribute_name_index
    . pack('n', $finder->find(Utf8Info::class, 'Code')->getResult()->getEntryIndex()) //
    // attribute_length
    . pack('N', 2 + 2 + 4 + 1 + 2 + 2) // (u2 + u2 + u4 + u1 + u2 + u2)
    // max_stack
    . "\x00\x00"
    // max_locals
    . "\x00\x00"
    // code_length
    . "\x00\x00\x00\x01"
    // code
    . "\xB1"
    // exception_table_length
    . "\x00\x00"
    // attributes_count
    . "\x00\x00"
);
```

`Code Attribution Builder` provids the following APIs:


| Method name | Summary |
| ------- | --- |
| `setCode(string)` |  Define an opcode and operands. |
| `setExceptionTable(ExceptionTable[])` | Define an exception tables to be thrown. This is **not yet implemented**. |
| `setAttributes(Attributes[])` | Set the attributes for Code Attribute. |
| `getValue()` | Generate a binary string of formatted `Code Attribute` with the specified parameters. |


## Operation Code Builder
`Operation Code Builder` is a builder class which supports generation of operation codes and operands that are passed to the `setCode` on `Code Attribution Builder.`
If you use this class, you are able to generate operation codes so you no longer have to understand a binary string.

An example is shown below.

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Kernel\Maps\OpCode;

use PHPJava\Kernel\Types\Void_ ;
use PHPJava\Packages\java\lang\String_ ;

use PHPJava\Packages\java\io\PrintStream;

(new Operation())
    // Set getstatic Command
    ->add(
        OpCode::_getstatic,
        [
            // Pass position of Fieldref
            [
                Uint16::class,
                $finder->find(
                    FieldrefInfo::class,
                    'java/lang/System',
                    'out',
                    (new Descriptor())
                        ->addArgument(PrintStream::class)
                        ->make()
                ),
            ],
        ]
    )
    // Set ldc command
    ->add(
        OpCode::_ldc,
        [
            // Pass the position of StringInfo in the Constant Pool
            [
                Uint8::class,
                $finder->find(
                    StringInfo::class,
                    'Hello World!'
                ),
            ],
        ]
    )
    // Set invokevirtual Command
    ->add(
        OpCode::_invokevirtual,
        [
            // Pass the position of Methodref in the Constant Pool
            [
                Uint16::class,
                $finder->find(
                    MethodrefInfo::class,
                    'java/io/PrintStream',
                    'println',
                    (new Descriptor())
                        ->addArgument(String_::class)
                        ->setReturn(Void_::class)
                        ->make()
                ),
            ],
        ]
    )
    // Set the return command.
    ->add(OpCode::_return);
```

Operation Code can have arguments based on the specification of the Java Virtual Machine.
The `Uint8` and `Uint16` which appeared in the examples mean the size of the parameters to be passed that mean:

| Class | Meaning |
| ---- | --- |
| PHPJava\Compiler\Builder\Types\Uint8 | Mean to be 1 byte. |
| PHPJava\Compiler\Builder\Types\Uint16 | Mean to be 2 bytes. In other words, it is as same as a short. |
| PHPJava\Compiler\Builder\Types\Uint32 | Mean to be 4 bytes. In other words, it is as same as an int. |
| PHPJava\Compiler\Builder\Types\Uint64 | Mean to be 8 bytes. In other words, it is as same as a long. |

Also refer to [Java Virtual Machine](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-6.html) for the parameter length.