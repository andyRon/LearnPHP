《PHP7从零基础到项目实战》笔记
---------


# 1 走近PHP

## 1.1 快速认识PHP

### PHP的优势

1. PHP学习入门快、开发成本低，语法相对简单，并且提供了丰富的类库，如用于图像处理的GD库、各种加密扩展（如OpenSSL和Mcrypt等）。
2. PHP结合Linux、Nginx或Apache、MySQL可以方便快捷地搭建一套系统，PHP还支持直接调用系统命令，这样便可以用代码完成许多操作Linux的工作，如打包压缩、复制粘贴、重命名、执行Linux中grep查询筛选等。Nginx中的PHP采用**fastCGI**的形式运行脚本。
3. PHP支持使用MySQL、MSSQL、SQLite等多种数据库。3种连接MySQL的扩展：**MySQL扩展、MySQLi扩展和PDO扩展**。

MySQL扩展在PHP 5.5及以后的版本中不再支持；

MySQLi是PHP推出的专门用于链接MySQL的更加安全高效的扩展，并且提供了更高级的一些操作，完全支持面向对象。

PDO扩展是PHP推出的链接MySQL和其他类型的数据库的一种统一解决方案。

1. PHP是解释执行的脚本语言，开发效率高。
2. 配置文件相对简单。与PHP运行有关的配置文件：php-fpm.conf和php.ini。

更改了PHP的配置文件不需要重新启动即可继续运行，因为PHP每次运行程序前都会主动加在配置文件中。

1. PHP是最流行、最广泛使用的Web开发语言，有着丰富的生态圈，有许多的开源框架。
2. 结合LVS负载均衡、消息队列、数据库主从等技术，PHP能够支持一般大型网站的应用，满足绝大多数场景下的应用开发。

### PHP的运行机制和原理

> PHP = 内核Zend引擎 + 扩展层

PHP内核负责处理请求、完成文件流错误处理等操作。它可以将PHP程序文件转换成可在虚拟机上运行的机器语言。

扩展层提供一些应用层操作需要的函数类库等，比如数组和MySQL数据库的操作等。

### 相对于PHP5.6.x, PHP 7的新特性

在底层结构方面，改变了存储各种变量的Zval和Zend_String结构体、优化了Zend Array的HashTable、改进了函数的调用机制等。

详细新特性：http://php.net/manual/zh/migration70.new-features.php 。

- declare(strict_type=1);

- 提升性能：PHP 7速度是PHP 5.6的两倍。

- 支持64位。

- 许多重大错误可以进行异常处理。

- 移除了旧的和不支持的SAPIs和扩展。

- null合并操作符（? ?）。

- 结合比较运算符（<=>）。

- 标量类型声明。

- 匿名类。

# 2 PHP语言基础

## 2.1 7种数据类型

String（字符串）、Integer（整型）、Float（浮点型）、Boolean（布尔型）、Array（数组）、Object（对象）、NULL（空值）

## 2.2 运算符

### 算术运算符

![](../../images/learnphp-001.jpg)

### 递增递减运算符

### 比较运算符

![](../../images/learnphp-002.jpg)

### 逻辑运算符

### 三元运算符

> (expr1) ? (expr2) : (expr3)

PHP7新增 **NULL合并运算符**

> (expr1) ?? (expr2)

### 字符串连接运算符

.

### 赋值运算符

### 位运算符

## 2.3 变量

PHP是一种弱类型的语言，在创建变量时无须指定变量类型，PHP会根据变量的值自动将其设定为对应的数据类型。

### 变量的作用域

> local、global、static、parameter

在PHP中，全局变量存储在$GLOBALS[index]中，index表示变量名。

当一个函数完成时，它的所有变量通常都会被删除。

可变变量：

> $$a

## 2.4 常量

### 声明

```php
define()

const
```

### 预定义常量/魔术常量

![](../../images/learnphp-003.jpg)

# 3 流程控制语句

