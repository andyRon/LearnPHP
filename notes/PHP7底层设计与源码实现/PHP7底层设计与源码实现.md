PHP 7底层设计与源码实现
-----------

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