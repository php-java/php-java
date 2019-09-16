# PHPJava Intermediate Code Compiler
# What is PHPJava Intermediate Code Compiler?
The PHPJava Intermediate Code Compiler is PHPJava's another feature that generate intermediate code for JVM with using provided API.  
And, This is able to self-hosting  generated intermediate code on PHPJava.
But This is an experimental implementation. 

# Get started
The following is an example of output `Hello World`.

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Attributes\Architects\Operation;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Compiler\Builder\Collection\Attributes;
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Attribute;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;
use PHPJava\Compiler\Builder\Structures\Info\ClassInfo;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Structures\Info\MethodrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\FieldrefInfo;
use PHPJava\Compiler\Builder\Structures\Info\NameAndTypeInfo;
use PHPJava\Compiler\Builder\Structures\Info\StringInfo;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Builder\Types\Uint16;
use PHPJava\Compiler\Builder\Types\Uint8;
use PHPJava\Compiler\Compiler;
use PHPJava\Kernel\Maps\OpCode;
use PHPJava\Kernel\Resolvers\SDKVersionResolver;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\io\PrintStream;
use PHPJava\Packages\java\lang\_String;

$constantPool = new ConstantPool();
$finder = new ConstantPoolFinder($constantPool);

[$majorVersion, $minorVersion] = SDKVersionResolver::resolveByVersion(8);