## 3.4 包含语句

include、include_once、require、require_once

# 4 函数

PHP中函数的作用域是全局的，在一个文件中定义了函数后，可以在该文件的任何地方调用。

## 4.2 函数的参数

PHP支持按值传递参数（默认），通过引用传递参数及默认参数，也支持可变长度参数列表。PHP支持函数参数类型声明。

默认参数必须是常量表达式。

为了避免出现意外情况，一般将默认参数放在非默认参数的右侧。

默认情况下，当传递的参数不是函数指定的参数类型时，PHP会尝试将所传参数转换成指定参数类型。在将浮点型转成整型时，只取其中的整数部分。

可变参数将会被当作一个数组传递给函数。

## 4.3 函数返回值

函数不能返回多个值，但可以通过返回一个数组来得到类似的效果。

在PHP 7中函数增加了返回值的类型声明。

```php
function sum($a, $b): float {
  return $a + $b;
}
```

## 4.4 可变函数

如果一个变量名后有圆括号，PHP将寻找与变量的值同名的函数，并且尝试执行它。

## 4.5 内置函数

查看加载的扩展库：

```php
phpinfo()
get_loaded_extensions()
```



## 4.6 匿名函数/闭包函数

经常用作回调函数（callback）参数的值。

闭包函数也可以作为变量的值来使用，PHP会自动把此种表达式转换成内置类Closure的对象实例。

## 4.7 递归与迭代

# 5 字符串

## 5.1 单引号和双引号的区别

在使用单引号字符串时，字符串中需要转义的特殊字符只有反斜杠和单引号本身，单引号不能识别插入的变量。相比双引号，这种定义字符串的方式不但直观而且速度快。

## 5.3 字符串操作

### 改变字符串大小写

```php
ucfirst

lcfirst

ucwords

strtoupper

strtolower
```

### 查找字符串

```php
stripos

strpos

strripos

strrpos
```

### 替换字符串

```php
str_ireplace()

str_replace()

substr_replace()
```

### 截取字符串

```php
substr
```

### 去除字符串首尾空格和特殊字符

```php
trim

ltrim

rtrim
```

### 计算字符串的长度

```php
strlen
```

### 转义和还原字符串

```php
addslashes

stripslashes
```

### 重复一个字符串

```php
str_repeat
```

### 随机打乱字符串

```php
str_shuffle
```

### 分割字符串

```php
explode
```

# 6 数组

PHP中对多维数组没有上限的固定限制，但是随着维数的增加，数组会越来越复杂，对于阅读调试和维护都会稍微困难些。

## 6.3 数组操作

### 检查数组中是否存在某个值

```php
bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )
```

### 数组转换为字符串

```php
string implode ( string $glue , array $pieces )
```

### 计算数组中的单元数目

```php
int count ( mixed $var [, int $mode = COUNT_NORMAL ] )
// 第二个参数决定是否递归计数；还可以计算对象中的属性个数  
```

### 数组当前单元和数组指针

```php
current()

end()

prev()

reset()

next()
```

### 数组中的键名和值

```php
key()

array_key_exists()

array_keys()

array_values()
// 搜索给定值返回键名
array_search()
```

### 填补数组

```php
// 用值将数组填补到指定长度
array array_pad ( array $input , int $pad_size , mixed $pad_value )

// 用给定的值填充数组
array array_fill ( int $start_index , int $num , mixed $value )

// 使用指定的键和值填充数组
array array_fill_keys(array $keys, mixed $value)
```

### 从数组中随机取出一个或多个单元

```php
array_rand()
```

### 数组排序与打乱数组

```php
sort()

asort()

arsort()

rsort()

shuffle()
```

### 遍历数组

```php
for、foreach、each、list
```

### 数组的拆分与合并

```php
array_chunk()

array_merge()
```

### 增加/删除数组中的元素

```php
array_unshift()

array_shift()

array_push()

array_pop()
```



