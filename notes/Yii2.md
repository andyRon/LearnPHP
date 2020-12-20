https://www.yiichina.com/doc/guide/2.0

# 1 入门

## 运行应用

浏览器底部有调试工具

### 应用结构

重要的目录和文件（basic）：

```
basic/             应用根目录
  composer.json    Composer 配置文件, 描述包信息
  config/          包含应用配置及其它配置
​    console.php    控制台应用配置信息
​    web.php       Web 应用配置信息
  commands/      包含控制台命令类
  controllers/      包含控制器类
  models/         包含模型类
  runtime/        包含 Yii 在运行时生成的文件，例如日志和缓存文件
  vendor/         包含已经安装的 Composer 包，包括 Yii 框架自身
  views/         包含视图文件
  web/          Web 应用根目录，包含 Web 入口文件
​    assets/       包含 Yii 发布的资源文件（javascript 和 css）
​    index.php    应用入口文件
  yii             Yii 控制台命令执行脚本
```

Yii2的每一个应用都有唯一可访问的PHP入口脚本`web/index.php` 。入口脚本接受一个 Web 请求并创建**应用实例**去处理它。 应用在它的**组件**辅助下解析请求， 并分派请求至 MVC 元素。视图使用**小部件**去创建复杂和动态的用户界面。

