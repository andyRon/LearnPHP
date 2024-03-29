php从入门到精通
---



# 一、基础知识

## 1 初识php

PHP是PHP:Hypertext Preprocessor（超文本预处理器）的缩写，是一种服务器端、跨平台、HTML嵌入式的脚本语言，其独特的语法混合了C语言、Java语言和Perl语言的特点，是一种被广泛应用的开源式的多用途脚本语言，尤其适合Web开发。

PHP是B/S（Browser/Server的简写，即浏览器/服务器结构）体系结构，属于三层结构。服务器启动后，用户可以不使用相应的客户端软件，只使用IE浏览器即可访问，既保持了图形化的用户界面，又大大减少了应用维护量。



### PHP 7的新特性

- 标量类型与返回值类型声明。
- NULL合并运算符。
- 太空船运算符（组合比较符）。
- 常量数组。
- 匿名类。
- Closure::call()。
- PHP过滤unserialize()。
- IntlChar()。
- CSPRNG。
- 异常。
- use语句。
- 错误处理。
- intdiv()函数。
- Session选项。
- 废弃特性。
- 移除的扩展。
- 移除的SAPI。





### PHP 8版本新增加的特性

- 命名参数。
- 联合类型。
- 注解优化。
- 即时编译。
- 构造器属性提升。
- Match表达式优化。
- Nullsafe运算符优化。
- 字符串与数字的比较逻辑。
- 内部函数类型错误的一致性。[

新的类、接口、函数：

- Weak Map类。
- Stringable接口。
- fdiv()函数。
- get_debug_type()函数。
- get_resource_id()函数。
- token_get_all()函数。
- New DOM Traversal and Manipulation APIs接口。
- str_contains()、str_starts_with()、str_ends_with()函数。

类型系统与错误处理的改进：

- Mixed类型。
- 私有方法继承。
- Static返回类型。
- 确保魔术方法签名正确。
- Abstract trait方法的验证。
- 内部函数的类型Email thread。
- 操作符@不再抑制fatal错误。
- 算术／位运算符更严格的类型检测。
- 不兼容的方法签名导致fatal错误。
- PHP引擎warning警告的重新分类。
- 扩展Curl、Gd、Sockets、OpenSSL、XMLWriter、XML，以Opaque对象替换resource。

其他语法调整和改进：

- 变量语法的调整。
- 无变量捕获的catch。
- 允许对象的::class。
- 现在throw是一个表达式。
- Namespace名称作为单个Token。
- 允许参数列表中的末尾逗号、闭包use列表中的末尾逗号。



### PHP 8的执行原理

几个关键术语：

1. `Token`是PHP代码被切割成的有意义的标识。PHP提供了`token_get_all()`函数来获取PHP代码被切割后的Token。二维数组的每个成员数组的第一个值为Token对应的枚举值，第二个值为Token对应的原始字符串内容，第三个值为代码对应的行号，可见Token就是一个个的“词块”。但是单独存在的词块不能表达完整的语义，还需要借助规则进行组织串联。语法分析器就是这个组织者，它会检查语法，匹配Token，并对Token进行关联。
2. ==抽象语法树（简称AST）==是PHP 7版本的新特性。在这之前的版本中，PHP代码的执行过程中是没有生成AST这一步的。AST的结点分为多种类型，对应着PHP语法。通常使用PHP-Parser工具查看PHP代码生成的AST。注意，PHP-Parser是《PHP 7内核》作者之一Nikic编写的将PHP源码生成AST的工具，其源码参见https://github.com/nikic/PHP-Parser。

3. opcodes

   opcode只是单条指令，opcodes是opcode的集合形式，是PHP执行过程中的中间代码。opcode生成之后，由虚拟机执行。PHP工程优化措施中有一个比较常见的“开启opcache”，指的就是这里的opcodes的缓存(opcodes cache)。通过省去从源码到opcode的阶段，引擎可以直接执行缓存的opcode，以此提升性能。借助vld插件，可以直观地看到一段PHP代码生成的opcode。opcode是PHP 7定义的一组指令标识，指令对应着相应的handler（处理函数）。当虚拟机调用opcode时，会找到opcode背后的处理函数，执行真正的处理程序。



在PHP 5中，从PHP脚本到opcodes的执行过程如下：

1. 词法分析。源代码首先进行词法分析，切割为多个字符串单元，得到Token。
2. 语法分析。独立的Token无法表达完整语义，因此需经过语法分析，将Token转换为opcodes。

在PHP 7和PHP 8中，执行原理：

1. 词法分析。源代码首先进行词法分析，切割为多个字符串单元，得到Token。
2. 语法分析。独立的Token无法表达完整语义，因此需经过语法分析，将Token转换为AST。
3. 编译。抽象语法树被转换为机器指令并执行。在PHP中，这些指令被称为opcode，由PHP解释执行。

![](images/image-20240328192304427.png)



## 3 PHP语言基础

### PHP的数据类型

PHP支持8种数据类型，

- 包括4种标量数据类型，即boolean（布尔型）、string（字符串型）、integer（整型）和float/double（浮点型）；
- 2种复合数据类型，即array（数组）和object（对象）；
- 2种特殊数据类型，即resource（资源）和null（空值）。

> PHP中变量的类型通常不是由程序员设定的，确切地说，是PHP根据该变量使用的上下文在运行时决定的。

在PHP中，不是只有false值才为假，一些特殊情况下，boolean值也被认为是false，这些特殊情况有0、0.0、"0"、空白字符串("")、只声明没有赋值的数组等。



“`$`”是变量标识符，所有变量都以“`$`”开头，无论是声明变量还是调用变量，都应使用“`$`”标识。

在PHP中，有3种定义字符串的方式，分别是单引号(`'`)、双引号(`"`)和定界符(`<<<`)。双引号中所包含的变量会自动被替换成实际数值，而单引号中包含的变量则按普通字符输出。

定义简单字符串时使用单引号更加合适，使用双引号PHP将花费一些时间来处理字符串的转义和变量的解析。因此，如果没有特别的要求，定义字符串时应尽量使用单引号。

在定界符后接一个标识符，然后是字符串，最后以同样的标识符结束字符串。



如果给定的数值超出了integer型所能表示的最大范围，将会被当作float型处理，这种情况称为整数溢出。同样，如果表达式的最后运算结果超出了integer型的范围，也会返回float型。

float和double在PHP中没有什么区别。

浮点型的数值只是一个近似值，所以要尽量避免在浮点型数值之间比较大小，因为最后的结果往往是不准确的。



==资源（resource）==是一种特殊变量，又叫作句柄，保存了到外部资源的一个引用。资源是通过专门的函数来建立和使用的。使用资源时，系统会自动启用垃圾回收机制，释放不再使用的资源，避免内存消耗殆尽。因此，资源很少需要手工释放。

==空值（null）==，特殊的值，表示变量没有值，唯一的值就是null。空值(null)不区分大小写，null和NULL效果是一样的。被赋予空值的情况有3种：==未被赋任何值、被赋值为null、被unset()函数处理过==。

> isset()函数用于判断变量是否为null，该函数返回一个boolean型，如果变量为null，则返回true，否则返回false。unset()函数用来销毁指定的变量。



#### 数据类型转换

![](images/image-20240328194605822.png)

在进行数据类型转换的过程中应该注意：转换成boolean型时，null、0以及未赋值的变量和数组会被转换为false，其他的转换为true；转换成整型时，布尔型的false转换为0，true转换为1，浮点型的小数部分被舍去，字符型如果以数字开头就截取到非数字位，否则输出0。



类型转换还可以通过settype()函数来完成：

```php
bool settype(mixed var, string type)
```



#### 检测数据类型

![](images/image-20240328194949057.png)

### PHP常量

#### 常量的定义和使用

```php
define(string constant_name, mixed value)
```

获取常量的值有两种方法：一种是使用常量名直接获取值；另一种是使用constant()函数。

判断一个常量是否已经被定义，可以使用defined()函数：

```php
     bool defined(string constant_name);
```

> 在PHP 8.0以前，使用一个未定义的常量，可能会被解析为常量名称组成的字符串，并产生一个E_NOTICE级别的错误，在PHP 8.0之后，会产生E_ERROR。



#### 预定义常量

![](images/image-20240328195426387.png)

`__FILE__`和`__LINE__`中的“`__`”是两条下画线，而不是一条“`_`”。

以E_开头的预定义常量用于PHP的错误调试，如需详细了解，请参考`error_reporting()`函数。

### PHP变量



#### 变量的作用域

![](images/image-20240329085459131.png)



静态变量在很多地方都能用到。例如，在博客中使用静态变量记录来访人数，在聊天室中使用静态变量记录用户的聊天内容等。

![](images/image-20240329085936553.png)

![](images/image-20240329090002528.png)

#### 可变变量

可变变量是一种独特的变量，它允许动态改变某个变量的名称。其工作原理是该变量的名称由另外一个变量的值来确定，实现过程就是在变量的前面再多加一个符号“`$`”。

#### PHP预定义变量

![](images/image-20240329090107001.png)

### PHP运算符

算术运算符、字符串运算符、赋值运算符、递增／递减运算符、位运算符、逻辑运算符、比较运算符和条件运算符

#### 运算符的优先级

![](images/image-20240329090233043.png)



### PHP表达式



### PHP函数



#### 在函数间传递参数

调用函数时，需要向函数传递参数，被传入的参数称为实参。而函数定义时的参数称为形参。参数传递的方式有值传递、引用传递和默认参数（可选参数）3种。



引用传递就是将实参的内存地址传递到形参中。这时，在函数内部的所有操作都会影响实参的值，返回后，实参的值会发生变化。引用传递方式就是传值时在值传递基础上加“`&`”符号即可。

当使用默认参数时，默认参数必须放在非默认参数的右侧，否则函数可能出错。



#### 从函数中返回值

通常，函数将返回值传递给调用者的方式是使用关键字return。return将函数的值返回给函数的调用者，即将程序控制权返回调用者的作用域。如果在全局作用域内使用return关键字，那么将终止脚本的执行。



#### 变量函数

![](images/image-20240329091015715.png)

### PHP编码规范



## 4 流程控制语句



![](images/image-20240329091952449.png)

switch语句根据变量或表达式的值，依次与case中常量表达式的值相比较，如果不相等，则继续查找下一个case；如果相等，就执行对应的语句，直到switch语句结束或遇到break。一般来说，switch语句最终都有一个默认值default，如果在前面的case中没有找到相符的条件，则输出默认语句，和else语句类似。

![](images/image-20240329092044516.png)



foreach语句用于其他数据类型或者未初始化的变量时会产生错误。为了避免这个问题，最好使用is_array()函数先来判断变量是否为数组类型。如果是，再进行其他操作。

## 5 字符串操作 🔖



## 6 正则表达式

### PCRE兼容正则表达式函数

PHP提供了两套支持正则表达式的函数库，但由于PCRE函数库在执行效率上要略优于POSIX函数库，所以这里只讲解PCRE函数库中的函数。

```php
array preg_grep(string pattern, array input)
int preg_match/preg_match_all(string pattern, string subject [, array matches])
string preg_quote(string str [, string delimiter])
mixed preg_replace(mixed pattern, mixed replacement, mixed subject [, int limit])
mixed preg_replace_callback(mixed pattern, callback callback, mixed subject [, int limit])
array preg_split(string pattern, string subject [, int limit])
```





## 7 PHP数组



### 遍历数组

foreach

```php
$array = array("tom", 'andy', 'jack');
list($a, $b, $c) = $array;
```

### 数组应用函数

#### 字符串与数组的转换

explode()和implode()

#### 统计数组元素个数

```php
int count(mixed array [, int mode])
```

#### 查询数组中指定的元素

```php
mixed array_search(mixed needle, array haystack [, bool strict])
```

用于在数组中搜索指定的值，找到后返回键名，否则返回false。

其中，needle表示数组中待搜索的值；haystack表示被搜索的数组；strict为可选参数，如果值为true，表示将在数组中检查给定值的类型。



#### 获取数组中最后一个元素

```php
     array_pop(array array)
```

#### 向数组中添加元素

```php
     array_push(array array, mixed var [, mixed ...])
```

#### 删除数组中重复的元素

```php
     array array_unique(array array)
```



## 8 PHP与Web页面交互



## 9 PHP与JavaScript交互



## 10 日期和时间



# 二、核心技术

## 11 Cookie与Session

```php
bool setcookie(string name[, string value[, int expire[, string path[, string domain[, int secure]]]]])
$_COOKIE[]
setcookie("name", "", time()-1);

bool session_start(void);
$_SESSION
unset($_SESSION['user']);
session_destroy();
session_set_cookie_params();
session_save_path();
// 数据库存储
bool session_set_save_handler(string open, string close, string read, string write, string destroy, string gc)
```



## 12 图形图像处理技术

GD2函数库及JpGraph类库



## 13 文件系统



## 14 面向对象编

### 面向对象编程





### PHP与对象

#### 成员方法

类中的函数和成员方法唯一的区别就是，函数实现的是某个独立的功能，而成员方法用于实现类中的一个行为，是类的一部分。

调用：`对象->成员方法`



​     `对象名->成员变量`



#### 类常量

`const`



类名和常量名之间的两个冒号“::”称为作用域操作符，使用这个操作符可以在不创建对象的情况下调用类中的常量、变量和方法。



#### 构造方法

```php
void __construct([mixed args [,…]])
```

构造方法是初始化对象时使用的。如果类中没有构造方法，那么PHP会自动生成一个。自动生成的构造方法没有任何参数和操作。

#### 析构方法

```php
void __destruct(void)
```



PHP使用的是一种“垃圾回收”机制，自动清除不再使用的对象，释放内存。也就是说，即使不使用unset()函数，析构方法也会自动被调用，这里只是为了明确析构方法在何时被调用。一般情况下是不需要手动创建析构方法的。



#### 继承和多态的实现





#### “$this->”和“::”的使用

“$this->”只可以在类的内部使用。

get_class()函数返回对象所属类的名字，如果不是对象，则返回false。

伪变量$this只能在类的内部使用，但操作符“::”可以在没有声明任何实例的情况下访问类中的成员方法或成员变量。

`关键字::变量名/常量名/方法名`

关键字分为以下3种情况：

- parent：可以调用父类中的成员变量、成员方法和常量。
- self：可以调用当前类中的静态成员和常量。
- 类名：可以调用本类中的变量、常量和方法。



#### 数据隐藏

成员变量和成员方法在关键字的使用上都是一样的。

public、private、protected



#### 静态变量（方法）



### 面向对象的高级应用

#### final



#### 抽象类



#### 接口

不要用public以外的关键字来修饰接口中的成员。对于方法，不写关键字也可以，这是由接口自身的属性决定的。



#### 复制对象

##### 1 关键字clone



##### 2 __clone方法



#### 对象比较

“`==`”用于比较两个对象的内容，“`===`”用于比较对象的引用地址。

![](images/image-20240329103552806.png)

#### 对象类型检测

`ObjectName instanceof ClassName`



#### 魔术方法

PHP 8中保留了所有以“`__`”开头的方法，用户只能在PHP文档中使用已有的魔术方法，不能自行创建。

##### 1 `__set`和`__get`方法



##### 2 `__call`方法

当程序试图调用不存在或不可访问（使用protected或private修饰的方法）的成员方法时，PHP会先调用__call方法来存储方法名及其参数。



##### 3 `__sleep`和`__wakeup`方法

使用serialize()函数可以实现序列化对象，就是将对象中的变量全部保存下来，对象中的类则只保存类名。在使用serialize()函数时，如果实例化的对象包含`__sleep`方法，则会先执行`__sleep`方法。该方法可以清除对象并返回一个该对象中所有变量的数组。使用`__sleep`方法的目的是关闭对象可能具有的数据库连接等类似的善后工作。

unserialize()函数可以重新还原一个被serialize()函数序列化的对象，`__wakeup`方法则用于恢复在序列化中丢失的数据库连接及相关工作。

4 `__toString`方法

将一个对象当作一个字符串来使用时，会自动调用魔术方法`__toString`。在该方法中可以返回一个字符串，表示该对象转换为字符串之后的结果。



### 中文字符串的截取 🔖



## 15 PHP加密技术

### PHP加密函数

crypt()、md5()和sha1()



### PHP加密扩展库

Hash扩展库允许使用各种散列算法直接或增量处理任意长度的信息。【5.1后为内置并且默认启用】

OpenSSL扩展库使用加密扩展包封装了多个用于加密和解密的函数，极大方便了对数据进行加密和解密的操作。



## 16 MySQL数据库基础





## 17 phpMyAdmin图形化管理工具



## 18 PHP操作MySQL数据库  🔖



## 19 PDO数据库抽象层

PDO是PHP data object（PHP数据对象）的简称，目前支持的数据库包括Firebird、FreeTDS、Interbase、MySQL、MS SQL Server、ODBC、Oracle、Postgre SQL、SQLite和Sybase。

因为PHP默认使用PDO连接数据库，因此所有非PDO扩展在PHP 6中已被移除。PDO扩展提供了PHP内置类PDO来对数据库进行访问，通过不同数据库使用相同的方法名，解决了数据库连接不统一的问题。





## 20 ThinkPHP框架





# 三、高级应用

## 21 Smarty模板技术





## 22 PHP与XML技术



## 23 PHP与Ajax技术



## 24 PHP与Swoole技术

PHP这门语言从诞生到现在，一直被作为Web领域快速开发的首选语言之一，然而在某些应用中却具有局限性，如即时通信类（需要维持长链接）项目、直播类项目、游戏类项目等，使用传统的PHP不借助其他应用就无法开发。此外，PHP是==同步阻塞式==语言，在Web应用I/O密集型领域，编写高并发、高性能应用存在很大的阻碍。有了Swoole之后，PHP语言在异步I/O和网络通信领域开疆拓土，不再局限于Web领域。

### Swoole概述

Swoole是一个使用纯C语言编写的（Swoole 4开始逐渐改为通过C++编写），基于异步事件驱动和协程的并行网络通信引擎，为PHP提供协程、高性能网络编程支持。它提供了多种通信协议的网络服务器和客户端模块，可以方便快速地实现TCP/UDP服务、高性能Web、WebSocket服务、物联网、实时通信、游戏、微服务等，使PHP不再局限于传统的Web领域。

Swoole以PHP扩展的方式来运行，即Swoole是运行在PHP下的一个extesion扩展。它与普通的扩展不同。普通的扩展只是提供一个库函数，而Swoole扩展在==运行后会接管PHP的控制权，进入事件循环==。当I/O事件发生后，Swoole会自动回调指定的PHP函数。PHP通过Swoole系列函数调用Swoole的API来启动Swoole服务、注册回调函数等。Swoole提供了PHP语言的异步多线程服务器、异步TCP/UDP网络客户端、异步MySQL、异步Redis、数据库连接池、AsyncTask、消息队列、毫秒定时器、异步文件读写、异步DNS查询等功能。



Swoole有两个部分。一个是Swoole扩展，用C/C++开发，是基础与核心。另一个是框架，像ThinkPHP、Laravel、Yii一样，都是用PHP代码写的。

#### Swoole扩展与Swoole框架的区别

- Swoole扩展本身提供了Web服务器功能，可以替代php-fpm。而如果仅用Swoole框架，则只能运行在Nignx、Apache等Web服务器中。
- Swoole框架同PHP框架一样，适用于Web开发。而Swoole扩展提供了更底层的服务器通信机制，可以使用UDP、TCP等协议，而不仅是HTTP协议。
- 安装方式上，Swoole扩展同其他PHP扩展一样，可以用pecl安装，也可以编译安装。而Swoole框架用composer引入之后安装即可，或者下载源码后手动引入。
- 基于Swoole扩展，可以做出多种框架，而不仅是Web框架。而Swoole框架依赖Swoole扩展，是Swoole扩展的应用实例。





## 25 应用Smarty模板开发电子商务网站

e-business