### 其他

```php
array_slice()

array_splice()

is_array()

array_sum()

// 计算数组中所有值的成绩并返回(字符串算作0)
number array_product(array $array)

array_flip()
```

## 6.4 系统预定义数组

### `$_SERVER`

$_SERVER中的项由Web服务器创建。

![](../../images/learnphp-004.jpg)

### `$_GET`和`$_POST`

### `$_FILES`

### `$_SESSION`和`$_COOKIE`

### `$_REQUEST[]`

# 7 时间与日期

# 8 表单

# 9 类与对象

## 9.1 类

`::`符号3中使用情况：

```php
parent::

self::

类名::
```

### 静态属性和静态方法

### 构造方法和析构方法

构造方法是在创建对象时自动调用的方法，析构方法是在对象销毁时自动调用的方法。

析构方法在垃圾回收程序执行之前被执行。

```php
__construct

__desctruct
```

## 9.2 封装和继承特性

### 封装特性

public、protected、private

## 9.3 魔术方法(内置的拦截器)

```php
__set()
__get()
__isset()
__unset()
```

## 9.4 自动加载文件

```php
void __autoload ( string $class )
  
bool spl_autoload_register ([ callable $autoload_function [, bool $throw = true [, bool $prepend = false ]]] )
```

## 9.5 抽象类和接口

## 9.6 类中的关键字

> final、clone、instanceof、“==”和“===”

# 10 正则表达式

在PHP中有两套函数库支持的正则表达式处理操作：

1. PCRE（PerlCompatible Regular Expression）库提供、与Perl语言兼容的正则表达式函数，以“preg_”为函数的前缀名称；
2. POSIX（PortableOperating System Interface）扩展语法正则表达式函数，以“ereg_”为函数的前缀。

# 11 错误异常处理

## 11.1 异常处理

异常处理是在一些可能发生错误的程序中抛出一个错误，以避免程序的中断执行，用户可捕获异常并做相应处理。

### 异常类

Exception是所有异常类的基类。它的属性和方法：

> · Message异常消息内容。
>
> · Code异常代码。
>
> · File抛出异常的文件名。
>
> · Line抛出异常在该文件中的行号。

> · Exception::__construct异常构造函数。
>
> · Exception::getMessage获取异常消息内容。
>
> · Exception::getPrevious返回异常链中的前一个异常。
>
> · Exception::getCode获取异常代码。
>
> · Exception::getFile获取发生异常的程序文件名称。
>
> · Exception::getLine获取发生异常的代码在文件中的行号。
>
> · Exception::getTrace获取异常追踪信息。
>
> · Exception::getTraceAsString获取字符串类型的异常追踪信息。
>
> · Exception::__toString将异常对象转换为字符串。
>
> · Exception::__clone异常克隆。

### 创建自己的异常类

PHP的异常处理机制并不完善，在PHP中想处理不可预料的异常是办不到的，必须事先定义一些异常，将各种可能出现的异常进行if…else判断，手动抛出异常，所以在PHP里经常会使用到我们自己创建的异常类。

## 11.2 错误有关配置

### 错误级别配置

1. 在配置文件php.ini中配置error_reporting，如`error_reporting=E_ALL | E_STRICT` 表示设置最严格的错误级别。
2. 在代码中用函数error_reporting()设置。error_reporting(0)表示屏蔽所有错误，error_reporting(-1)表示报告所有错误。

![](../../images/learnphp-005.jpg)

### 记录错误

PHP中使用error_log()函数可将错误信息发送到某个地方。

```php
error_log ( string $message [, int $message_type = 0 [, string $destination [, string $extra_headers ]]] ) : bool
```

### 自定义错误处理函数

set_error_handler()

```php
set_error_handler ( callable $error_handler [, int $error_types = E_ALL | E_STRICT ] ) : mixed
```



### PHP 7中的错误处理

```php
Error
```



# 12 图像处理

GD库

