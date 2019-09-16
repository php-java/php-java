# PHPJava 中間コードコンパイラ
# What is PHPJava Intermediate Code Compiler?
PHPJava 中間コードコンパイラとは、いくつか提供している API を使用して JVM 上で動く中間コードを生成するための PHPJava のもう一つの機能です。
これは、与えられた引数をもとに中間コードを生成し、それ自身をセルフホスティングすることも可能です。
また、この機能はいくつか実験的な要素を含んでいます。

# Get started
`Hello World` を出力する一例です。

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

`HelloWorld.class` が生成されるので、 `java` コマンドで実行します。
```
$ java HelloWorld
```

結果は `Hello World!` が出力されます。

# How to use?

## ClassFileStructure Builder

`ClassFileStructure` Builder とは、クラスファイルの構造を定義するためのビルダークラスです。
`java` 実行時に必要な値を設定することによりクラスファイルの構造を生成する手助けをします。
`ClassFileStructure` Builder は下記の API をコールし、設定する必要があります。

| 必須 | メソッド名 | 概要 |
| --- | ------- | ---- |
| Required | `setMinorVersion(int)` | クラスファイルのマイナーバージョンを設定します。この値は `SDKVersionResolver::resolveByVersion` を使用して JDK のバージョンから逆引きで取得することが可能です。 |
| Required | `setMajorVersion(int)` | クラスファイルのメジャーバージョンを設定します。この値は `SDKVersionResolver::resolveByVersion` を使用して JDK のバージョンから逆引きで取得することが可能です。 |
| Required | `setConstantPool(EntryInterface[])` | Constant Pool に登録するエントリーを設定します。
| Required | `setAccessFlags(int)` | クラスに対するアクセス修飾子を設定します。この値は `AccessFlag Signature Builder` を用いて生成するか直接数字を指定します。 |
| Required | `setThisClass(FinderResultInterface)` | どのクラスにマッピングするかを設定します。これは Constant Pool からエントリーを探索する際に返される `ConstantPoolFinder` を用いた検索結果のオブジェクトを渡します。 |
| Required | `setSuperClass(FinderResultInterface)` | どの親クラスにマッピングするかを設定します。これは Constant Pool からエントリーを探索する際に返される `ConstantPoolFinder` を用いた検索結果のオブジェクトを渡します。 |
|          | `setInterfaces(EntryInterface[])` | クラスに実装されているインタフェースのエントリーを定義します。これは現時点では **未実装** です。 | 
|          | `setFields(EntryInterface[])` | クラスに実装されているフィールドのエントリーを定義します。これは現時点では **未実装** です。|
|          | `setMethods(EntryInterface[])` | クラスに定義されているメソッドのエントリーを定義します。定義するメソッドは `EntryCollection` 上で `Method` エントリーを追加していく必要があります。 |
|          | `setAttributes(EntryInterface[])` | クラスに定義されている属性のエントリーを定義します。 |

## ConstantPoolFinder
`ConstantPoolFinder` とは、Constant Pool からエントリーを探索するための機能です。これにより、登録されたエントリーの位置を考える必要がなくなり、
好きなタイミングで Constant Pool のエントリーを参照することができます。

この機能は主に下記の様に使用します。

```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Collection\ConstantPool;
use PHPJava\Compiler\Builder\Finder\ConstantPoolFinder;
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Exceptions\FinderException;

// ConstantPool の EntryCollection を定義します。 
$constantPool = new ConstantPool();

// 定義した EntryCollection を Finder に渡します。
$finder = new ConstantPoolFinder($constantPool);

// エントリーを定義します。
$constantPool
    ->add(new Utf8Info('Hello World!'));

try {
    // 検索を行います。
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
    );
    
    // 即時実行の場合は下記のようにします。
    var_dump(
        $finder->find(Utf8Info::class, 'Hello World!')
        ->getResult()
    );
} catch (FinderException $e) {
    // 実行した際に見つからなかった場合
    printf("残念！エントリーは見つかりませんでした。");
}
```

また、 `ConstantPoolFinder` は遅延評価であるため `find` をコールした直後に**即時実行**しません。
コンパイル時に初めて検索が行われます。

下記のエントリーの検索が可能です。


| エントリー名       | 引数の数 | 例 |
| --------------- | :---: | --- |
| Utf8Info        | 1     | `$finder->find(Utf8Info::class, 'Hello World!')` |
| ClassInfo       | 1     | `$finder->find(ClassInfo::class, 'HelloWorld')` |
| StringInfo      | 1     | `$finder->find(StringInfo::class, 'Hello World!')`  |
| NameAndTypeInfo | 2     | `$finder->find(NameAndTypeInfo::class, '<init>', (new Descriptor())->setReturn(_Void::class)->make())`  |
| MethodrefInfo   | 3     | `$finder->find(MethodrefInfo::class, 'java/io/PrintStream', 'println', (new Descriptor())->addArgument(_String::class)->setReturn(_Void::class)->make())`  |
| FieldrefInfo    | 3     | `$finder->find(FieldrefInfo::class, 'java/lang/System', 'out', (new Descriptor())->addArgument(PrintStream::class)->make())`  |