$compiler = new Compiler(
    (new ClassFileStructure())
        ->setMinorVersion($minorVersion)
        ->setMajorVersion($majorVersion)
        ->setConstantPool(
            $constantPool
                ->add(new Utf8Info('Hello World!'))
                ->add(new Utf8Info('HelloWorld'))
                ->add(new Utf8Info('java/lang/Object'))
                ->add(new Utf8Info('java/lang/System'))
                ->add(new Utf8Info('out'))
                ->add(new Utf8Info('Ljava/io/PrintStream;'))
                ->add(new Utf8Info('java/io/PrintStream'))
                ->add(new Utf8Info('println'))
                ->add(new Utf8Info('Code'))
                ->add(new Utf8Info('main'))
                ->add(
                    new MethodrefInfo(
                        $finder->find(ClassInfo::class, 'java/lang/Object'),
                        $finder->find(NameAndTypeInfo::class, '<init>', '()V')
                    )
                )
                ->add(
                    new FieldrefInfo(
                        $finder->find(ClassInfo::class, 'java/lang/System'),
                        $finder->find(
                            NameAndTypeInfo::class,
                            'out',
                            (new Descriptor())
                                ->addArgument(PrintStream::class)
                                ->make()
                        )
                    )
                )
                ->add(
                    new StringInfo(
                        $finder->find(Utf8Info::class, 'Hello World!')
                    )
                )
                ->add(
                    new MethodrefInfo(
                        $finder->find(ClassInfo::class, 'java/io/PrintStream'),
                        $finder->find(
                            NameAndTypeInfo::class,
                            'println',
                            (new Descriptor())
                                ->addArgument(_String::class)
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    )
                )
                ->add(
                    new ClassInfo(
                        $finder->find(Utf8Info::class, 'HelloWorld')
                    )
                )
                ->add(
                    new ClassInfo(
                        $finder->find(Utf8Info::class, 'java/lang/Object')
                    )
                )
                ->add(new Utf8Info('<init>'))
                ->add(
                    new Utf8Info(
                    (new Descriptor())
                        ->setReturn(_Void::class)
                        ->make()
                    )
                )
                ->add(
                    new Utf8Info(
                        (new Descriptor())
                            ->addArgument(_String::class, 1)
                            ->setReturn(_Void::class)
                            ->make()
                    )
                )
                ->add(
                    new NameAndTypeInfo(
                        $finder->find(Utf8Info::class, '<init>'),
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    )
                )
                ->add(
                    new ClassInfo(
                        $finder->find(Utf8Info::class, 'java/lang/System')
                    )
                )
                ->add(
                    new NameAndTypeInfo(
                        $finder->find(Utf8Info::class, 'out'),
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(PrintStream::class)
                                ->make()
                        )
                    )
                )
                ->add(
                    new ClassInfo(
                        $finder->find(Utf8Info::class, 'java/io/PrintStream')
                    )
                )
                ->add(
                    new NameAndTypeInfo(
                        $finder->find(Utf8Info::class, 'println'),
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(_String::class)
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    )
                )
                ->add(new Utf8Info(
                    (new Descriptor())
                        ->addArgument(_String::class)
                        ->setReturn(_Void::class)
                        ->make()
                ))
                ->toArray()
        )
        ->setAccessFlags(
            (new \PHPJava\Compiler\Builder\Signatures\ClassAccessFlag())
                ->enableSuper()
                ->make()
        )
        ->setThisClass($finder->find(ClassInfo::class, 'HelloWorld'))
        ->setSuperClass($finder->find(ClassInfo::class, 'java/lang/Object'))
        ->setMethods(
            (new Methods())
                ->add(
                    (new Method(
                        (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                            ->enablePublic()
                            ->make(),
                        $finder->find(
                            Utf8Info::class,
                            '<init>'
                        ),
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    ))
                        ->setAttributes(
                            (new Attributes())
                                ->add(
                                    (new Code($finder->find(Utf8Info::class, 'Code')))
                                        ->setMaxStacks(1)
                                        ->setMaxLocals(1)
                                        ->setCode(
                                            (new Operation())
                                                ->add(OpCode::_aload_0)
                                                ->add(
                                                    OpCode::_invokespecial,
                                                    [
                                                        [
                                                            Uint16::class,
                                                            $finder->find(
                                                                MethodrefInfo::class,
                                                                'java/lang/Object',
                                                                '<init>',
                                                                (new Descriptor())
                                                                    ->setReturn(_Void::class)
                                                                    ->make()
                                                            ),
                                                        ],
                                                    ]
                                                )
                                                ->add(OpCode::_return)
                                        )
                                )
                                ->toArray()
                        )
                )
                ->add(
                    (new Method(
                        (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                            ->enablePublic()
                            ->enableStatic()
                            ->make(),
                        $finder->find(Utf8Info::class, 'main'),
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(_String::class, 1)
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    ))
                        ->setAttributes(
                            (new Attributes())
                                ->add(
                                    (new Code($finder->find(Utf8Info::class, 'Code')))
                                        ->setMaxStacks(2)
                                        ->setMaxLocals(1)
                                        ->setCode(
                                            (new Operation())
                                                ->add(
                                                    OpCode::_getstatic,
                                                    [
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
                                                ->add(
                                                    OpCode::_ldc,
                                                    [
                                                        [
                                                            Uint8::class,
                                                            $finder->find(
                                                                StringInfo::class,
                                                                'Hello World!'
                                                            ),
                                                        ],
                                                    ]
                                                )
                                                ->add(
                                                    OpCode::_invokevirtual,
                                                    [
                                                        [
                                                            Uint16::class,
                                                            $finder->find(
                                                                MethodrefInfo::class,
                                                                'java/io/PrintStream',
                                                                'println',
                                                                (new Descriptor())
                                                                    ->addArgument(_String::class)
                                                                    ->setReturn(_Void::class)
                                                                    ->make()
                                                            ),
                                                        ],
                                                    ]
                                                )
                                                ->add(OpCode::_return)
                                        )
                                )
                                ->toArray()
                        )
                )
                ->toArray()
        )
);

$compiler->compile(fopen('HelloWorld.class', 'w+'));
```

Run `java` command after `HelloWorld.class` file generated.
```
$ java HelloWorld
```

You'll get `Hello World!`

# How to use?

## ClassFileStructure Builder

`ClassFileStructure` Builder is a building class for class file structure definition.
This is supporting class file structure definition by setting required parameters and values when run `java` command. 

`ClassFileStructure` Builder require to call and set below APIs. 

| Required? | Method name | Summary |
| --- | ------- | ---- |
| Required | `setMinorVersion(int)` | Set minor version of the class file structure. This value is able to get Native Version by using `SDKVersionResolver::resolveByVersion` method. |
| Required | `setMajorVersion(int)` | Set major version of the class file structure. This value is able to get Native Version by using `SDKVersionResolver::resolveByVersion` method. |
| Required | `setConstantPool(EntryInterface[])` | Set entries of the Constant Pool. |
| Required | `setAccessFlags(int)` | Set an AccessFlags for current class. You need to specify by generating with `AccessFlag Signature Builder` or set integer number directly. |
| Required | `setThisClass(FinderResultInterface)` | Set mapping current class from the Constant Pool. Pass a return object from `ConstantPoolFinder` when find an entry on ConstantPool. |
| Required | `setSuperClass(FinderResultInterface)` | Set mapping super class from the Constant Pool. Pass a return object from `ConstantPoolFinder` when find an entry on ConstantPool. |
|          | `setInterfaces(EntryInterface[])` | Set interface entries of the class file structure. This feature is **not implemented** yet. | 
|          | `setFields(EntryInterface[])` | Set field entries of the class file structure. This feature is **not implemented** yet.|
|          | `setMethods(EntryInterface[])` | Set method entries of the class file structure. The definition method is required adding a `Method` entry on `EntryCollection`. |
|          | `setAttributes(EntryInterface[])` | Set attribute entries of the class file structure. |

## ConstantPoolFinder
`ConstantPoolFinder` is a finder which is able to find for an entry from ConstantPool.
By this approach, you do not need to understand the Constant Pool entry number and you can refer an entry number from Constant Pool at any time.

An example is below for using this feature.
```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\FinderException;

// Define EntryCollection of ConstantPool. 
$constantPool = new ConstantPool();

// Pass a EntryCollection into Finder.
$finder = new ConstantPoolFinder($constantPool);

// Register an entry
$constantPool
    ->add(new Utf8Info('Hello World!'));

try {
    // Start to find
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
    );
    
    // In case of you need to run now.
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
        ->getResult()
    );
} catch (FinderException $e) {
    // Not found when use getResult method.
    printf("Unfortunately, Not found an entry.");
}
```

`ConstantPoolFinder` is **not an immediate execution** after you call `find` method because it is a lazy evaluation. 
This is started to find at compiling.

You can find entries below.

| Entry name       | Argument size | Example |
| --------------- | :---: | --- |
| Utf8Info        | 1     | `$finder->find(Utf8Info::class, 'Hello World!')` |
| ClassInfo       | 1     | `$finder->find(ClassInfo::class, 'HelloWorld')` |
| StringInfo      | 1     | `$finder->find(StringInfo::class, 'Hello World!')`  |
| NameAndTypeInfo | 2     | `$finder->find(NameAndTypeInfo::class, '<init>', (new Descriptor())->setReturn(_Void::class)->make())`  |
| MethodrefInfo   | 3     | `$finder->find(MethodrefInfo::class, 'java/io/PrintStream', 'println', (new Descriptor())->addArgument(_String::class)->setReturn(_Void::class)->make())`  |
| FieldrefInfo    | 3     | `$finder->find(FieldrefInfo::class, 'java/lang/System', 'out', (new Descriptor())->addArgument(PrintStream::class)->make())`  |


If you need to immediately execute, then requiring to call `getResult` method after calling `find` method.
And, If you need to use entries newly, you need to disable cache with `enableCache(false)` or remove cache with `clearCaches()` because Finder use Cache after call 2 times.

## AccessFlag Signature Builder
`AccessFlag Signature Builder` is a building class for access flag generating kindly.
if you use this, you don't need to understand access flags number combinations for building class file structure.

An example is below for using AccessFlag Signature Builder.

### In case of Class Access Flag:

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

// Below is same as above.
var_dump(
    \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_PUBLIC
     | \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_SUPER
);
```

You can use APIs below.

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

### In case of Method Access Flag:

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

// Below is same as above.
var_dump(
    \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_PUBLIC
    | \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_STATIC
);
```

You can use APIs below.

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
`Descriptor Signature Builder` is a building class for generating an intermediate code of string with method parameters and return signature.   
In `Java`'s case, compiler will understands `String[] args` and `void` to `([Ljava/lang/String;)V` when compile `public static void main (String[] args)`.
But we cannot understand efficiently it therefore resolve it with this builder class.


An example is below for using `Descriptor Signature Builder`.

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\lang\_String;

(new Descriptor())
    // Add a parameter. addArgument can call any times.
    ->addArgument(
        // java.lang.String of one parameter
        _String::class, 
        // Set array depth. Default is zero.
        1
    )
    // Set return value
    ->setReturn(
        // Return value is a void.
        _Void::class
    )
    ->make();

// Below is same as above.
var_dump(
    '([Ljava/lang/String;)V'
);
```

## Interface Entry Builder
_This feature is not implemented yet._

## Fields Entry Builder
_This feature is not implemented yet._

## Method Entry Builder
`Method Entry Builder` isa building class which is  supporting to generate an entry when adding an entry on `Methods` of a `EntryCollection`.
By using this class, easy to add a method into class file structure.

An example is below.

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
                // Add a method on methods collection.
                ->add(
                    // Define method structure according to method_info attribute on JVM Spec.
                    (new Method(
                        // Defined method access flags.
                        (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                            ->enablePublic()
                            ->enableStatic()
                            ->make(),
                        // Find a method name from ConstantPool.
                        $finder->find(
                            Utf8Info::class, 
                            'main'
                        ),
                        // Find a descriptor and return types from Constant Pool.
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(_String::class, 1)
                                ->setReturn(_Void::class)
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
`Code Attribution Builder` is a building class which is extending `Attribute` Builder.
In normally, `Attribute` Builder is designed architecture which is passing only binary string by [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-4.html#jvms-4.7).  
`Code Attribution Builder` supports generation of a binary string for the Attribute classes because it is too early for a human being to write a binary string by hand and it is almost impossible to generate them manually; but we ignore crazy binary-string lovers and recluses.

An example is below .

```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Kernel\Maps\OpCode;


(new Code($finder->find(Utf8Info::class, 'Code')))
    ->setMaxStacks(0)
    ->setMaxLocals(0)
    // Set return opcode only.
    ->setCode(
        pack('C', OpCode::_return)
    )
    ->getValue();

// Below is same as above.
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

`Code Attribution Builder` providing APIs is below.


| Method name | Summary |
| ------- | --- |
| `setMaxStacks(int)` | Specify max stacking size for operand stack. This is deprecated by future. |
| `setMaxLocals(int)` | Specify max local variable size for local variables. This is deprecated by future. |
| `setCode(string)` |  Define opcode and operands. |
| `setExceptionTable(ExceptionTable[])` | Define throwing exception tables. This is **not implemented** yet. |
| `setAttributes(Attributes[])` | Set attributes for Code Attribute. |  
| `getValue()` | Generate binary string of formatted `Code Attribute` with specified parameters. |  


## Operation Code Builder
`Operation Code Builder` is a building class which supports generation of operation codes and operands for passing to `setCode` on `Code Attribution Builder.` 
If you use this class, You are able to generate operation codes that you don't need to understand a binary string.

An example is below.

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

use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\lang\_String;

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
            // Pass position of StringInfo on Constant Pool
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
            // Pass position of Methodref on Constant Pool.
            [
                Uint16::class,
                $finder->find(
                    MethodrefInfo::class,
                    'java/io/PrintStream',
                    'println',
                    (new Descriptor())
                        ->addArgument(_String::class)
                        ->setReturn(_Void::class)
                        ->make()
                ),
            ],
        ]
    )
    // Set return command.
    ->add(OpCode::_return);
```

Operation Code is able to specify arguments, this is a feature based on Java Virtual Machine.
And, `Uint8` and `Uint16` means a parameters length that having below meanings.

| Class | Meaning |
| ---- | --- |
| PHPJava\Compiler\Builder\Types\Uint8 | Meaning 1 byte. |
| PHPJava\Compiler\Builder\Types\Uint16 | Meaning 2 bytes. In other words, it is same as a short. |
| PHPJava\Compiler\Builder\Types\Uint32 | Meaning 4 bytes. In other words, it is same as a int. |
| PHPJava\Compiler\Builder\Types\Uint64 | Meaning 8 bytes. In other words, it is same as a long. |

You also see [Java Virtual Machine](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-6.html) to understand parameter length.