## 12.1 获取图像信息

### getimagesize取得图像大小

### getimagesizefromstring从字符串中获取图像尺寸信息

### imagesx取得图像的宽度

### imagesy取得图像的高度

## 12.2 图像绘制

### 创建画布

```php
imagecreate ( int $width , int $height ) : resource

imagecreatetruecolor ( int $width , int $height ) : resource
```



### 定义颜色

```php
imagecolorallocate ( resource $image , int $red , int $green , int $blue ) : int

imagecolorallocatealpha ( resource $image , int $red , int $green , int $blue , int $alpha ) : int
```



### 绘制图形

```php
// 椭圆
imageellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color ) : bool

// 多边形
imagefilledpolygon ( resource $image , array $points , int $num_points , int $color ) : bool

// 矩形
imagefilledrectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color ) : bool

// 椭圆弧
imagearc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color ) : bool
```



### 绘制文字

```php
imagechar

imagecharup

imagefttext
```

## 12.3 图片处理

### 复制图像

```php
imagecopy

imagecreatefromjpeg
```



### 旋转图像

```php
imagerotate
```



### 图像水印

```php
imagecopymerge
```



## 12.4 图像验证码

# 13 目录文件操作

## 13.1 目录

### 判断文件类型

```php
filetype ( string $filename ) : string
// 可能的值有fifo、char、dir、block、link、file和unknown

is_dir ( string $filename ) : bool
```



### 创建目录

```php
mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = FALSE [, resource $context ]]] ) : bool
```

### 删除目录

```php
rmdir ( string $dirname [, resource $context ] ) : bool
```



### 打开读取和关闭目录

```php
opendir

readdir

closedir

// 列出指定路径中的文件和目录
scandir()
```

### 获得路径中目录部分

```php
dirname()
```



### 目录磁盘空间

```php
disk_free_space()

disk_total_space()
```

## 13.2 文件操作

### 打开文件

```php
fopen ( string $filename , string $mode [, bool $use_include_path = FALSE [, resource $context ]] ) : resource
```



![](../../images/learnphp-006.jpg)

### 读取文件

```php
fgets ( resource $handle [, int $length ] ) : string
// 从文件指针中读取一行

fgetc ( resource $handle ) : string
// 从文件指针中读取字符
```

### 获得文件属性

```php
fileatime

filemtime

filesize

filetype

stat
```



### 复制、删除、移动/重命名文件

```php
copy

unlink

rename
```



## 13.3 文件指针

```php
rewind()

fseek()

ftell()

feof()
```

## 13.4 文件上传

### 上传文件配置

![](../../images/learnphp-007.jpg)

# 14 Cookie与Session

## 14.1 详解Cookie

### Cookie的基本概念和设置

读取Cookie是通过浏览器请求服务端时携带的HTTP头部中的Cookie信息得来的。

PHP中可使用setcookie()来设置cookie:

```php
setcookie ( string $name [, string $value = "" [, int $expires = 0 [, string $path = "" [, string $domain = "" [, bool$secure = **FALSE** [, bool $httponly = **FALSE** ]]]]]] ) : bool
```

**在设置Cookie之前不能有任何输出**。当Cookie被设置后，可在刷新页面后通过$_COOKIE全局数组获得。

参数$httponly如果为true就表示只能通过HTTP协议才能访问该Cookie，意味着**客户端JavaScript不可操作这个Cookie**。使用此参数可减少XSS攻击的风险。

Cookie是编程语言通过一些指令告知浏览器，由浏览器实现的，浏览器和服务端进行通信时，HTTP消息头中携带了Cookie信息。

### Cookie的应用和存储机制

Cookie经常用来存储一些**不敏感的信息**，如用来防止刷票、记录用户名、限制重复提交等。

## 14.2 Session详解

### Session的基本概念和设置