これを即時実行したい場合は `find` に続けて  `getResult()` メソッドをコールする必要があります。
なお、検索結果は 2 回目以降はキャッシュが使用されるため、常に最新のエントリーの情報が知りたい場合は `enableCache(false)` をコールして
キャッシュを無効にするか `clearCaches()` をコールして、キャッシュを削除する必要があります。

## AccessFlag Signature Builder
`AccessFlag Signature Builder` はクラスやメソッドへのアクセス修飾子を視覚的にわかりやすく生成する手助けをするためのビルダークラスです。
これを使うことにより、クラスファイルを生成する際に数字の組み合わせを気にせず定義することが可能になります。

AccessFlag Signature Builder は下記のように使用することが可能です。

### クラスの場合

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use \PHPJava\Compiler\Builder\Signatures\ClassAccessFlag;
(new ClassAccessFlag())
    // 公開クラスであるという修飾子を付けます。
    ->enablePublic()
    // 親クラスであるという修飾子を付けます。
    ->enableSuper()
    // 与えられた情報から値を返します。
    ->make();

// 上記は下記と同一です。
var_dump(
    \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_PUBLIC
     | \PHPJava\Kernel\Maps\ClassAccessFlag::ACC_SUPER
);
```

また、使用できる API は下記のとおりです。

| アクセス修飾子 |
| --------- |
| enablePublic |
| enableSuper |
| enableFinal |
| enableInterface |
| enableAbstract |
| enableSynthetic |
| enableEnum |
| enableModule |

### メソッドの場合

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag;
(new MethodAccessFlag())
    // 公開メソッドであるという修飾子を付けます。
    ->enablePublic()
    // 静的メソッドであるという修飾子を付けます。
    ->enableStatic()
    // 与えられた情報から値を返します。
    ->make();

// 上記は下記と同一です。
var_dump(
    \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_PUBLIC
    | \PHPJava\Kernel\Maps\MethodAccessFlag::ACC_STATIC
);
```

また、使用できる API は下記のとおりです。

| アクセス修飾子 |
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
`Descriptor Signature Builder` とは、メソッドの引数及び返却値の中間コード向けの書式の生成を手助けするためのビルダークラスです。
`Java` は例えば `public static void main (String[] args)` がコンパイルされると `String[] args` と `void` は `([Ljava/lang/String;)V` のように中間コードに解釈されます。
しかし、これを人間が相互に読み直すのは非効率であるため、このビルダークラスを用いてその課題を解決します。

`Descriptor Signature Builder` は下記のように使用します。

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPJava\Compiler\Builder\Signatures\Descriptor;
use PHPJava\Kernel\Types\_Void;
use PHPJava\Packages\java\lang\_String;

(new Descriptor())
    // 引数を追加します。 addArgument は何回でも呼ぶことが可能です。
    ->addArgument(
        // 第一引数は java.lang.String
        _String::class, 
        // 配列の深さを指定する。デフォルトは 0
        1
    )
    // 返却値をセットする
    ->setReturn(
        // 返却値は void 型
        _Void::class
    )
    ->make();

// 上記は下記と同じです。
var_dump(
    '([Ljava/lang/String;)V'
);
```

## Interface Entry Builder
_この機能はまだ実装されていません。_

## Fields Entry Builder
_この機能はまだ実装されていません。_

## Method Entry Builder
`Method Entry Builder` とは、 `EntryCollection` である `Methods` にエントリーを追加していく際に、エントリーの生成を手助けするためのビルダークラスです。
これを使用することにより、クラスファイルへのメソッドの追加が容易になります。

下記のように使用します。

```php
<?php
require __DIR__ . '/../../vendor/autoload.php';

use PHPJava\Compiler\Compiler;
use PHPJava\Compiler\Builder\Method;
use PHPJava\Compiler\Builder\Collection\Methods;
use PHPJava\Compiler\Builder\Structures\ClassFileStructure;

