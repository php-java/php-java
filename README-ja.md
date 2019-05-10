# PHPJava - JVM Emulator by PHP
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
![Compatibility](https://img.shields.io/badge/Compatibility-7.2%20and%20greater-green.svg) 
[![Build Status](https://travis-ci.org/php-java/php-java.svg?branch=master)](https://travis-ci.org/php-java/php-java)
[![Total Downloads](https://poser.pugx.org/php-java/php-java/downloads)](https://packagist.org/packages/php-java/php-java)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
<p align="center"><img src="./docs/img/logo.png" height="300"></p>

# What is PHPJava?
PHPJava は PHP で JVM (Java Virtual Machine) をエミュレーションさせるための実験的なライブラリです 🐘
PHPJava は予めコンパイルされた Java ファイル(一般的には class ファイル)を読み込み逐次処理をしていきます ☕ 
そして、 PHPJava は Java を **ブリッジや通信をするためのライブラリではありません**。
PHPJava は **100% PHP のみ** で動きます
このプロジェクトは [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html) を参考に創られています。

私達は心よりあなたのコントリビューションをお待ちしています 💪

コントリビューションガイド:
- [コントリビューションガイド](https://github.com/php-java/php-java/wiki/The-Contribution-Guide) 

## ドキュメント

- [English](https://github.com/php-java/php-java/blob/master/README.md)
- [日本語](https://github.com/php-java/php-java/blob/master/README-ja.md)

## 必須環境
- PHP >= 7.2
- Composer
- ext-zip

## PHPJava を実行ファイルとして実行する 
PHPJava は実行ファイルとして処理させることが可能です。

### クラスファイルを動かす場合
```shell
./vendor/bin/PHPJava HelloWorld
```

または、

```shell
./vendor/bin/PHPJava HelloWorld.class
```

### Jar ファイルを動かす場合
```shell
./vendor/bin/PHPJava -m jar HelloWorld.jar
```

### ヘルプを表示したい場合

```shell
./vendor/bin/PHPJava -h
```

## クイックスタート
1) PHPJava をインストールします。
```
$ composer require php-java/php-java
```

2) Java を書きます。
```java
class HelloWorld 
{
    public static void main(String[] args)
    {
        System.out.println(args[0]);
    }
}
```

3) Java をコンパイルします。
```
$ javac -UTF8 /path/to/HelloWorld.java
```

4) main メソッドを呼びます。

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

(new JavaClass(new FileReader('/path/to/HelloWorld.class')))
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello World!"]
    );
```

5) 結果を取得します。
```
$ php /path/to/HelloWorld.php
Hello World!
```

## Java Archive (*.jar ファイルの実行)

1) Jar ファイルを作成します。
```
$ javac -encoding UTF8 -d build src/*
$ cd build && jar -cvfe ../Test.jar Test *
```

2) エントリーポイントを指定するか、またはすでに指定されたエントリーポイントをもとに Jar ファイルを動かします.
2) Execute the jar on PHPJava with either an enrtypoint or your target method.
```php
<?php
use PHPJava\Core\JavaArchive;

// execute メソッドは初期パラメータを定義していないため、
// エントリーポイントを呼び出すための execute メソッドは必ず、 パラメータを指定する必要があります。
(new JavaArchive('Test.jar'))->execute([]);

// または、
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

### 静的フィールドの取得または代入

- 下記のように取得または代入を行うことが可能です

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$staticFieldAccessor = (new JavaClass(new FileReader('/path/to/HelloWorld.class')))
    ->getInvoker()
    ->getStatic()
    ->getFields();

// 代入
$staticFieldAccessor->set('fieldName', 'value');

// 取得
echo $staticFieldAccessor->get('fieldName');
```

### 静的メソッドの呼び出し

- 下記のように静的メソッドを呼び出します。

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

(new JavaClass(new FileReader('/path/to/HelloWorld.class')))
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

// または、メソッドが返り値をもつ場合は、下記のようにして、返り値を変数に代入することが可能です。
$result = (new JavaClass(new FileReader('/path/to/HelloWorld.class')))
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

// 返り値を出力します。
echo $result;
```


### 動的フィールドの取得または代入
- 動的フィールドを取得または代入したい場合は、`construct` メソッド呼ぶ必要があります。

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = new JavaClass(new FileReader('/path/to/HelloWorld.class'));

$javaClass->getInvoker()->construct();

$dynamicFieldAccessor = $javaClass
    ->getInvoker()
    ->getDynamic()
    ->getFields();

// 代入
$dynamicFieldAccessor->set('fieldName', 'value');

// 取得
echo $dynamicFieldAccessor->get('fieldName');
```

### 動的メソッドの呼び出し

- 動的メソッドを呼びたい場合動的フィールドのように、`construct` メソッド呼ぶ必要があります。

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$dynamicMethodAccessor = (new JavaClass(new FileReader('/path/to/HelloWorld.class')))
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

// または、メソッドが返り値をもつ場合は、下記のようにして、返り値を変数に代入することが可能です。
$dynamicMethodAccessor
   ->call(
       'methodWithSomethingReturn',
       $firstArgument,
       $secondArgument,
       $thirdArgument,
       ...
   );

// 返り値を出力します。
echo $result;
```

### あいまいなメソッドを PHPJava から呼び出す場合
- PHP は Java と比べると型がだいぶ曖昧です。そのため、 PHPJava では正確にメソッドを呼び出すための手段をいくつか用意しています。
- 以下は、 `long` パラメータを受け取るメソッドを呼び出す場合の例です。

#### [推奨] パラメータを `\PHPJava\Kernel\Types\_Long` にする。
##### Java
```java
class Test
{
    public static void includingLongTypeParameter(long n)
    {
        System.out.println(n);
    }
}
```

##### PHP
```php
<?php
$javaClass->getInvoker()->getStatic()->getMethods()->call(
    'includingLongTypeParameter',
    new \PHPJava\Kernel\Types\_Long(1234)
);
```

この例は `1234` を返却します。

#### strict オプションを `無効` にする
##### PHP
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = new JavaClass(
    new Stream\Reader\FileReader('Test'),
    [
        'strict' => false,
    ]
);
```

### ラインタイムオプション
- `JavaClass` または、 `JavaArchive` で使用可能なランタイムオプションは下記のとおりです。

| オプション名 | 型 | デフォルト値 | 概要 | 対象 |
|:--------|:------|:--------|:------------|:---------|
| entrypoint | string または、 null | null | Jar のエントリーポイントを指定します | JavaArchive |
| max_stack_exceeded | integer | 9999 | オペレーションを最大何回実行できるかを指定します。 | JavaClass |
| max_execution_time | integer | 30 | 最大実行時間を指定します。 | JavaClass |
| strict | boolean | true | このオプションが `true` の場合、 PHPJava はメソッド、変数などを厳格に評価し実行します。 `false` の場合は、曖昧に評価して実行します。. | Both |
| preload | boolean | false | このオプションが `true` の場合、 Jar 実行時に定義されている JavaClass を予めメモリ上にマッピング（プリロード）させることにより、処理速度が向上させます。ただし、この機能が有効である場合、 Jar が巨大であると メモリを多く消費します。また、それ以外の場合は、必要に応じてクラスを遅延ロードします。 | JavaArchive |
| validation.method.arguments_count_only | boolean | false | このオプションが `true` の場合、 クラス解決をして、メソッドを呼び出す際に、引数の数のみを比較します。 | JavaClass |
| operations.enable_trace | boolean | false | このオプションが `true` の場合、 PHPJava はオペレーションの実行ログを記録します。 | JavaClass |
| operations.temporary_code_stream | string | php://memory | 実行用のバイトコードの一時保存先を指定します。 | JavaClass |
| operations.injector.before | callable | null | オペレーション実行前に処理をするトリガーを設定します。 | JavaClass |
| operations.injector.after | callable | null | オペレーション実行後に処理をするトリガーを設定します。 | JavaClass |
| log.level | int | Logger::EMERGENCY | `Monolog` によるログの出力レベルを設定します | Both |
| log.path | string または resource | php://stdout | `Monolog` の出力先を指定します。. | Both |
| dry_run (未実装) | boolean | false | このオプションが `true` の場合、 JavaClass または JavaArchive の構造のチェックのみを行います。 | Both |
| env (未実装) | enum | Environment::EXPERIMENTAL | あなたの実行時環境を設定します。 | Both |

- JavaClass でオプションを指定する場合は下記のとおりです。
```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = new JavaClass(
    new FileReader('Test'),
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

- `GlobalOptions` を使用して設定する場合は下記のとおりです。
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

### PHPJava の実行結果を出力する

- 実行中のオペレーションの処理を確認したい場合は下記のとおりにします。

```php
<?php
use PHPJava\Core\JavaClass;
use PHPJava\Core\Stream\Reader\FileReader;

$javaClass = new JavaClass(new FileReader('/path/to/HelloWorld.class'));

$javaClass
    ->getInvoker()
    ->getStatic()
    ->getMethods()
    ->call(
        'main',
        ["Hello", 'World']
    );

// デバッグトレースを表示します。
$javaClass->debug();
```

- デバッグトレースを出力します。

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

- **[method]** は呼ばれたメソッドを表示します。
- **[code]** は JVM 上の実際のコードを表示します。
- **[executed]** は実行されたオペレーションコードの一覧を表示します。
  - **PC** はプログラムカウンタを表示します。
  - **OPCODE** はオペレーションコードを表示します。
  - **MNEMONIC** はニーモニックを表示します。.
  - **OPERANDS** はオペランドスタック上のアイテムを表示します。
  - **LOCAL STORAGE** はローカルストレージに格納されているアイテムの数を表示します。

## PHP における問題
- **問題 1** PHP は Java と異なるため、巨大な数字を計算することができません。
  しかし、 PHPJava は `bcmath` 関数や `gmp` 関数を使って、できる限り、計算を試みようとします。
  したがって、 PHPJava の返す値は `string` であったり、 `int` であったり、またはその他の型である可能性があります。
  そのため、 `string` として基本的に扱うことを推奨します。

- **問題 2** PHPJava は Java とは異なるため、完全に Java の型をカバーしていません。
  また、以下はカバーしている範囲の型の比較表です。

| Java | PHPJava |
|:-----|:--------|
| null | null |
| boolean | \PHPJava\Kernel\Types\\_Boolean (`__toString` を含む) |
| char | \PHPJava\Kernel\Types\\_Char (`__toString` を含む) |
| byte | \PHPJava\Kernel\Types\\_Byte (`__toString` を含む) |
| short | \PHPJava\Kernel\Types\\_Short (`__toString` を含む) |
| int | \PHPJava\Kernel\Types\\_Int (`__toString` を含む) |
| long | \PHPJava\Kernel\Types\\_Long (`__toString` を含む) |
| float | \PHPJava\Kernel\Types\\_Float (`__toString` を含む) |
| double | \PHPJava\Kernel\Types\\_Double (`__toString` を含む) |

- **問題 3**  PHPJava は `double` や `float` などの浮動小数点の巨大な数字の計算をすることができません。
  なぜなら、 `gmp_pow` 関数はマイナス指数 (たとえば -1 乗や -2 乗など) を扱えないためです。そのため代替としてビルトインされている `pow` を使用しています。

## Run Kotlin on the PHPJava
## Kotlin を PHPJava で動かす。
Kotlin を PHPJava で動かしたいですか？
可能ではありますが、現状は試験的な実装となっています。

### クイックスタート

1) Kotlin を書きます。

```kotlin
fun main(args: Array<String>) {
    println("Hello World!")
}
```

2) ランタイム付きでコンパイルします。
```
$ kotlinc HelloWorld.kt -include-runtime -d HelloWorld.jar
```

3) Jar として実行します。

```php
<?php
use PHPJava\Core\JavaArchive;

$jar = new JavaArchive(__DIR__ . '/HelloWorld.jar');
$jar->execute([]);
```

`Hello World!` と出力されます。

## ユニットテスト

- PHPUnit でテストを動かします。
```
$ ./vendor/bin/phpunit tests
```

- コーディングルールをチェックします。

```
$ ./vendor/bin/phpcs --standard=phpcs.xml src
```

- すべてのテストを実行します。

```
$ composer run tests
```

## 参照
- [Java Virtual Machine Specification](https://docs.oracle.com/javase/specs/jvms/se11/html/index.html)

## ライセンス
MIT