Session存储在服务端，本质上和Cookie没有区别，都是针对HTTP协议的局限性而提出的一种**保持客户端和服务端间会话状态的机制**。Session经常用来在**网站的上下文间实现页面变量的传递、用户身份认证、程序状态记录**等，常见的有配合Cookie使用、实现**保存用户的登录状态或者记录用户的购物下单信息**等。

```php
session_start()

session.auto_start

PHPSESSID
```



### Session的工作原理和存储机制

```php
session.save_path
```



### 使用Redis存储Session

```php
session_set_save_handle()
```



# 15 MySQL数据库的使用

## 15.3 MySQL数据类型

### 数值类型

![](../../images/learnphp-008.jpg)

### 日期和时间类型

![](../../images/learnphp-009.jpg)

### 字符串类型

![](../../images/learnphp-010.jpg)

## 15.4 操作MySQL数据表

## 15.5 操作MySQL数据

## 15.7 PHP操作MySQL数据库

# 16 PHP与Redis数据库

在一些高并发大流量的网站系统中，常将Redis作为**消息队列**使用，以减轻MySQL的读写压力。并且Redis提供的数据类型能够满足绝大多数的应用场景，支持数**据持久化、主从同步**等。

## 16.3 Redis数据类型

string（字符串）、hash（哈希）、list（列表）、set（集合）及zset（sorted set，有序集合）

### string

![](../../images/learnphp-011.jpg)

### list

支持链表结构，元素可重复，常做**消息队列**

![](../../images/learnphp-012.jpg)

### hash

![](../../images/learnphp-013.jpg)![](../../images/learnphp-014.jpg)

### set（无序集合）

唯一的

![](../../images/learnphp-015.jpg)

### zset（有序集合）

每个元素都会关联一个double类型的分数（有来排序）。

有序集合的成员是唯一的，但分数（score）却可以重复。

![](../../images/learnphp-016.jpg)

## 16.4 Key操作命令

![](../../images/learnphp-017.jpg)

## 16.5 PHP操作Redis

# 17 PHP处理XML和JSON

XML是一种数据的表现形式，在**信息交换和传递**中起到非常重要的作用，比如在微信公众账号的开发中，开发者服务器接收和向用户发送消息都使用XML作为数据的公用格式。

## 17.1 生成XML

### 由字符串或数组遍历生成XML

### 通过DOM生成XML

### 通过PHP SimpleXML生成XML

## 17.2 解析XML

## 17.3 JSON的使用

### json_encode

### json_decode

# 18 MVC与ThinkPHP框架

# 19 PHP设计模式

# 20 基于前端架构打造服务端

## 20.1 构建一个API的世界

面向接口编程要求我们将定义和实现分离，尽可能编写**粒度更细**的接口，降低各个接口之间的**依赖度**，这些接口通过一定的组合能够对外提供一套系统服务。

### API接口签名验证

## 20.2 传输消息的加解密

### 单向散列加密

### 对称加密

### 非对称加密

## 20.3 使用Ajax进行交互

## 20.4 前端模板和框架

# 24 大型网站架构设计

## 24.2 负载均衡

### 负载均衡技术

1. DNS域名解析负载均衡

1. 反向代理负载均衡

1. IP负载均衡

1. 数据链路层负载均衡

### 负载均衡算法

轮询

加权轮询

随机

最少连接

源地址哈希

## 24.3 数据库的使用

### 数据切分

垂直切分

水平切分

### 数据库中间体

## 24.4 消息队列

### 消息队列的应用场景

（1）异步处理：例如短信通知、终端状态推送、App推送、用户注册等。

（2）数据同步：业务数据推送同步。

（3）重试补偿：记账失败重试。

（4）系统解耦：通信上下行、终端异常监控、分布式事件中心。

（5）流量消峰：秒杀场景下的下单处理。

（6）发布订阅：HSF的服务状态变化通知、分布式事件中心。

（7）高并发缓冲：日志服务、监控上报。

### 消息队列的基本概念

### 常用消息队列

## 24.5 网站监控