$compiler = new Compiler(
    (new ClassFileStructure())
        // ...省略
        ->setMethods(
            (new Methods())
                // Methods コレクションにメソッドを追加する
                ->add(
                    // JVM Spec の method_info attribute に則ってメソッドの構造を定義する
                    (new Method(
                        // メソッドのアクセス修飾子を定義する
                        (new \PHPJava\Compiler\Builder\Signatures\MethodAccessFlag())
                            ->enablePublic()
                            ->enableStatic()
                            ->make(),
                        // メソッド名を Constant Pool から探す
                        $finder->find(
                            Utf8Info::class, 
                            'main'
                        ),
                        // 引数及び返却値の情報を Constant Pool から探す
                        $finder->find(
                            Utf8Info::class,
                            (new Descriptor())
                                ->addArgument(_String::class, 1)
                                ->setReturn(_Void::class)
                                ->make()
                        )
                    )
                    ->setAttributes(
                        // ...省略
                    )
                )
                ->toArray()
        )
);
```

## Code Attribution Builder
`Code Attribution Builder` は `Attribute` Builder を継承したビルダークラスです。
通常 `Attribute` Builder は [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-4.html#jvms-4.7) の性質から、バイナリ文字列のみを渡すことを想定して設計されていますが、
バイナリ文字列を書くのは人類には早すぎるため、よっぽどのバイナリ文字列が好きで人間を辞めたなにかではない限り、手動で生成するのは困難であるため、 `Code Attribution Builder` が `Attribute` に渡すための文字列を生成する手助けをします。

`Code Attribution Builder` は下記のように使用します。

```php
<?php
require __DIR__ . '/../vendor/autoload.php';
use PHPJava\Compiler\Builder\Structures\Info\Utf8Info;
use PHPJava\Compiler\Builder\Attributes\Code;
use PHPJava\Kernel\Maps\OpCode;


(new Code($finder->find(Utf8Info::class, 'Code')))
    ->setMaxStacks(0)
    ->setMaxLocals(0)
    // return のみを設定する
    ->setCode(
        pack('C', OpCode::_return)
    )
    ->getValue();

// これは下記と同様です。
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

`Code Attribution Builder` が提供している API は下記のとおりです。


| メソッド名 | 概要 |
| ------- | --- |
| `setMaxStacks(int)` | オペランドスタックに最大詰め込めるスタックの数を指定します。これは将来、 Operation Code から逆算可能であるため、廃止される予定です。 |
| `setMaxLocals(int)` | 定義できるローカル変数の最大値を指定します。これは将来、 Operation Code から逆算可能であるため、廃止される予定です。 |
| `setCode(string)` | オペレーションコード及びオペランドを定義します。 |
| `setExceptionTable(ExceptionTable[])` | 例外が発生するテーブル情報を登録します。これは現在**未実装**です。 |
| `setAttributes(Attributes[])` | Code Attribute に付属する属性情報を追加します。 |  
| `getValue()` | 指定した値を用いて Code Attribute の形式のバイナリ文字列を生成します。 |  


## Operation Code Builder
`Operation Code Builder` は、 `Code Attribution Builder` の `setCode` に対してのオペレーションコード及びオペランドを生成する手助けをするためのビルダークラスです。
このクラスを使用することにより、実際のバイナリ文字列を考えずにオペレーションコードを生成することが可能になります。

下記のように使用します。

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
    // getstatic コマンドを設定する 
    ->add(
        OpCode::_getstatic,
        [
            // Fieldref の位置を渡す
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
    // ldc コマンドを設定する
    ->add(
        OpCode::_ldc,
        [
            // StringInfo の Constant Pool の位置を渡す
            [
                Uint8::class,
                $finder->find(
                    StringInfo::class,
                    'Hello World!'
                ),
            ],
        ]
    )
    // invokevirtual コマンドを設定する
    ->add(
        OpCode::_invokevirtual,
        [
            // 実行するメソッドの Constant Pool の位置を渡す
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
    // return コマンドを設定する
    ->add(OpCode::_return);
```

オペレーションコードには引数を指定可能であり、これは Java Virtual Machine における命令の仕様です。
また、例のコードで登場する `Uint8` や `Uint16` は渡すパラメータ長を定義しており、下記の意味を持ちます。

| クラス | 意味 |
| ---- | --- |
| PHPJava\Compiler\Builder\Types\Uint8 | 1 バイトの意味であることを示しています。 |
| PHPJava\Compiler\Builder\Types\Uint16 | 2 バイトの意味であることを示しています。つまり short 型と同一です。 |
| PHPJava\Compiler\Builder\Types\Uint32 | 4 バイトの意味であることを示しています。つまり int 型と同一です。 |
| PHPJava\Compiler\Builder\Types\Uint64 | 8 バイトの意味であることを示しています。つまり long 型と同一です。 |

[Java Virtual Machine](https://docs.oracle.com/javase/specs/jvms/se11/html/jvms-6.html) を確認することでそれぞれのパラメータ長を知ることができます。