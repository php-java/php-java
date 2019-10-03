# What is the JVM language of PHP syntax?
PHPJava は PHP のシンタックスを用いて PHP を JVM 言語として扱うことが可能です。
この機能は `nikic/php-parser` を用いて、 PHP を 抽象構文木 (a.k.a Abstract Syntax Tree) に分解し、 PHPJava のアセンブラを用いて
JVM の中間コードを構成し、 PHP が JVM 言語として `java` コマンドで動作するようになります。
これは、他のどの機能よりも試験的な実装で、やらなければいけないことがたくさんあります。

# デモ
![DEMO](../img/php_jvm_lang.gif)

# Get started
1. `HelloWorld.php` を用意します。
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

2. `PackageAssembler` を実行し、中間コードを構成します。

```php
<?php 
use PHPJava\Compiler\Lang\PackageAssembler;
use PHPJava\Compiler\Lang\Stream\FileStream;

(new PackageAssembler(
    (new FileStream(__DIR__ . '/HelloWorld.php'))
        // コンパイル後に出力されるディレクトリを指定します。
        ->setDistributeDirectory(__DIR__ . '/dist')
))->assemble();

```

3. `dist` ディレクトリに `HelloWorld.class` が生成されるので実行してみます。

```
$ cd dist
$ java HelloWorld
```

実行すると `Hello World!` が出力されます。
 
# コンパイルについて
## 互換性
この機能は `JDK 8` としてコンパイルされます。

## 型について
PHP の文字列出力の際に、文字列ではないリテラルやオブジェクトが渡された場合は、文字列に変換しようと試みます。
例えば、 `1` という数値リテラルは、 Java 上では概ね下記のとおりに変換されます。

```java
int number = 1;
(new java.lang.Integer(number)).toString()
```

PHPJava が構成するオペレーションコードは下記のとおりです。

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
`PHPStandard` は PHP を実行するためのランタイムクラスを格納している名前空間です。

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

# TODO
- [ ] 条件分岐の実装
- [ ] ループ分の実装
- [ ] PHP の関数呼び出しの実装
- [ ] クラス外に書かれた箇所を main として扱うようなエントリーポイントの実装
- [ ] Java Archive への対応