![img](evernotecid://A2503746-B0DC-4723-B533-C4F2EA8D22E3/appyinxiangcom/6720819/ENResource/p24743)

### 请求生命周期

![img](evernotecid://A2503746-B0DC-4723-B533-C4F2EA8D22E3/appyinxiangcom/6720819/ENResource/p24742)

## say Hello

### 创建动作

action前缀后面的名称被映射为**操作的ID**。

### 创建视图

视图脚本输出的内容将会作为响应结果返回给应用。应用将依次输出结果给最终用户。

say视图执行的结果会被自动嵌入称为**布局**的文件中， 本例中是 `views/layouts/main.php` 。

URL中的参数r代表**路由**，是整个应用级的， 指向特定操作的独立 ID。路由格式是 **控制器ID/操作ID**。

控制器 ID 和操作 ID 使用同样的命名规则。 控制器的类名源自于控制器 ID， 移除了连字符，每个单词首字母大写，并加上 Controller 后缀。

例子：控制器 ID post-comment 相当于控制器类名 PostCommentController。

## 使用表单

yii\base\Model 被用于普通模型类的父类并与数据表无关。yii\db\ActiveRecord 通常是普通模型类的父类但与数据表有关联（译注：yii\db\ActiveRecord 类其实也是继承自 yii\base\Model，增加了数据库处理）。

表达式`Yii::$app`代表[应用](https://www.yiichina.com/doc/guide/2.0/structure-applications)实例，它是一个全局可访问的单例。 同时它也是一个[服务定位器](https://www.yiichina.com/doc/guide/2.0/concept-service-locator)， 能提供request，response，db等等特定功能的组件。 在上面的代码里就是使用request组件来访问应用实例收到的$_POST数据。

Yii 提供了相当多类似的小部件去帮你生成复杂且动态的视图。

# 2 应用结构

## 总览

[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)代表数据、业务逻辑和规则；[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)展示模型的输出；[控制器](https://www.yiichina.com/doc/guide/2.0/structure-controllers)接受出入并将其转换为[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)和[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)命令。

[入口脚本](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts)：终端用户能直接访问的 PHP 脚本， 负责启动一个请求处理周期。

[应用](https://www.yiichina.com/doc/guide/2.0/structure-applications)：能全局范围内访问的对象， 管理协调组件来完成请求.

[应用组件](https://www.yiichina.com/doc/guide/2.0/structure-application-components)：在应用中注册的对象， 提供不同的功能来完成请求。

[模块](https://www.yiichina.com/doc/guide/2.0/structure-modules)：包含完整 MVC 结构的独立包， 一个应用可以由多个模块组建。

[过滤器](https://www.yiichina.com/doc/guide/2.0/structure-filters)：控制器在处理请求之前或之后 需要触发执行的代码。

[小部件](https://www.yiichina.com/doc/guide/2.0/structure-widgets)：可嵌入到[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)中的对象， 可包含控制器逻辑，可被不同视图重复调用。

## 入口脚本

`web/index.php`和`yii`

1. 定义全局常量；
2. 注册 [Composer 自动加载器](http://getcomposer.org/doc/01-basic-usage.md#autoloading)；
3. 包含 [Yii](https://www.yiichina.com/doc/api/2.0/yii) 类文件；
4. 加载应用配置；
5. 创建一个[应用](https://www.yiichina.com/doc/guide/2.0/structure-applications)实例并配置;
6. 调用 [yii\base\Application::run()](https://www.yiichina.com/doc/api/2.0/yii-base-application#run()-detail) 来处理请求。

```php
// 1
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// 2
require __DIR__ . '/../vendor/autoload.php';
// 3
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// 4
$config = require __DIR__ . '/../config/web.php';

// 5、6
(new yii\web\Application($config))->run();
```



## 应用主体

应用主体是管理 Yii 应用系统整体结构和生命周期的对象。 每个 Yii 应用系统只能包含一个应用主体，应用主体在入口脚本中创建并能通过表达式**\Yii::$app**全局范围内访问。

两种应用主体： 网页应用主体（yii\web\Application）和 控制台应用主体（yii\console\Application）

### 应用主体配置

网页应用和控制台应用的主体配置分别是：`config/web.php`和`config/console.php`。

应用主体配置文件标明**如何设置应用对象初始属性**。

主体配置文件中再包含其他配置文件。

### 应用主体属性

必要和重要属性：

| 应用主体属性                                                 | 意思                                                         | 分类       | 备注                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ---------- | ------------------------------------------------------------ |
| [id](https://www.yiichina.com/doc/api/2.0/yii-base-module#$id-detail) | 应用的唯一标识ID                                             | 必要属性   |                                                              |
| [basePath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$basePath-detail) | 应用的根目录。比如`basic/`                                   | 必要属性   |                                                              |
| [aliases](https://www.yiichina.com/doc/api/2.0/yii-base-module#$aliases-detail) | 定义别名，可用数组定义多个别名。等价于[Yii::setAlias()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#setAlias()-detail)方法。 | 重要属性   |                                                              |
| [bootstrap](https://www.yiichina.com/doc/api/2.0/yii-base-application#bootstrap()-detail) | 用数组指定启动阶段 [bootstrapping process](https://www.yiichina.com/doc/api/2.0/yii-base-application#bootstrap()-detail) 需要运行的组件。 |            | 启动太多的组件会降低系统性能，因为每次请求都需要重新运行启动组件， 因此谨慎配置启动组件。 |
| [catchAll](https://www.yiichina.com/doc/api/2.0/yii-web-application#$catchAll-detail) | 指定一个要处理所有用户请求的 [控制器方法](https://www.yiichina.com/doc/guide/2.0/structure-controllers)， 通常在维护模式下使用，同一个方法处理所有用户请求。 |            | 只能网页应用                                                 |
| [components](https://www.yiichina.com/doc/api/2.0/yii-di-servicelocator#$components-detail) | 用来注册多个在其他地方使用的 [应用组件](https://www.yiichina.com/doc/guide/2.0/#structure-application-components)。 |            |                                                              |
| [controllerMap](https://www.yiichina.com/doc/api/2.0/yii-base-module#$controllerMap-detail) | 指定一个控制器 ID 到任意控制器类                             | 最重要属性 |                                                              |
| [controllerNamespace](https://www.yiichina.com/doc/api/2.0/yii-base-application#$controllerNamespace-detail) | 指定控制器类默认的命名空间                                   |            |                                                              |
| [language](https://www.yiichina.com/doc/api/2.0/yii-base-application#$language-detail) | 指定应用展示给终端用户的语言                                 |            |                                                              |
| [modules](https://www.yiichina.com/doc/api/2.0/yii-base-module#$modules-detail) | 定应用所包含的 [模块](https://www.yiichina.com/doc/guide/2.0/structure-modules)。 |            |                                                              |
| [name](https://www.yiichina.com/doc/api/2.0/yii-base-application#$name-detail) | 指定可能想展示给终端用户的应用名称，不是唯一的。             |            |                                                              |
| [params](https://www.yiichina.com/doc/api/2.0/yii-base-module#$params-detail) | 指定可以全局访问的参数， 代替程序中硬编码的数字和字符， 应用中的参数定义到一个单独的文件并随时可以访问是一个好习惯。 |            |                                                              |
| [sourceLanguage](https://www.yiichina.com/doc/api/2.0/yii-base-application#$sourceLanguage-detail) | 指定应用代码的语言                                           |            |                                                              |
| [timeZone](https://www.yiichina.com/doc/api/2.0/yii-base-application#$timeZone-detail) | 修改 PHP 运行环境中的默认时区，配置该属性本质上就是调用 PHP 函数 [date_default_timezone_set()](http://php.net/manual/en/function.date-default-timezone-set.php) |            |                                                              |
| [version](https://www.yiichina.com/doc/api/2.0/yii-base-module#$version-detail) |                                                              |            |                                                              |

实用属性：

### 应用事件

应用在处理请求过程中会触发事件，可以在配置文件配置事件处理代码。

### 应用主体生命周期

![Application Lifecycle](https://www.yiichina.com/doc/guide/2.0/images/application-lifecycle.png)



## 应用组件

不能的**应用组件**提供不同功能来处理请求，它们有唯一ID，通过`\Yii::$app->componentID`访问。

第一次使用某个组件时，组件会被创建实例，之后无需再次创建。

### 引导启动组件

如果想在每个请求处理过程都实例化某个组件即便它不会被访问，可在应用主体属性**bootstrap**里配置。

### 核心应用组件

## 控制器

继承[yii\base\Controller](https://www.yiichina.com/doc/api/2.0/yii-base-controller)类的对象，负责处理请求和生成响应。 控制器从[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications) 接管控制后会分析请求数据并传送到[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)， 传送模型结果到[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)，最后生成输出响应信息。

### 动作

控制器由 **操作** 组成，它是执行终端用户请求的最基础的单元， 一个控制器可有一个或多个操作。

### 路由

```
ControllerID/ActionID
ModuleID/ControllerID/ActionID
```

### 创建控制器

#### 控制器部署

可通过配置controllerMap来强制上述的控制器ID和类名对应， 通常用在使用第三方不能掌控类名的控制器上。

```php
[
    'controllerMap' => [
        // 用类名申明 "account" 控制器
        'account' => 'app\controllers\UserController',

        // 用配置数组申明 "article" 控制器
        'article' => [
            'class' => 'app\controllers\PostController',
            'enableCsrfValidation' => false,
        ],
    ],
]
```

#### 默认控制器

每个应用有一个由[yii\base\Application::$defaultRoute](https://www.yiichina.com/doc/api/2.0/yii-base-module#$defaultRoute-detail)属性指定的默认控制器； 当请求没有指定 [路由](https://www.yiichina.com/doc/guide/2.0/structure-controllers#ids-routes)，该属性值作为路由使用。 对于[Web applications](https://www.yiichina.com/doc/api/2.0/yii-web-application)网页应用，它的值为 `'site'`，对于 [console applications](https://www.yiichina.com/doc/api/2.0/yii-console-application) 控制台应用，它的值为 `help`，所以URL为 `http://hostname/index.php` 表示由 `site` 控制器来处理。

可以在配置文件中修改。

### 创建动作

#### 内联动作

action前缀

#### 独立动作

独立操作通过继承[yii\base\Action](https://www.yiichina.com/doc/api/2.0/yii-base-action)或它的子类来定义。

在控制器中覆盖[yii\base\Controller::actions()](https://www.yiichina.com/doc/api/2.0/yii-base-controller#actions()-detail)方法：

```php
public function actions()
{
    return [
        // 用类来申明"error" 动作
        'error' => 'yii\web\ErrorAction',

        // 用配置数组申明 "view" 动作
        'view' => [
            'class' => 'yii\web\ViewAction',
            'viewPrefix' => '',
        ],
    ];
}
```

#### 动作结果

#### 动作参数

#### 默认动作

 [yii\base\Controller::$defaultAction](https://www.yiichina.com/doc/api/2.0/yii-base-controller#$defaultAction-detail) 

### 控制器生命周期



## 模型

模型是代表业务数据、规则和逻辑的对象。

通过继承 [yii\base\Model](https://www.yiichina.com/doc/api/2.0/yii-base-model) 或它的子类定义模型类。

### 属性

模型通过 **属性** 来代表业务数据，每个属性像是模型的公有可访问属性， [yii\base\Model::attributes()](https://www.yiichina.com/doc/api/2.0/yii-base-model#attributes()-detail) 指定模型所拥有的属性。

#### 属性标签

 [yii\base\Model::getAttributeLabel()](https://www.yiichina.com/doc/api/2.0/yii-base-model#getAttributeLabel()-detail)

[yii\base\Model::generateAttributeLabel()  自动从属性名生成标签](https://www.yiichina.com/doc/api/2.0/yii-base-model#generateAttributeLabel()-detail)

[yii\base\Model::attributeLabels()](https://www.yiichina.com/doc/api/2.0/yii-base-model#attributeLabels()-detail)   指定标签

### 场景

模型可能在多个 **场景** 下使用，例如 `User` 模块可能会在收集用户登录输入， 也可能会在用户注册时使用。在不同的场景下， 模型可能会使用不同的业务规则和逻辑， 例如 `email` 属性在注册时强制要求有，但在登陆时不需要。

 [yii\base\Model::$scenario](https://www.yiichina.com/doc/api/2.0/yii-base-model#$scenario-detail)

### 验证规则

当模型接收到终端用户输入的数据， 数据应当满足某种规则(称为 **验证规则**, 也称为 **业务规则**)。 例如假定`ContactForm`模型，你可能想确保所有属性不为空且 `email` 属性包含一个有效的邮箱地址， 如果某个属性的值不满足对应的业务规则， 相应的错误信息应显示，以帮助用户修正错误。

可调用 [yii\base\Model::validate()](https://www.yiichina.com/doc/api/2.0/yii-base-model#validate()-detail) 来验证接收到的数据， 该方法使用[yii\base\Model::rules()](https://www.yiichina.com/doc/api/2.0/yii-base-model#rules()-detail)申明的验证规则来验证每个相关属性， 如果没有找到错误，会返回 true， 否则它会将错误保存在 [yii\base\Model::$errors](https://www.yiichina.com/doc/api/2.0/yii-base-model#$errors-detail) 属性中并返回false。

### 块赋值



### 数据导出



## 视图

### 创建视图

### 渲染视图

#### 控制器中渲染

#### 小部件中渲染

#### 视图中渲染

#### 其它地方渲染

#### 视图名

#### 视图中访问数据

#### 视图间共享数据

### 布局

布局是一种特殊的视图，代表多个视图的公共部分。

### 使用视图组件

### 视图事件

### 渲染静态页面



## 模块

模块是独立的软件单元，由[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)，[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)， [控制器](https://www.yiichina.com/doc/guide/2.0/structure-controllers)和其他支持组件组成， 终端用户可以访问在[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications)中已安装的模块的控制器， 模块被当成小应用主体来看待，和[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications)不同的是， 模块不能单独部署，必须属于某个应用主体。



## 过滤器

过滤器是 [控制器动作](https://www.yiichina.com/doc/guide/2.0/structure-controllers#actions) 执行之前或之后执行的对象。 例如访问控制过滤器可在动作执行之前来控制特殊终端用户是否有权限执行动作， 内容压缩过滤器可在动作执行之后发给终端用户之前压缩响应内容。

过滤器可包含**预过滤**（过滤逻辑在动作*之前*）或**后过滤**（过滤逻辑在动作*之后*）， 也可同时包含两者。



### 核心过滤器

#### AccessControl

#### 认证方法过滤器

#### ContentNegotiator

#### HttpCache 

#### PageCache

#### RateLimiter

#### VerbFilter

#### CORS

跨域资源共享（Cross-origin resource sharing ，CORS）

## 小部件

小部件是在视图中使用的**可重用单元**， 使用面向对象方式创建复杂和可配置用户界面单元。



## 前端资源（Assets）

Yii 中的资源是和 Web 页面相关的文件，可为 CSS 文件，JavaScript 文件，图片或视频等， 资源放在 Web 可访问的目录下，直接被 Web 服务器调用。



## 扩展

扩展是专门设计的在 Yii 应用中随时可拿来使用的， 并可重发布的软件包。例如， [yiisoft/yii2-debug](https://github.com/yiisoft/yii2-debug) 扩展在你的应用的每个页面底部添加一个方便用于调试的工具栏， 帮助你简单地抓取页面生成的情况。 你可以使用扩展来加速你的开发过程。



# 3 请求处理

![Request Lifecycle](https://www.yiichina.com/doc/guide/2.0/images/request-lifecycle.png)

每一次 Yii 应用开始处理 HTTP 请求的过程（请求的生命周期）：

1. 用户提交指向 [入口脚本](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts) `web/index.php` 的请求。
2. 入口脚本会加载 [配置数组](https://www.yiichina.com/doc/guide/2.0/concept-configurations) 并创建一个 [应用](https://www.yiichina.com/doc/guide/2.0/structure-applications) 实例用于处理该请求。
3. 应用会通过 [request（请求）](https://www.yiichina.com/doc/guide/2.0/runtime-requests) 应用组件解析被请求的 [路由](https://www.yiichina.com/doc/guide/2.0/runtime-routing)。
4. 应用创建一个 [controller（控制器）](https://www.yiichina.com/doc/guide/2.0/structure-controllers) 实例具体处理请求。
5. 控制器会创建一个 [action（动作）](https://www.yiichina.com/doc/guide/2.0/structure-controllers) 实例并为该动作执行相关的 Filters（访问过滤器）。
6. 如果任何一个过滤器验证失败，该动作会被取消。
7. 如果全部的过滤器都通过，该动作就会被执行。
8. 动作会加载一个数据模型，一般是从数据库中加载。
9. 动作会渲染一个 View（视图），并为其提供所需的数据模型。
10. 渲染得到的结果会返回给 [response（响应）](https://www.yiichina.com/doc/guide/2.0/runtime-responses) 应用组件。
11. 响应组件会把渲染结果发回给用户的浏览器。

## 启动引导（Bootstrapping）

启动引导是指：在应用开始解析并处理新接受请求之前，一个预先准备环境的过程。 启动引导会在两个地方具体进行：[入口脚本(Entry Script)](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts)和[应用主体（application）](https://www.yiichina.com/doc/guide/2.0/structure-applications)。

Composer 自动加载器

## 路由引导与创建URL

**路由引导（routing）**：当入口脚本在调用 run() 方法时，它进行的第一个操作就是解析输入的请求，然后实例化对应的控制器动作处理这个请求。 

URL管理器（urlManager）：负责路由解析和创建URL的组件。其中 [parseRequest()](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager#parseRequest()-detail) 来解析请求的URL并返回路由信息和参数，  [createUrl()](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager#createUrl()-detail) 来根据提供的路由和参数创建一个可访问的URL。

### URL格式化

### 创建 URLs

`yii\helpers\Url::to()`

### 使用美化的 URL



### URL规范化



### 性能考虑



## 请求（Requests）

一个应用的请求是用 [yii\web\Request](https://www.yiichina.com/doc/api/2.0/yii-web-request) 对象来表示的，该对象提供了诸如 请求参数、HTTP头、cookies等信息。

## 响应（Responses）

当一个应用在处理完一个[请求](https://www.yiichina.com/doc/guide/2.0/runtime-requests)后, 这个应用会生成一个 [response](https://www.yiichina.com/doc/api/2.0/yii-web-response) 响应对象并把这个响应对象发送给终端用户 这个响应对象包含的信息有 HTTP 状态码，HTTP 头和主体内容等, 从本质上说，网页应用开发最终的目标就是**根据不同的请求去构建这些响应对象**。



## Sessions和Cookies



## 错误处理

Yii 内置了一个[error handler](https://www.yiichina.com/doc/api/2.0/yii-web-errorhandler)错误处理器，它使错误处理更方便， Yii错误处理器做以下工作来提升错误处理效果：

- 所有非致命PHP错误（如，警告，提示）会转换成可获取异常；
- 异常和致命的PHP错误会被显示， 在调试模式会显示详细的函数调用栈和源代码行数。
- 支持使用专用的 [控制器操作](https://www.yiichina.com/doc/guide/2.0/structure-controllers#actions) 来显示错误；
- 支持不同的错误响应格式；



## 日志



### 日志消息



### 日志目标



### 性能分析



# 4 关键概念

## 组件（Components）

组件是 Yii 应用的主要基石<是 [yii\base\Component](https://www.yiichina.com/doc/api/2.0/yii-base-component) 类或其子类的实例。 区分组件和其它类不同的主要功能有：

- [属性（Property）](https://www.yiichina.com/doc/guide/2.0/concept-properties)
- [事件（Event）](https://www.yiichina.com/doc/guide/2.0/concept-events)
- [行为（Behavior）](https://www.yiichina.com/doc/guide/2.0/concept-behaviors)



## 属性（Properties）



## 事件（Events）

事件处理器（Event Handlers）
附加事件处理器（Attaching Event Handlers）
事件处理器顺序（Event Handler Order）
触发事件（Triggering Events）
移除事件处理器（Detaching Event Handlers）
类级别的事件处理器（Class-Level Event Handlers）
使用接口事件（Events using interfaces）
全局事件（Global Events）
通配符事件（Wildcard Events）

## 行为（Behaviors）

行为是 [yii\base\Behavior](https://www.yiichina.com/doc/api/2.0/yii-base-behavior) 或其子类的实例。 行为，也称为 [mixins](http://en.wikipedia.org/wiki/Mixin)， 可以无须改变类继承关系即可增强一个已有的 [组件](https://www.yiichina.com/doc/api/2.0/yii-base-component) 类功能。 当行为附加到组件后，它将“注入”它的方法和属性到组件， 然后可以像访问组件内定义的方法和属性一样访问它们。 此外，行为通过组件能响应被触发的[事件](https://www.yiichina.com/doc/guide/2.0/basic-events)，从而自定义或调整组件正常执行的代码。



## 配置（Configurations）

配置的格式（Configuration Format）
使用配置（Using Configurations）
配置文件（Configuration Files）
默认配置（Default Configurations）
环境常量（Environment Constants）



## 别名（Aliases）

别名用来表示文件路径和 URL，这样就避免了在代码中硬编码一些绝对路径和 URL。 一个别名必须以 `@` 字符开头，以区别于传统的文件路径和 URL。 没有前导 `@` 定义的别名将以 `@` 字符作为前缀。



## 类自动加载（Autoloading）

Yii 依靠[类自动加载机制](http://www.php.net/manual/en/language.oop5.autoload.php)来定位和包含所需的类文件。 它提供一个高性能且完美支持[PSR-4 标准](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) 的自动加载器。 该自动加载器会在引入框架文件 `Yii.php` 时安装好。



## 服务定位器（Service Locator）

服务定位器是一个了解如何提供各种应用所需的服务（或组件）的对象。在服务定位器中， 每个组件都只有一个单独的实例，并通过ID 唯一地标识。 用这个 ID 就能从服务定位器中得到这个组件。

[yii\di\ServiceLocator](https://www.yiichina.com/doc/api/2.0/yii-di-servicelocator) 





## 依赖注入容器（Dependency Injection Container）

依赖注入（Dependency Injection，DI）容器就是一个对象，它知道怎样初始化并配置对象及其依赖的所有对象。



# 5 配合数据库工作

## 数据库访问对象（Database Access Objects）

Yii 包含了一个建立在 PHP PDO 之上的数据访问层 (DAO)。DAO为不同的数据库提供了一套统一的API。 其中 `ActiveRecord` 提供了数据库与模型(MVC 中的 M,Model) 的交互，`QueryBuilder` 用于创建动态的查询语句。 DAO提供了简单高效的SQL查询，可以用在与数据库交互的各个地方。



## 查询生成器（Query Builder）

查询构建器建立在DAO基础之上，可让你创建 程序化的、DBMS无关的SQL语句。相比于原生的SQL语句，查询构建器可以帮你 写出可读性更强的SQL相关的代码，并生成安全性更强的SQL语句。



## 活动记录（Active Record）

[Active Record](http://zh.wikipedia.org/wiki/Active_Record) 提供了一个面向对象的接口， 用以访问和操作数据库中的数据。Active Record 类与数据库表关联， Active Record 实例对应于该表的一行， Active Record 实例的**属性**表示该行中特定列的值。 您可以访问 Active Record 属性并调用 Active Record 方法来访问和操作存储在数据库表中的数据， 而不用编写原始 SQL 语句。



## 数据库迁移（Migrations）



## yii2-redis 扩展详解



# 6 接受用户数据

## 创建表单



### 基于活动记录（ActiveRecord）的表单：ActiveForm



## 输入验证

根据经验，永远不应该信任从最终用户收到的数据， 并且应该在充分利用之前对其进行验证。

### 声明规则（Rules）



### 临时验证



### 创建验证器（Validators）



### 多属性验证



### 客户端验证



### AJAX 验证



## 文件上传

在Yii里上传文件通常使用 [yii\web\UploadedFile](https://www.yiichina.com/doc/api/2.0/yii-web-uploadedfile) 类， 它把每个上传的文件封装成 `UploadedFile` 对象。 结合 [yii\widgets\ActiveForm](https://www.yiichina.com/doc/api/2.0/yii-widgets-activeform) 和 [models](https://www.yiichina.com/doc/guide/2.0/structure-models)，可以轻松实现安全的上传文件机制。



## 收集列表输入



## 多模型同时输入

当需要处理复杂数据，很可能需要使用多个不同的模型来收集用户提交的数据。 举例来说，假设用户登录信息保存在 `user` 表，但是用户基本信息保存在 `profile` 表， 可能需要同时使用 `User` 模型和 `Profile` 模型来获取用户登录信息和基本信息。 使用 Yii 提供的模型和表单支持，解决这样的问题和处理单一模型并不会有太大的区别。



## 在客户端扩展 ActiveForm

[yii\widgets\ActiveForm](https://www.yiichina.com/doc/api/2.0/yii-widgets-activeform) 小部件附带一组用于客户端验证的 JavaScript 方法。



# 7 显示数据

## 数据格式器（Data Formatting）



## 分页（Pagination）



## 排序（Sorting）



## 数据提供器（Data Providers）



## 数据小部件（Data Widgets）

### DetailView



### ListView



### GridView



## 操作客户端脚本（Working with Client Scripts）

Yii 提供的用于向网站添加 JavaScript 和 CSS 以及动态调整它们的方法。



## 主题（Theming）

主题是一种将当前的一套视图 [views](https://www.yiichina.com/doc/guide/2.0/structure-views) 替换为另一套视图，而无需更改视图渲染代码的方法。 你可以使用主题来系统地更改应用的外观和体验。



# 8 安全

## 认证（Authentication）

认证是鉴定用户身份的过程。它通常使用一个标识符 （如用户名或电子邮件地址）和一个加密令牌（比如密码或者存取令牌）来 鉴别用户身份。认证是登录功能的基础。



## 授权（Authorization）

授权是指验证用户是否允许做某件事的过程。

Yii提供两种授权方法： 存取控制过滤器（ACF）和基于角色的存取控制（RBAC）。

### 存取控制过滤器（ACF）



### 基于角色的存取控制 （RBAC）



### 为用户分配角色（Assigning roles to users）



## 处理密码（Working with Passwords）



## 加密（Cryptography）

### 生成伪随机数据（Generating Pseudorandom Data）

### 加密和解密（Encryption and Decryption）

### 确认数据完整性（Confirming Data Integrity）



## 客户端认证（Auth Clients）



## 安全领域的最佳实践（Best Practices）

基本准则
避免 SQL 注入
防止 XSS 攻击
防止 CSRF 攻击
防止文件暴露
在生产环境关闭调试信息和工具
使用 TLS 上的安全连接
安全服务器配置

# 9 缓存

缓存是提升 Web 应用性能简便有效的方式。 通过将相对静态的数据存储到缓存并在收到请求时取回缓存， 应用程序便节省了每次重新生成这些数据所需的时间。

缓存可以应用在 Web 应用程序的任何层级任何位置。 

在服务器端，在较的低层面，缓存可能用于存储基础数据，例如从数据库中取出的最新文章列表； 

在较高的层面，缓存可能用于存储一段或整个 Web 页面， 例如最新文章的渲染结果；

在客户端，HTTP 缓存可能用于 将最近访问的页面内容存储到浏览器缓存中。

## 数据缓存（Data Caching）

数据缓存是指将一些 PHP 变量存储到缓存中，使用时再从缓存中取回。 它也是更高级缓存特性的基础，例如[查询缓存](https://www.yiichina.com/doc/guide/2.0/caching-data#query-caching) 和[内容缓存](https://www.yiichina.com/doc/guide/2.0/caching-content)。

## 片段缓存（Fragment Caching）

片段缓存指的是缓存页面内容中的某个片段。片段缓存是基于[数据缓存](https://www.yiichina.com/doc/guide/2.0/caching-data)实现的。

## 页面缓存（Page Caching）



## HTTP 缓存（HTTP Caching）

Web 应用可以利用客户端缓存 去节省相同页面内容的生成和传输时间。



# 10 RESTful Web 服务





# 11 开发工具

## [调试工具栏和调试器（Debug Toolbar and Debugger）](https://github.com/yiisoft/yii2-debug/blob/master/docs/guide-zh-CN/README.md)



## [使用 Gii 生成代码（Generating Code using Gii）](https://github.com/yiisoft/yii2-gii/blob/master/docs/guide-zh-CN/README.md)



## [生成 API 文档（Generating API Documentation）](https://github.com/yiisoft/yii2-apidoc)



# 12 测试



## 搭建测试环境（Testing environment setup）

Yii 2 官方兼容 [`Codeception`](https://github.com/Codeception/Codeception) 测试框架。



## 单元测试（Unit Tests）



## 功能测试（Functional Tests）



## 验收测试（Acceptance Tests）



## 测试夹具（Fixtures）



# 13 高级专题



## 创建你自己的应用程序结构



## 控制台命令（Console Commands）



## 核心验证器（Core Validators）

1. [boolean（布尔型）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#boolean)
2. [captcha（验证码）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#captcha)
3. [compare（比对）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#compare)
4. [date（日期）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#date)
5. [default（默认值）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#default)
6. [double（双精度浮点型）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#double)
7. [each（循环验证）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#each)
8. [email（电子邮件）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#email)
9. [exist（存在性）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#exist)
10. [file（文件）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#file)
11. [filter（过滤器）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#filter)
12. [image（图片）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#image)
13. [ip（IP地址）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#ip)
14. [in（范围）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#in)
15. [integer（整数）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#integer)
16. [match（正则表达式）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#match)
17. [number（数字）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#number)
18. [required（必填）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#required)
19. [safe（安全）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#safe)
20. [string（字符串）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#string)
21. [trim（译为修剪/裁边）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#trim)
22. [unique（唯一性）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#unique)
23. [url（网址）](https://www.yiichina.com/doc/guide/2.0/tutorial-core-validators#url)



## Docker



## 国际化（Internationalization）

区域和语言（Locale and Language）
消息翻译（Message Translation）
消息格式化（Message Formatting）
视图的翻译（View Translation）
格式化日期和数字值（Formatting Date and Number Values）
设置 PHP 环境（Setting Up PHP Environment）



## 收发邮件（Mailing）



## 性能优化（Performance Tuning）



## 共享主机环境（Shared Hosting Environment）



## 模板引擎（Template Engines）



## 集成第三方代码（Working with Third-Party Code）



## 使用 Yii 作为微框架（Using Yii as a micro framework）





# 14 小部件（Widgets）

- [GridView](http://www.yiiframework.com/doc-2.0/yii-grid-gridview.html)
- [ListView](http://www.yiiframework.com/doc-2.0/yii-widgets-listview.html)
- [DetailView](http://www.yiiframework.com/doc-2.0/yii-widgets-detailview.html)
- [ActiveForm](http://www.yiiframework.com/doc-2.0/guide-input-forms.html#activerecord-based-forms-activeform)
- [Pjax](http://www.yiiframework.com/doc-2.0/yii-widgets-pjax.html)
- [Menu](http://www.yiiframework.com/doc-2.0/yii-widgets-menu.html)
- [LinkPager](http://www.yiiframework.com/doc-2.0/yii-widgets-linkpager.html)
- [LinkSorter](http://www.yiiframework.com/doc-2.0/yii-widgets-linksorter.html)
- [Bootstrap Widgets](https://github.com/yiisoft/yii2-bootstrap/blob/master/docs/guide-zh-CN/README.md)
- [jQuery UI Widgets](https://github.com/yiisoft/yii2-jui/blob/master/docs/guide-zh-CN/README.md)

# 15 助手类（Helpers）

## 助手一览（Overview）

### 核心助手类

ArrayHelper
Console
FileHelper
Html
HtmlPurifier
Imagine（由 yii2-imagine 扩展提供）
Inflector
Json
Markdown
Security
StringHelper
Url
VarDumper

### 自定义助手类



## 数组助手



## Html 助手



## Url 助手