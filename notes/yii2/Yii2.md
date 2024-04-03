Yii 2.0 权威指南
---

https://www.yiichina.com/doc/guide/2.0

# 1 入门

## 安装

### 1 通过 Composer 安装

### 2 通过归档文件安装

直接下载复制即可，注意配置`cookieValidationKey`

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

![应用静态结构](https://www.yiichina.com/doc/guide/2.0/images/application-structure.png)

### 请求生命周期

![请求生命周期](https://www.yiichina.com/doc/guide/2.0/images/request-lifecycle.png)

1. 用户向[入口脚本](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts) `web/index.php` 发起请求。
2. 入口脚本加载应用[配置](https://www.yiichina.com/doc/guide/2.0/concept-configurations)并创建一个[应用](https://www.yiichina.com/doc/guide/2.0/structure-applications) 实例去处理请求。
3. 应用通过[请求](https://www.yiichina.com/doc/guide/2.0/runtime-request)组件解析请求的 [路由](https://www.yiichina.com/doc/guide/2.0/runtime-routing)。
4. 应用创建一个[控制器](https://www.yiichina.com/doc/guide/2.0/structure-controllers)实例去处理请求。
5. 控制器创建一个[动作](https://www.yiichina.com/doc/guide/2.0/structure-controllers)实例并针对操作执行过滤器。
6. 如果任何一个过滤器返回失败，则动作取消。
7. 如果所有过滤器都通过，动作将被执行。
8. 动作会加载一个数据模型，或许是来自数据库。
9. 动作会渲染一个视图，把数据模型提供给它。
10. 渲染结果返回给[响应](https://www.yiichina.com/doc/guide/2.0/runtime-responses)组件。
11. 响应组件发送渲染结果给用户浏览器。

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

> **注意：** 在这个简单例子里我们只是呈现了有效数据的确认页面。 实践中你应该考虑使用 [refresh()](https://www.yiichina.com/doc/api/2.0/yii-web-controller#refresh()-detail) 或 [redirect()](https://www.yiichina.com/doc/api/2.0/yii-web-controller#redirect()-detail) 去避免表单重复提交问题。

> **警告：** 客户端验证是提高用户体验的手段。 无论它是否正常启用，服务端验证则都是必须的，请不要忽略它。

Yii 提供了相当多类似的小部件去帮你生成复杂且动态的视图。



## Gii

```
http://hostname/index.php?r=gii
```





# 2 应用结构

## 总览

[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)代表数据、业务逻辑和规则；[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)展示模型的输出；[控制器](https://www.yiichina.com/doc/guide/2.0/structure-controllers)接受出入并将其转换为[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)和[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)命令。

[入口脚本](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts)：终端用户能直接访问的 PHP 脚本， 负责启动一个请求处理周期。

[应用](https://www.yiichina.com/doc/guide/2.0/structure-applications)：能全局范围内访问的对象， 管理协调组件来完成请求.

[应用组件](https://www.yiichina.com/doc/guide/2.0/structure-application-components)：在应用中注册的对象， 提供不同的功能来完成请求。

[模块](https://www.yiichina.com/doc/guide/2.0/structure-modules)：包含完整 MVC 结构的独立包， 一个应用可以由多个模块组建。

[过滤器](https://www.yiichina.com/doc/guide/2.0/structure-filters)：控制器在处理请求之前或之后 需要触发执行的代码。

[小部件](https://www.yiichina.com/doc/guide/2.0/structure-widgets)：可嵌入到[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)中的对象， 可包含控制器逻辑，可被不同视图重复调用。

## 入口脚本（Entry Scripts）

`web/index.php`和`yii`(命令运行方式：`./yii <route> [arguments] [options]`)

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

应用主体是管理 Yii 应用系统整体结构和生命周期的对象。 每个 Yii 应用系统只能包含一个应用主体，应用主体在入口脚本中创建并能通过表达式**`\Yii::$app`**全局范围内访问。

两种应用主体： 网页应用主体（yii\web\Application）和 控制台应用主体（yii\console\Application）

### 1 应用主体配置

网页应用和控制台应用的主体配置分别是：`config/web.php`和`config/console.php`。

应用主体配置文件标明**如何设置应用对象初始属性**。

主体配置文件中再包含其他配置文件。

### 2 应用主体属性

#### 必要属性

##### [id](https://www.yiichina.com/doc/api/2.0/yii-base-module#$id-detail)

应用的唯一标识ID。

##### [basePath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$basePath-detail)

应用的根目录。比如`basic/`。

经常用于派生一些其他重要路径（如 runtime 路径）， 因此，系统预定义 `@app` 代表这个路径。 派生路径可以通过这个别名组成（如`@app/runtime`代表runtime的路径）。

#### 重要属性

##### [aliases](https://www.yiichina.com/doc/api/2.0/yii-base-module#$aliases-detail)

定义别名，可用数组定义多个别名。等价于[Yii::setAlias()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#setAlias()-detail)方法。

```php
[
    'aliases' => [
        '@name1' => 'path/to/path1',
        '@name2' => 'path/to/path2',
    ],
]
```

##### [bootstrap](https://www.yiichina.com/doc/api/2.0/yii-base-application#bootstrap()-detail)

用数组指定启动阶段 [bootstrapping process](https://www.yiichina.com/doc/api/2.0/yii-base-application#bootstrap()-detail)需要运行的组件。

启动太多的组件会降低系统性能，因为每次请求都需要重新运行启动组件， 因此谨慎配置启动组件。

##### [catchAll](https://www.yiichina.com/doc/api/2.0/yii-web-application#$catchAll-detail)

只能网页应用。

指定一个要处理所有用户请求的 [控制器方法](https://www.yiichina.com/doc/guide/2.0/structure-controllers)， 通常在维护模式下使用，同一个方法处理所有用户请求。

##### [components](https://www.yiichina.com/doc/api/2.0/yii-di-servicelocator#$components-detail)

用来注册多个在其他地方使用的 [应用组件](https://www.yiichina.com/doc/guide/2.0/#structure-application-components)。

##### [controllerMap](https://www.yiichina.com/doc/api/2.0/yii-base-module#$controllerMap-detail)

指定一个控制器 ID 到任意控制器类
最重要属性

##### [controllerNamespace](https://www.yiichina.com/doc/api/2.0/yii-base-application#$controllerNamespace-detail)

指定控制器类默认的命名空间

##### [language](https://www.yiichina.com/doc/api/2.0/yii-base-application#$language-detail)

指定应用展示给终端用户的语言

##### [modules](https://www.yiichina.com/doc/api/2.0/yii-base-module#$modules-detail)

定应用所包含的 [模块](https://www.yiichina.com/doc/guide/2.0/structure-modules)。

##### [name](https://www.yiichina.com/doc/api/2.0/yii-base-application#$name-detail)

指定可能想展示给终端用户的应用名称，不是唯一的。

##### [params](https://www.yiichina.com/doc/api/2.0/yii-base-module#$params-detail)

指定可以全局访问的参数， 代替程序中硬编码的数字和字符， 应用中的参数定义到一个单独的文件并随时可以访问是一个好习惯。

##### [sourceLanguage](https://www.yiichina.com/doc/api/2.0/yii-base-application#$sourceLanguage-detail)

指定应用代码的语言

##### [timeZone](https://www.yiichina.com/doc/api/2.0/yii-base-application#$timeZone-detail)

修改 PHP 运行环境中的默认时区，配置该属性本质上就是调用 PHP 函数 [date_default_timezone_set()](http://php.net/manual/en/function.date-default-timezone-set.php)

##### [version](https://www.yiichina.com/doc/api/2.0/yii-base-module#$version-detail)

#### 实用属性

##### [charset](https://www.yiichina.com/doc/api/2.0/yii-base-application#$charset-detail)

##### [defaultRoute](https://www.yiichina.com/doc/api/2.0/yii-base-module#$defaultRoute-detail)

##### [extensions](https://www.yiichina.com/doc/api/2.0/yii-base-application#$extensions-detail)

##### [layout](https://www.yiichina.com/doc/api/2.0/yii-base-application#$layout-detail)

##### [layoutPath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$layoutPath-detail)

##### [runtimePath](https://www.yiichina.com/doc/api/2.0/yii-base-application#$runtimePath-detail)

##### [viewPath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$viewPath-detail)

##### [vendorPath](https://www.yiichina.com/doc/api/2.0/yii-base-application#$vendorPath-detail)

##### [enableCoreCommands](https://www.yiichina.com/doc/api/2.0/yii-console-application#$enableCoreCommands-detail)

### 3 应用事件 🔖

应用在处理请求过程中会触发事件，可以在配置文件配置事件处理代码。

```php
[
    'on beforeRequest' => function ($event) {
        // ...
    },
]
```

EVENT_BEFORE_REQUEST

EVENT_AFTER_REQUEST

EVENT_BEFORE_ACTION 

EVENT_AFTER_ACTION 

### 4 应用主体生命周期

![Application Lifecycle](https://www.yiichina.com/doc/guide/2.0/images/application-lifecycle.png)

1. 入口脚本加载应用主体配置数组。
2. 入口脚本创建一个应用主体实例：
   - 调用 [preInit()](https://www.yiichina.com/doc/api/2.0/yii-base-application#preInit()-detail) 配置几个高级别应用主体属性， 比如 [basePath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$basePath-detail)。
   - 注册 [error handler](https://www.yiichina.com/doc/api/2.0/yii-base-application#$errorHandler-detail) 错误处理方法。
   - 配置应用主体属性。
   - 调用 [init()](https://www.yiichina.com/doc/api/2.0/yii-base-application#init()-detail) 初始化，该函数会调用 [bootstrap()](https://www.yiichina.com/doc/api/2.0/yii-base-application#bootstrap()-detail) 运行引导启动组件。
3. 入口脚本调用 yii\base\Application::run()运行应用主体:
   - 触发 [EVENT_BEFORE_REQUEST](https://www.yiichina.com/doc/api/2.0/yii-base-application#EVENT_BEFORE_REQUEST-detail) 事件。
   - 处理请求：解析请求 [路由](https://www.yiichina.com/doc/guide/2.0/runtime-routing) 和相关参数； 创建路由指定的模块、控制器和动作对应的类，并运行动作。
   - 触发 [EVENT_AFTER_REQUEST](https://www.yiichina.com/doc/api/2.0/yii-base-application#EVENT_AFTER_REQUEST-detail) 事件。
   - 发送响应到终端用户。
4. 入口脚本接收应用主体传来的退出状态并完成请求的处理。

## 应用组件

`components`

不能的**应用组件**提供不同功能来处理请求，它们有唯一ID，通过`\Yii::$app->componentID`访问。

第一次使用某个组件时，组件会被创建实例，之后无需再次创建。

> **信息：** 请谨慎注册太多应用组件， 应用组件就像全局变量， 使用太多可能加大测试和维护的难度。 一般情况下可以在需要时再创建本地组件。

### 引导启动组件

如果想在每个请求处理过程都实例化某个组件即便它不会被访问，可在应用主体属性**`bootstrap`**里配置。

### 核心应用组件



## 控制器

继承[yii\base\Controller](https://www.yiichina.com/doc/api/2.0/yii-base-controller)类的对象，负责处理请求和生成响应。 控制器从[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications) 接管控制后会分析请求数据并传送到[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)， 传送模型结果到[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)，最后生成输出响应信息。

### 1 动作

控制器由 **操作** 组成，它是执行终端用户请求的最基础的单元， 一个控制器可有一个或多个操作。

### 2 路由

```
ControllerID/ActionID
ModuleID/ControllerID/ActionID
```

### 3 创建控制器

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

### 4 创建动作

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

### 5 控制器生命周期

处理一个请求时，[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications) 会根据请求 [路由](https://www.yiichina.com/doc/guide/2.0/structure-controllers#routes)创建一个控制器， 控制器经过以下生命周期来完成请求：

1. 在控制器创建和配置后，[yii\base\Controller::init()](https://www.yiichina.com/doc/api/2.0/yii-base-baseobject#init()-detail) 方法会被调用。
2. 控制器根据请求操作ID创建一个操作对象:
   - 如果操作ID没有指定，会使用[default action ID](https://www.yiichina.com/doc/api/2.0/yii-base-controller#$defaultAction-detail)默认操作ID；
   - 如果在[action map](https://www.yiichina.com/doc/api/2.0/yii-base-controller#actions()-detail)找到操作ID， 会创建一个独立操作；
   - 如果操作ID对应操作方法，会创建一个内联操作；
   - 否则会抛出[yii\base\InvalidRouteException](https://www.yiichina.com/doc/api/2.0/yii-base-invalidrouteexception)异常。
3. 控制器按顺序调用应用主体、模块（如果控制器属于模块）、控制器的`beforeAction()`方法；
   - 如果任意一个调用返回false，后面未调用的`beforeAction()`会跳过并且操作执行会被取消； action execution will be cancelled.
   - 默认情况下每个 `beforeAction()` 方法会触发一个 `beforeAction` 事件，在事件中你可以追加事件处理操作；
4. 控制器执行操作:
   - 请求数据解析和填入到操作参数；
5. 控制器按顺序调用控制器、模块（如果控制器属于模块）、应用主体的`afterAction()`方法；
   - 默认情况下每个 `afterAction()` 方法会触发一个 `afterAction` 事件， 在事件中你可以追加事件处理操作；
6. 应用主体获取操作结果并赋值给[响应](https://www.yiichina.com/doc/guide/2.0/runtime-responses)。



## 模型

模型是代表业务数据、规则和逻辑的对象。

通过继承 [yii\base\Model](https://www.yiichina.com/doc/api/2.0/yii-base-model) 或它的子类定义模型类。

### 1 属性

模型通过 **属性** 来代表业务数据，每个属性像是模型的公有可访问属性， [yii\base\Model::attributes()](https://www.yiichina.com/doc/api/2.0/yii-base-model#attributes()-detail) 指定模型所拥有的属性。

#### 属性标签

[yii\base\Model::getAttributeLabel()](https://www.yiichina.com/doc/api/2.0/yii-base-model#getAttributeLabel()-detail)

[yii\base\Model::generateAttributeLabel()  自动从属性名生成标签](https://www.yiichina.com/doc/api/2.0/yii-base-model#generateAttributeLabel()-detail)

[yii\base\Model::attributeLabels()](https://www.yiichina.com/doc/api/2.0/yii-base-model#attributeLabels()-detail)   指定标签





### 2 场景

模型可能在多个 **场景** 下使用，例如 `User` 模块可能会在收集用户登录输入， 也可能会在用户注册时使用。在不同的场景下， 模型可能会使用不同的业务规则和逻辑， 例如 `email` 属性在注册时强制要求有，但在登陆时不需要。

 [yii\base\Model::$scenario](https://www.yiichina.com/doc/api/2.0/yii-base-model#$scenario-detail)



### 3 验证规则

当模型接收到终端用户输入的数据， 数据应当满足某种规则(称为 **验证规则**, 也称为 **业务规则**)。 例如假定`ContactForm`模型，你可能想确保所有属性不为空且 `email` 属性包含一个有效的邮箱地址， 如果某个属性的值不满足对应的业务规则， 相应的错误信息应显示，以帮助用户修正错误。

可调用 [yii\base\Model::validate()](https://www.yiichina.com/doc/api/2.0/yii-base-model#validate()-detail) 来验证接收到的数据， 该方法使用[yii\base\Model::rules()](https://www.yiichina.com/doc/api/2.0/yii-base-model#rules()-detail)申明的验证规则来验证每个相关属性， 如果没有找到错误，会返回 true， 否则它会将错误保存在 [yii\base\Model::$errors](https://www.yiichina.com/doc/api/2.0/yii-base-model#$errors-detail) 属性中并返回false。

### 4 块赋值





### 5 数据导出

字段





## 视图

### 1 创建视图



### 2 渲染视图

#### 控制器中渲染

#### 小部件中渲染

#### 视图中渲染

#### 其它地方渲染

#### 视图名

#### 视图中访问数据

#### 视图间共享数据



### 3 布局 🔖

布局是一种特殊的视图，代表多个视图的公共部分， 例如，大多数Web应用共享相同的页头和页尾， 在每个视图中重复相同的页头和页尾，更好的方式是将这些公共放到一个布局中， 渲染内容视图后在合适的地方嵌入到布局中。

#### 创建布局

#### 布局中访问数据

#### 使用布局

#### 嵌套布局

#### 使用数据块



### 4 使用视图组件 🔖

[View components](https://www.yiichina.com/doc/api/2.0/yii-base-view)视图组件提供许多视图相关特性， 可创建[yii\base\View](https://www.yiichina.com/doc/api/2.0/yii-base-view)或它的子类实例来获取视图组件，大多数情况下主要使用 `view` 应用组件， 可在[应用配置](https://www.yiichina.com/doc/guide/2.0/structure-applications#application-configurations)中配置该组件， 如下所示：

```php
[
    // ...
    'components' => [
        'view' => [
            'class' => 'app\components\View',
        ],
        // ...
    ],
]
```



### 5 视图事件

[View components](https://www.yiichina.com/doc/api/2.0/yii-base-view) 视图组件会在视图渲染过程中触发几个事件， 可以在内容发送给终端用户前，响应这些事件来添加内容到视图中或调整渲染结果。





### 6 渲染静态页面



## 模块

模块是独立的软件单元，由[模型](https://www.yiichina.com/doc/guide/2.0/structure-models)，[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)， [控制器](https://www.yiichina.com/doc/guide/2.0/structure-controllers)和其他支持组件组成， 终端用户可以访问在[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications)中已安装的模块的控制器， 模块被当成小应用主体来看待，和[应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications)不同的是， 模块不能单独部署，必须属于某个应用主体。

### 1 创建模块

```
forum/
    Module.php                   模块类文件
    controllers/                 包含控制器类文件
        DefaultController.php    default 控制器类文件
    models/                      包含模型类文件
    views/                       包含控制器视图文件和布局文件
        layouts/                 包含布局文件
        default/                 包含 DefaultController 控制器视图文件
            index.php            index 视图文件
```



### 2 使用模块



### 3 模块嵌套



### 4 从模块内部访问组件



## 过滤器

`ActionFilter`

过滤器是 [控制器动作](https://www.yiichina.com/doc/guide/2.0/structure-controllers#actions) 执行之前或之后执行的对象。 例如访问控制过滤器可在动作执行之前来控制特殊终端用户是否有权限执行动作， 内容压缩过滤器可在动作执行之后发给终端用户之前压缩响应内容。

过滤器可包含**预过滤**（过滤逻辑在动作*之前*）或**后过滤**（过滤逻辑在动作*之后*）， 也可同时包含两者。

### 1 使用过滤器

过滤器本质上是一类特殊的 [行为](https://www.yiichina.com/doc/guide/2.0/concept-behaviors)， 所以使用过滤器和 [使用行为](https://www.yiichina.com/doc/guide/2.0/concept-behaviors#attaching-behaviors)一样。 可以在控制器类中覆盖它的 [behaviors()](https://www.yiichina.com/doc/api/2.0/yii-base-component#behaviors()-detail) 方法来声明过滤器，如下所示：

```php
public function behaviors()
{
    return [
        [
            'class' => 'yii\filters\HttpCache',
            'only' => ['index', 'view'],
            'lastModified' => function ($action, $params) {
                $q = new \yii\db\Query();
                return $q->from('user')->max('updated_at');
            },
        ],
    ];
}
```



### 2 创建过滤器

继承 [yii\base\ActionFilter](https://www.yiichina.com/doc/api/2.0/yii-base-actionfilter) 类并覆盖 [beforeAction()](https://www.yiichina.com/doc/api/2.0/yii-base-actionfilter#beforeAction()-detail) 或 [afterAction()](https://www.yiichina.com/doc/api/2.0/yii-base-actionfilter#afterAction()-detail) 方法来创建动作的过滤器，前者在动作执行之前执行，后者在动作执行之后执行。 [beforeAction()](https://www.yiichina.com/doc/api/2.0/yii-base-actionfilter#beforeAction()-detail) 返回值决定动作是否应该执行， 如果为 false，之后的过滤器和动作不会继续执行。



### 3 核心过滤器

Yii 提供了一组常用过滤器，在 `yii\filters` 命名空间下

#### `AccessControl`

#### 认证方法过滤器

#### ContentNegotiator

#### HttpCache 

#### PageCache

#### RateLimiter

#### VerbFilter

#### CORS

跨域资源共享（Cross-origin resource sharing ，CORS）



## 小部件(widgets)

小部件是在视图中使用的**可重用单元**， 使用面向对象方式创建复杂和可配置用户界面单元。

Yii提供许多优秀的小部件，比如 [active form](https://www.yiichina.com/doc/api/2.0/yii-widgets-activeform)，[menu](https://www.yiichina.com/doc/api/2.0/yii-widgets-menu)， [jQuery UI widgets](https://www.yiichina.com/doc/guide/2.0/widget-jui)， [Twitter Bootstrap widgets](https://www.yiichina.com/doc/guide/2.0/widget-bootstrap)。





## 前端资源（Assets）🔖

Yii 中的资源是和 Web 页面相关的文件，可为 CSS 文件，JavaScript 文件，图片或视频等， 资源放在 Web 可访问的目录下，直接被 Web 服务器调用。

通过程序自动管理资源更好一点，例如，当你在页面中使用 yii\jui\DatePicker 小部件时， 它会自动包含需要的 CSS 和 JavaScript 文件， 而不是要求你手工去找到这些文件并包含， 当你升级小部件时，它会自动使用新版本的资源文件。

### 1 资源包

Yii 在*资源包*中管理资源，资源包简单的说就是放在一个目录下的资源集合， 当在[视图](https://www.yiichina.com/doc/guide/2.0/structure-views)中注册一个资源包， 在渲染 Web 页面时会包含包中的 CSS 和 JavaScript 文件。

#### 定义资源包

 [yii\web\AssetBundle](https://www.yiichina.com/doc/api/2.0/yii-web-assetbundle) 





### 2 使用资源包





### 3 常用资源包



### 4 资源转换





### 5 合并和压缩资源



## 扩展（Extensions）

扩展是专门设计的在 Yii 应用中随时可拿来使用的， 并可重发布的软件包。例如， [yiisoft/yii2-debug](https://github.com/yiisoft/yii2-debug) 扩展在你的应用的每个页面底部添加一个方便用于调试的工具栏， 帮助你简单地抓取页面生成的情况。 你可以使用扩展来加速你的开发过程。



### 核心扩展





# 3 请求处理（Handling Requests）

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

在[入口脚本](https://www.yiichina.com/doc/guide/2.0/structure-entry-scripts)里，需注册各个类库的类文件自动加载器（Class Autoloader，简称自动加载器）。 这主要包括通过其 `autoload.php` 文件加载的Composer 自动加载器，以及通过 `Yii` 类加载的 Yii 自动加载器。之后， 入口脚本会加载应用的[配置（configuration）](https://www.yiichina.com/doc/guide/2.0/concept-configurations)并创建一个 [应用主体](https://www.yiichina.com/doc/guide/2.0/structure-applications) 的实例。

在应用主体的构造函数中，会执行以下引导工作：

1. 调用 [preInit()](https://www.yiichina.com/doc/api/2.0/yii-base-application#preInit()-detail)（预初始化）方法，配置一些高优先级的应用属性， 比如 [basePath](https://www.yiichina.com/doc/api/2.0/yii-base-module#$basePath-detail) 属性。
2. 注册[错误处理器（ErrorHandler）](https://www.yiichina.com/doc/api/2.0/yii-base-application#$errorHandler-detail)。
3. 通过给定的应用配置初始化应用的各属性。
4. 通过调用`init()`（初始化）方法，它会顺次调用`bootstrap()`从而运行引导组件。
   - 加载扩展清单文件(extension manifest file) `vendor/yiisoft/extensions.php`。
   - 创建并运行各个扩展声明的 [引导组件（bootstrap components）](https://www.yiichina.com/doc/guide/2.0/structure-extensions#bootstrapping-classes)。
   - 创建并运行各个 [应用组件](https://www.yiichina.com/doc/guide/2.0/structure-application-components) 以及在应用的 [Bootstrap 属性](https://www.yiichina.com/doc/guide/2.0/structure-applications#bootstrap)中声明的各个 [模块（modules）组件](https://www.yiichina.com/doc/guide/2.0/structure-modules)（如果有）。

因为引导工作必须在处理**每一次**请求之前都进行一遍，因此让该过程尽可能轻量化就异常重要， 请尽可能地优化这一步骤。

请尽量不要注册太多引导组件。只有他需要在 HTTP 请求处理的全部生命周期中都作用时才需要使用它。 举一个用到它的范例：一个模块需要注册额外的 URL 解析规则，就应该把它列在应用的 [bootstrap 属性](https://www.yiichina.com/doc/guide/2.0/structure-applications#bootstrap)之中， 这样该 URL 解析规则才能在解析请求之前生效。（译注：换言之，为了性能需要，除了 URL 解析等少量操作之外，绝大多数组件都应该按需加载，而不是都放在引导过程中。）

在生产环境中，可以开启==字节码缓存==，比如 APC， 来进一步最小化加载和解析PHP文件所需的时间。

一些大型应用都包含有非常复杂的应用[配置](https://www.yiichina.com/doc/guide/2.0/concept-configurations)， 它们会被分割到许多更小的配置文件中。 此时，可以考虑将整个配置数组缓存起来， 并在入口脚本创建应用实例之前直接从缓存中加载。

## 路由

**路由引导（routing）**：当入口脚本在调用 run() 方法时，它进行的第一个操作就是解析输入的请求，然后实例化对应的控制器动作处理这个请求。 

==URL管理器（urlManager）==（`yii\web\UrlManager`）：负责路由解析和创建URL的组件。其中 [parseRequest()](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager#parseRequest()-detail) 来解析请求的URL并返回路由信息和参数，  [createUrl()](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager#createUrl()-detail) 来根据提供的路由和参数创建一个可访问的URL。

### 1 URL格式化

- 请求被解析成一个路由和关联的参数；
- 路由相关的一个[控制器动作](https://www.yiichina.com/doc/guide/2.0/structure-controllers#actions)被创建出来处理这个请求。





### 2 路由处理

#### 缺省路由



#### `catchAll` 路由（全拦截路由）







### 3 创建 URLs

`yii\helpers\Url::to()`



### 4 使用美化的URL

#### URL规则



#### 命名参数



#### 参数化路由



#### 默认参数值



#### 带服务名称的规则



#### URL 后缀



#### HTTP 方法



#### 动态添加规则



#### 创建规则类

自定义的规则类

### 5 URL规范化





### 6 性能考虑

在开发复杂的 Web 应用程序时，优化 URL 规则非常重要，以便解析请求和创建 URL 所需 的时间更少。

通过使用参数化路由，您可以减少 URL 规则的数量，这可以显著提高性能。

当解析或创建URL时，[URL manager](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager) 按照它们声明的顺序检查 URL 规则。 因此，您可以考虑调整 URL 规则的顺序，以便在较少使用的规则之前放置更具体和/或更常用的规则。

如果多个 URL 规则使用相同的前缀，你可以考虑使用 [yii\web\GroupUrlRule](https://www.yiichina.com/doc/api/2.0/yii-web-groupurlrule)， 这样作为一个组合，[URL管理器](https://www.yiichina.com/doc/api/2.0/yii-web-urlmanager)会更高效。 特别是当应用程序由模块组合而成时，每个模块都有各自的 URL 规则且都有各自的模块 ID 作为前缀。



## 请求（Requests）

一个应用的请求是用 [yii\web\Request](https://www.yiichina.com/doc/api/2.0/yii-web-request) 对象来表示的，该对象提供了诸如 请求参数、HTTP头、cookies等信息。



### 请求参数

> 建议你像上面那样通过 `request` 组件来获取请求参数，而不是 直接访问 `$_GET` 和 `$_POST`。 这使你更容易编写测试用例，因为你可以伪造数据来创建一个模拟请求组件。



### 请求方法



### 请求URLs

`request` 组件提供了许多方式来检测当前请求的 URL。

假设被请求的 URL 是 `http://example.com/admin/index.php/product?id=100`， 你可以像下面描述的那样获取 URL 的各个部分：

- [url](https://www.yiichina.com/doc/api/2.0/yii-web-request#$url-detail)：返回 `/admin/index.php/product?id=100`, 此 URL 不包括主机信息部分。
- [absoluteUrl](https://www.yiichina.com/doc/api/2.0/yii-web-request#$absoluteUrl-detail)：返回 `http://example.com/admin/index.php/product?id=100`, 包含host infode的整个URL。
- [hostInfo](https://www.yiichina.com/doc/api/2.0/yii-web-request#$hostInfo-detail)：返回 `http://example.com`, 只有主机信息部分。
- [pathInfo](https://www.yiichina.com/doc/api/2.0/yii-web-request#$pathInfo-detail)：返回 `/product`， 这个是入口脚本之后，问号之前（查询字符串）的部分。
- [queryString](https://www.yiichina.com/doc/api/2.0/yii-web-request#$queryString-detail)：返回 `id=100`，问号之后的部分。
- [baseUrl](https://www.yiichina.com/doc/api/2.0/yii-web-request#$baseUrl-detail)：返回 `/admin`，主机信息之后， 入口脚本之前的部分。
- [scriptUrl](https://www.yiichina.com/doc/api/2.0/yii-web-request#$scriptUrl-detail)：返回 `/admin/index.php`，没有路径信息和查询字符串部分。
- [serverName](https://www.yiichina.com/doc/api/2.0/yii-web-request#$serverName-detail)：返回 `example.com`，URL 中的主机名。
- [serverPort](https://www.yiichina.com/doc/api/2.0/yii-web-request#$serverPort-detail)：返回 80，这是 web 服务中使用的端口。

### HTTP头





## 响应（Responses）

当一个应用在处理完一个[请求](https://www.yiichina.com/doc/guide/2.0/runtime-requests)后, 这个应用会生成一个 [response](https://www.yiichina.com/doc/api/2.0/yii-web-response) 响应对象并把这个响应对象发送给终端用户 这个响应对象包含的信息有 HTTP 状态码，HTTP 头和主体内容等, 从本质上说，网页应用开发最终的目标就是**==根据不同的请求去构建这些响应对象==**。

### 状态码



### HTTP 头部



### 响应主体



### 浏览器跳转



### 发送文件



### 发送响应



## Sessions和Cookies



## 错误处理

Yii 内置了一个[error handler](https://www.yiichina.com/doc/api/2.0/yii-web-errorhandler)错误处理器，它使错误处理更方便， Yii错误处理器做以下工作来提升错误处理效果：

- 所有非致命PHP错误（如，警告，提示）会转换成可获取异常；
- 异常和致命的PHP错误会被显示， 在调试模式会显示详细的函数调用栈和源代码行数。
- 支持使用专用的 [控制器操作](https://www.yiichina.com/doc/guide/2.0/structure-controllers#actions) 来显示错误；
- 支持不同的错误响应格式；



## 日志🔖



### 日志消息

- [Yii::trace()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#trace()-detail)：记录一条消息去跟踪一段代码是怎样运行的。这主要在开发的时候使用。
- [Yii::info()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#info()-detail)：记录一条消息来传达一些有用的信息。
- [Yii::warning()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#warning()-detail)：记录一个警告消息用来指示一些已经发生的意外。
- [Yii::error()](https://www.yiichina.com/doc/api/2.0/yii-baseyii#error()-detail)：记录一个致命的错误，这个错误应该尽快被检查。

### 日志目标

[yii\log\Target](https://www.yiichina.com/doc/api/2.0/yii-log-target) 



#### 消息过滤

对于每一个日志目标，你可以配置它的 [levels](https://www.yiichina.com/doc/api/2.0/yii-log-target#$levels-detail) 和 [categories](https://www.yiichina.com/doc/api/2.0/yii-log-target#$categories-detail) 属性来指定哪个消息的严重程度和分类目标应该处理。

#### 消息格式化



#### 消息跟踪级别



#### 消息刷新和导出



#### 切换日志目标

#### 创建新的目标



### 性能分析



# 4 关键概念

## 组件（Components）

组件是 Yii 应用的主要基石<是 [yii\base\Component](https://www.yiichina.com/doc/api/2.0/yii-base-component) 类或其子类的实例。 区分组件和其它类不同的主要功能有：

- [属性（Property）](https://www.yiichina.com/doc/guide/2.0/concept-properties)
- [事件（Event）](https://www.yiichina.com/doc/guide/2.0/concept-events)
- [行为（Behavior）](https://www.yiichina.com/doc/guide/2.0/concept-behaviors)

或单独使用，或彼此配合，这些功能的应用让 Yii 的类变得更加灵活和易用。

正是因为组件功能的强大，他们比常规的对象（Object）稍微重量级一点，因为他们要使用额外的内存和 CPU 时间来处理 [事件](https://www.yiichina.com/doc/guide/2.0/concept-events) 和 [行为](https://www.yiichina.com/doc/guide/2.0/concept-behaviors) 。 如果你不需要这两项功能，可以继承 yii\base\Object 而不是 [yii\base\Component](https://www.yiichina.com/doc/api/2.0/yii-base-component)。这样组件可以像普通 PHP 对象一样高效， 同时还支持[属性（Property）](https://www.yiichina.com/doc/guide/2.0/concept-properties)功能。

## 属性（Properties）



## 事件（Events）🔖

事件可以将自定义代码“注入”到现有代码中的特定执行点。 附加自定义代码到某个事件，当这个事件被触发时，这些代码就会自动执行。 例如，邮件程序对象成功发出消息时可触发 `messageSent` 事件。 如想追踪成功发送的消息，可以附加相应追踪代码到 `messageSent` 事件。



### 事件处理器（Event Handlers）

事件处理器是一个[PHP 回调函数](http://www.php.net/manual/en/language.types.callable.php)， 当它所附加到的事件被触发时它就会执行。



### 附加事件处理器（Attaching Event Handlers）

 [yii\base\Component::on()](https://www.yiichina.com/doc/api/2.0/yii-base-component#on()-detail) 



### 事件处理器顺序（Event Handler Order）



### 触发事件（Triggering Events）



### 移除事件处理器（Detaching Event Handlers）



### 类级别的事件处理器（Class-Level Event Handlers）



### 使用接口事件（Events using interfaces）



### 全局事件（Global Events）



### 通配符事件（Wildcard Events）





## 行为（Behaviors）🔖

行为是 [yii\base\Behavior](https://www.yiichina.com/doc/api/2.0/yii-base-behavior) 或其子类的实例。 行为，也称为 [mixins](http://en.wikipedia.org/wiki/Mixin)， 可以无须改变类继承关系即可增强一个已有的 [组件](https://www.yiichina.com/doc/api/2.0/yii-base-component) 类功能。 当行为附加到组件后，它将“注入”它的方法和属性到组件， 然后可以像访问组件内定义的方法和属性一样访问它们。 此外，行为通过组件能响应被触发的[事件](https://www.yiichina.com/doc/guide/2.0/basic-events)，从而自定义或调整组件正常执行的代码。

### 定义行为



### 处理事件

如果要让行为响应对应组件的事件触发， 就应覆写 [yii\base\Behavior::events()](https://www.yiichina.com/doc/api/2.0/yii-base-behavior#events()-detail) 方法。



### 附加行为



### 使用行为



### 移除行为



### 使用 `TimestampBehavior`





## 配置（Configurations）

在 Yii 中，创建新对象和初始化已存在对象时广泛使用配置。 配置通常包含被创建对象的类名和一组将要赋值给对象 [属性](https://www.yiichina.com/doc/guide/2.0/concept-properties)的初始值。 还可能包含一组将被附加到对象[事件](https://www.yiichina.com/doc/guide/2.0/concept-events)上的句柄。 和一组将被附加到对象上的[行为](https://www.yiichina.com/doc/guide/2.0/concept-behaviors)。

### 配置的格式（Configuration Format）

### 使用配置（Using Configurations）

### 配置文件（Configuration Files）

### 默认配置（Default Configurations）

### 环境常量（Environment Constants）



## 别名（Aliases）

别名用来表示文件路径和 URL，这样就避免了在代码中硬编码一些绝对路径和 URL。 一个别名必须以 `@` 字符开头，以区别于传统的文件路径和 URL。 没有前导 `@` 定义的别名将以 `@` 字符作为前缀。

Yii 预定义了大量可用的别名。







## 类自动加载（Autoloading）🔖

Yii 依靠[类自动加载机制](http://www.php.net/manual/en/language.oop5.autoload.php)来定位和包含所需的类文件。 它提供一个高性能且完美支持[PSR-4 标准](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) 的自动加载器。 该自动加载器会在引入框架文件 `Yii.php` 时安装好。







## 服务定位器（Service Locator）🔖

服务定位器是一个了解如何提供各种应用所需的服务（或组件）的对象。在服务定位器中， 每个组件都只有一个单独的实例，并通过ID 唯一地标识。 用这个 ID 就能从服务定位器中得到这个组件。

[yii\di\ServiceLocator](https://www.yiichina.com/doc/api/2.0/yii-di-servicelocator) 

最常用的服务定位器是*application（应用）*对象，可以通过 `\Yii::$app` 访问。 它所提供的服务被称为*application components（应用组件）*， 比如：`request`、`response`、`urlManager` 组件。可以通过服务定位器所提供的功能， 非常容易地配置这些组件，或甚至是用你自己的实现替换掉他们。

除了 application 对象，每个模块对象本身也是一个服务定位器。





## 依赖注入容器（Dependency Injection Container）

依赖注入（Dependency Injection，DI）容器就是一个对象，它知道怎样初始化并配置对象及其依赖的所有对象。

### 依赖注入类型

- 构造方法注入;
- 方法注入;
- Setter 和属性注入;
- PHP 回调注入.



### 注册依赖关系（Registering Dependencies）



### 解决依赖关系（Resolving Dependencies）



### 实践中的运用（Practical Usage）



### 高级实用性（Advanced Practical Usage）



# 5 配合数据库工作 🔖

Yii 2.0的数据库操作主要有Active Record和Query Builder两种方式，它们都建立在底层的PDO数据库组件之上，使用统一的接口与数据库进行交互，提供了丰富的功能来处理数据库操作。

## 数据库访问对象（Database Access Objects）

Yii 包含了一个建立在 PHP PDO 之上的数据访问层 (DAO)。DAO为不同的数据库提供了一套统一的API。 其中 `ActiveRecord` 提供了数据库与模型(MVC 中的 M,Model) 的交互，`QueryBuilder` 用于创建动态的查询语句。 DAO提供了简单高效的SQL查询，可以用在与数据库交互的各个地方。



## 查询生成器（Query Builder）

查询构建器建立在DAO基础之上，可让你创建 程序化的、DBMS无关的SQL语句。相比于原生的SQL语句，查询构建器可以帮你 写出可读性更强的SQL相关的代码，并生成安全性更强的SQL语句。



## 活动记录（Active Record）

[Active Record](http://zh.wikipedia.org/wiki/Active_Record) 提供了一个面向对象的接口， 用以访问和操作数据库中的数据。Active Record 类与数据库表关联， Active Record 实例对应于该表的一行， Active Record 实例的**属性**表示该行中特定列的值。 您可以访问 Active Record 属性并调用 Active Record 方法来访问和操作存储在数据库表中的数据， 而不用编写原始 SQL 语句。



## 数据库迁移（Migrations）🔖



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

存取控制过滤器（ACF）是一种通过 [yii\filters\AccessControl](https://www.yiichina.com/doc/api/2.0/yii-filters-accesscontrol) 类来实现的简单授权方法， 非常适用于仅需要简单的存取控制的应用。



### 基于角色的存取控制 （RBAC）🔖





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

#### 缓存组件



#### 缓存 API



#### 查询缓存





## 片段缓存（Fragment Caching）

片段缓存指的是缓存页面内容中的某个片段。片段缓存是基于[数据缓存](https://www.yiichina.com/doc/guide/2.0/caching-data)实现的。

### 缓存选项



### 缓存嵌套



### 动态内容







## 页面缓存（Page Caching）

页面缓存指的是在服务器端缓存整个页面的内容。 随后当同一个页面被请求时，内容将从缓存中取出，而不是重新生成。





## HTTP 缓存（HTTP Caching）

Web 应用可以利用客户端缓存 去节省相同页面内容的生成和传输时间。

通过配置 [yii\filters\HttpCache](https://www.yiichina.com/doc/api/2.0/yii-filters-httpcache) 过滤器，控制器操作渲染的内容就能缓存在客户端。 [HttpCache](https://www.yiichina.com/doc/api/2.0/yii-filters-httpcache) 过滤器仅对 `GET` 和 `HEAD` 请求生效， 它能为这些请求设置三种与缓存有关的 HTTP 头。

Last-Modified
Etag
Cache-Control‘

# 10 RESTful Web 服务

## 快速入门

Yii 提供了一整套用来简化实现 RESTful 风格的 Web Service 服务的 API。 特别是，Yii 支持以下关于 RESTful 风格的 API：

- 支持 [Active Record](https://www.yiichina.com/doc/guide/2.0/db-active-record) 类的通用 API 的快速原型；
- 涉及的响应格式（在默认情况下支持 JSON 和 XML）；
- 支持可选输出字段的定制对象序列化；
- 适当的格式的数据采集和验证错误；
- 集合分页，过滤和排序；
- 支持 [HATEOAS](http://en.wikipedia.org/wiki/HATEOAS)；
- 有适当 HTTP 动词检查的高效的路由；
- 内置 `OPTIONS` 和 `HEAD` 动词的支持；
- 认证和授权；
- 数据缓存和 HTTP 缓存；
- 速率限制；



## 资源（Resources）

RESTful 的 API 都是关于访问和操作 资源，可将资源看成 MVC 模式中的 模型。



## 控制器



## 路由（Routing）



## 格式化响应（Response Formatting）

### 内容协商



### 数据序列化



### 控制 JSON 输出







## 授权验证（Authentication）





## 速率限制（Rate Limiting）



## 版本化（Versioning）



## 错误处理（Error Handling）





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



## 数组助手 🔖



## Html 助手



## Url 助手







