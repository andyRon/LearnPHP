PHP 7底层设计与源码实现
-----------

https://book.douban.com/subject/30455287/

编程语言是程序员表达想法的重要工具，也是很复杂的一个工具。要用好一个工具通常有几个层次：了解各种基本特性并组装完成目标、了解背后的设计原理的优点与缺点、能够改进或者创造工具。

## 1 PHP7概况

### 1.1 PHP简史与新特性

#### PHP7新特性

太空船操作符 <=>

标量类型声明和返回值的类型声明

null合并操作符 ??

常量数组

namespace批量导入

throwable接口

Closure::call()

list的方括号写法

### 1.2 PHP7安装和调试

#### 1.2.1 编译安装

http://php.net/releases/

http://cn2.php.net/distributions/php-7.1.0.tar.gz

##### Mac 环境

```shell
$ wget http://cn2.php.net/distributions/php-7.1.0.tar.gz
$ tar -zxvf php-7.1.0.tar.gz
$ cd php-7.1.0
$ ./configure --prefix=$HOME/myfield/PHP/php-7.1.0/output --enable-fpm
```

报错，缺少iconv：

```shell
configure: error: Please specify the install prefix of iconv with --with-iconv=<DIR>
```

安装**libiconv**([libiconv网站](https://www.gnu.org/software/libiconv/#introduction))

```shell
$ wget https://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.15.tar.gz
$ tar -zxvf libiconv-1.15.tar.gz
$ cd libiconv-1.15
$ ./configure --prefix=/usr/local/libiconv
$ make && make install
```

跳转会PHP目录

```shell
$ ./configure --prefix=$HOME/myfield/PHP/php-7.1.0/output --enable-fpm --with-iconv=/usr/local/libiconv/
$ make && make install
```



报错，缺少libxml2

```shell
/Users/andyron/myfield/tmp/php-7.1.0/ext/libxml/libxml.c:39:10: fatal error: 'libxml/parser.h' file not found
#include <libxml/parser.h>
         ^~~~~~~~~~~~~~~~~
1 error generated.
make: *** [ext/libxml/libxml.lo] Error 1
```

```shell
$ brew install libxml2

$ ln -s /usr/local/opt/libxml2/include/libxml2/libxml /usr/local/include/libxml
```



重新make后报错

```shell
Undefined symbols for architecture x86_64:
  "_libiconv", referenced from:
      _zif_iconv_substr in iconv.o
      _zif_iconv_mime_encode in iconv.o
      _php_iconv_string in iconv.o
      __php_iconv_strlen in iconv.o
      __php_iconv_strpos in iconv.o
      __php_iconv_appendl in iconv.o
      _php_iconv_stream_filter_append_bucket in iconv.o
      ...
  "_libiconv_close", referenced from:
      _zif_iconv_substr in iconv.o
      _zif_iconv_mime_encode in iconv.o
      _php_iconv_string in iconv.o
      __php_iconv_strlen in iconv.o
      __php_iconv_strpos in iconv.o
      __php_iconv_mime_decode in iconv.o
      _php_iconv_stream_filter_factory_create in iconv.o
      ...
  "_libiconv_open", referenced from:
      _zif_iconv_substr in iconv.o
      _zif_iconv_mime_encode in iconv.o
      _php_iconv_string in iconv.o
      __php_iconv_strlen in iconv.o
      __php_iconv_strpos in iconv.o
      __php_iconv_mime_decode in iconv.o
      _php_iconv_stream_filter_factory_create in iconv.o
      ...
ld: symbol(s) not found for architecture x86_64
clang: error: linker command failed with exit code 1 (use -v to see invocation)
make: *** [sapi/cli/php] Error 1
```

把Makefile文件中的：

```makefile
EXTRA_LIBS = -lresolv -liconv -liconv -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm
```

修改为：

```makefile
EXTRA_LIBS = -lresolv  -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm -lxml2 -lz -licucore -lm /usr/local/libiconv/lib/libiconv.dylib /usr/local/libiconv/lib/libcharset.dylib
```



##### linux 阿里云

```shell
$ ./configure --prefix=$HOME/PHP/php-7.1.0/output --enable-fpm
$ yum install libxml2

```

Php 编译安装



#### 1.2.2 使用GDB调试PHP7





### 1.3 PHP7源码阅读工具介绍



## 2 初识PHP7源码整体框架

### 2.1 PHP7语言的执行原理



### 2.2 PHP7内核架构

![](/var/folders/g2/kh6ccxfx573_8t5syrlpfq280000gn/T/com.yinxiang.Mac/com.yinxiang.Mac/WebKitDnD.R6HmS1/Xnip2020-12-18_14-05-49.jpg)

### 2.3 PHP 7源码结构初步介绍

https://github.com/php/php-src

PHP7主要源码目录：sapi、Zend、main、ext、TSRM

#### sapi

sapi目录是对输入和输出层的抽象，是PHP提供对外服务的规范。

PHP程序的输入分为两类：**命令行的标准输入；基于cgi/fastcgi协议的网络请求**。

#### Zend

Zend目录是PHP的核心代码。

1. 内存管理模块
2. 垃圾回收
3. 数组实现

#### main

main目录是SAPI层和Zend层的黏合剂。

Zend层实现了PHP脚本的编译和执行，sapi层实现了输入和输出的抽象，main目录则起到了承上启下的作用：承上，解析SAPI的请求，分析要执行的脚本文件和参数；启下，调用Zend引擎之前，完成必要的初始化等工作。

#### ext

ext是PHP扩展相关的目录，常用的array、str、pdo等系列函数都在这里定义。

#### TSRM

PHP早期多用于单进程、单线程运行，后期才引入线程安全机制**ZTS**（ZendThread Safety）。

**TSRM**（Thread Safe Resource Manager，线程安全资源管理器）。





## 3 基本变量



## 6 面向对象

### 6.1 类的种类

#### 普通类

类的属性和方法有三个访问级别，分别为public（公有）,protected（受保护）或private（私有）。类的外部不能直接调用protected（受保护）或private（私有）的方法和属性。

类的属性有普通属性和静态、常量属性，静态、常量属性则分别用关键字“static”和“const”声明。

类的普通方法、属性被自己的成员函数调用时可使用“$this->”，静态方法及静态属性也可通过这种方式访问。

类的常量属性、静态属性、静态方法，通过“self::”调用。非静态的方法也可以通过“::”调用，但是非静态的属性不能通过“::”访问。

#### 抽象类

抽象方法必须被子类继承实现，所以不能为私有，只能是受保护的或公有的；

抽象类的方法访问控制级别必须和子类相等或更为宽松；

抽象方法的实现，必传参数的数量及类型必须严格一致；

抽象类的非抽象方法，子类可不实现，等同于普通类方法的继承；

抽象类中的抽象方法，只能定义，不能实现其方法体；

抽象类可定义常量，且可被子类覆盖。

#### 接口

对象接口（interface）里定义的方法子类需全部实现，且接口不能直接被实例化。

接口类可以通过extend继承一个或多个接口类，多个接口之间用逗号分隔，用以实现接口类的扩充。

接口类定义的方法必须声明为公有，因此子类的实现方法也只能为公有。接口方法体也必须为空。

接口类定义的常量和类常量使用方式一样，但不能被子类或者子接口覆盖。

普通类通过关键字“implements”来实现一个或多个接口。

继承多个接口，方法不能有重名。

普通类继承接口，必须实现接口类里面所有的方法，参数也和接口方法定义相同。可加默认参数，这点和抽象类方法的实现基本一致。

#### 特性（trait）

特性与普通类相似，有自己的方法、属性等，但是不可通extends继承，也没有类常量。

特性的方法如果和当前类方法冲突，会被当前类的方法覆盖。如果和基类方法冲突，特性方法会覆盖基类中的方法。优先级：**当前类>特性类>基类**。

一个类加载了多个特性，当多个特性中方法有重名时，需要在代码中通过关键字“insteadof”设置优先级或者通过“as”关键字重命名处理，否则报错。

`use`



#### final类

如果不希望一个类被继承，可以使用“final”来修饰。如果一个方法不想被子类覆盖，也可以这样声明。

类的属性不能定义为final。

#### 匿名类

当我们想快速实例化一个对象，可以通过匿名类来实现。从PHP 7开始支持匿名类，可通过new class函数创建，不能有类名。

```php
$obj = new class {
  public function b($msg) 
  {
    return $msg;
  }
};
var_dump($obj);
var_dump($obj->b('anonymous'));
```

