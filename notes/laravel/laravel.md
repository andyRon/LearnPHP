# Laravel





# Laravel 文档

https://learnku.com/docs/laravel/10.x

`example-app`学习Laravel时的项目

## 1 前言

### 10.x发行说明



### 升级指南



### 贡献导引

#### Laravel相关应用

[Laravel Application](https://github.com/laravel/laravel)

- [Laravel Art](https://github.com/laravel/art)
- [Laravel Documentation](https://github.com/laravel/docs)
- [Laravel Dusk](https://github.com/laravel/dusk)
- [Laravel Cashier Stripe](https://github.com/laravel/cashier)
- [Laravel Cashier Paddle](https://github.com/laravel/cashier-paddle)
- [Laravel Echo](https://github.com/laravel/echo)
- [Laravel Envoy](https://github.com/laravel/envoy)
- [Laravel Framework](https://github.com/laravel/framework)
- [Laravel Homestead](https://github.com/laravel/homestead)
- [Laravel Homestead Build Scripts](https://github.com/laravel/settler)
- [Laravel Horizon](https://github.com/laravel/horizon)
- [Laravel Jetstream](https://github.com/laravel/jetstream)
- [Laravel Passport](https://github.com/laravel/passport)
- [Laravel Pennant](https://github.com/laravel/pennant)
- [Laravel Pint](https://github.com/laravel/pint)
- [Laravel Sail](https://github.com/laravel/sail)
- [Laravel Sanctum](https://github.com/laravel/sanctum)
- [Laravel Scout](https://github.com/laravel/scout)
- [Laravel Socialite](https://github.com/laravel/socialite)

- [Laravel Telescope](https://github.com/laravel/telescope)
- [Laravel Website](https://github.com/laravel/laravel.com-next)



#### 代码风格



## 2 入门

### 2.1 安装

```sh
composer create-project laravel/laravel example-app
# 指定版本
composer create-project laravel/laravel example-app  10.x


composer global require laravel/installer
laravel new example-app
```







```sh
php artisan serve
```



#### Laravel 全栈框架

Laravel 可以作为一个全栈框架。全栈框架意味着你将使用 Laravel 将请求路由到你的应用程序，并通过 Blade 模板 或像 Inertia 这样的单页应用混合技术来渲染你的前端。这是使用 Laravel 框架最常见的方式，在我们看来，这也是使用 Laravel 最高效的方式。



如果你使用 Laravel 作为全栈框架，我们也强烈建议你学习如何使用 [Vite](https://learnku.com/docs/laravel/10.x/vite) 编译应用程序的 CSS 和 JavaScript 。



#### Laravel API 后端

Laravel 也可以作为 JavaScript 单页应用程序或移动应用程序的 API 后端。

 [路由](https://learnku.com/docs/laravel/10.x/routing)，[Laravel Sanctum](https://learnku.com/docs/laravel/10.x/sanctum) 和 [Eloquent ORM](https://learnku.com/docs/laravel/10.x/eloquent) 

### 2.2 配置信息

Laravel所有配置文件都在 config 目录。

```
php artisan about

php artisan about --only=environment

php artisan config:show database
```





#### 环境配置

 Laravel 利用[DotEnv](https://github.com/vlucas/phpdotenv)库加载配置文件`.env`中的配置。 



> `.env` 文件不应该提交到版本管理器中



获取当前环境配置: `App::environment()`



##### 环境文件加密🔖

```sh
php artisan env:encrypt [--key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF]

php artisan env:encrypt --env=staging

php artisan env:decrypt [--key=3UVsEgGVK36XN82KKeyLFMhvosbZN1aF] [--cipher=AES-128-CBC]
```





#### 访问配置值

`config('app.timezone')`



#### 配置缓存

`php artisan config:cache`





#### 调试模式

对于本地开发，你应该将 APP_DEBUG 环境变量设置为 true。 在你的生产环境中，此值应始终为 false。 如果在生产环境中将该变量设置为 true，你可能会将敏感的配置值暴露给应用程序的最终用户。



#### 维护模式

```sh
php artisan down [--refresh=15] [--retry=60]

# 将指示浏览器在指定秒数后自动刷新页面
php artisan down --refresh=15

php artisan up
```

##### 绕过维护模式



##### 预渲染维护模式视图🔖



##### 重定向维护模式请求

维护模式，指示 Laravel 重定向所有请求到一个特定的 URL

```sh
php artisan down --redirect=/
```



### 2.3 目录结构



默认的 Laravel 应用程序结构旨在为大型和小型应用程序提供一个良好的起点。但是你可以自由地组织你的应用程序。Laravel 几乎不会限制任何给定类的位置 —— **只要Composer可以自动加载类即可**。





### 2.4 前端 

在使用 Laravel 构建应用时，有两种主要的方式来解决前端开发问题，选择哪种方式取决于你是否想通过 PHP 或使用像 Vue 和 React 这样的 JavaScript 框架来构建前端。

#### 使用 PHP

Blade



#### Livewire 🔖

[Laravel Livewire](https://laravel-livewire.com/) 是一个用于构建 Laravel 前端的框架，具有与使用现代 JavaScript 框架（如 Vue 和 React ）构建的前端一样的动态、现代和生动的感觉。

[《Livewire 中文文档》](https://learnku.com/docs/livewire/3.x)

 [Alpine.js](https://alpinejs.dev/) 



#### 使用 Vue / React



[Inertia](https://inertiajs.com/) 可以桥接你的 Laravel 应用程序和现代 Vue 或 React 前端，使你可以使用 Vue 或 React 构建完整的现代前端，同时利用 Laravel 路由和控制器进行路由、数据注入和身份验证 - 所有这些都在单个代码存储库中完成。使用这种方法，你可以同时享受 Laravel 和 Vue / React 的全部功能，而不会破坏任何一种工具的能力。

🔖



##### 服务器端渲染

服务器端渲染（Server-Side Rendering，简称SSR）是一种在服务器端生成HTML页面的技术。在这种模式下，当用户请求一个页面时，服务器会处理请求，并将渲染好的HTML页面发送给客户端。客户端（如用户的浏览器）只需接收并显示这个已经渲染好的页面，而无需再执行任何JavaScript代码来生成页面内容。

与客户端渲染（Client-Side Rendering，简称CSR）相比，服务器端渲染有以下一些优点：

1. **更快的首屏加载时间**：由于HTML页面是在服务器端渲染完成的，所以用户可以更快地看到页面的内容，这对于那些需要快速呈现内容或搜索引擎优化（SEO）的网站来说尤其重要。
2. **更好的兼容性**：由于HTML是在服务器端生成的，所以不必担心JavaScript在不同浏览器上的兼容性问题。
3. **减轻客户端负担**：服务器端渲染将大部分渲染工作转移到了服务器上，从而减轻了客户端（如浏览器）的负担。

然而，服务器端渲染也有一些缺点：

1. **服务器压力**：由于每个页面请求都需要服务器进行渲染，所以在高并发的情况下，服务器可能会面临较大的压力。
2. **交互性受限**：服务器端渲染通常只能生成静态的HTML页面，对于需要复杂交互的页面来说，可能不太适用。
3. **不利于单页应用（SPA）**：对于那些需要频繁更新页面内容而不重新加载整个页面的单页应用来说，服务器端渲染可能不是最佳选择。

一些流行的服务器端渲染框架和库包括Nuxt.js（基于Vue.js）、Next.js（基于React）和Gatsby（基于React和GraphQL）等。这些工具提供了方便的方式来构建和部署服务器端渲染的应用。

总的来说，选择服务器端渲染还是客户端渲染取决于具体的应用场景和需求。在某些情况下，结合两者使用（如首屏服务器端渲染，后续页面客户端渲染）也是一个不错的选择。



#### 打包资源

无论你选择使用 Blade 和 Livewire 还是 Vue/React 和 Inertia 来开发你的前端，你都可能需要将你的应用程序的 CSS 打包成生产就绪的资源。当然，如果你选择用 Vue 或 React 来构建你的应用程序的前端，你也需要将你的组件打包成浏览器准备好的 JavaScript 资源。

默认情况下，Laravel 利用 [Vite](https://vitejs.dev/) 来打包你的资源。Vite 在本地开发过程中提供了闪电般的构建时间和接近即时的热模块替换（HMR）。



### 2.5 起步套件

#### Laravel Breeze

[Laravel Breeze](https://github.com/laravel/breeze) 是 Laravel 的 ==认证功能== 的一种简单、最小实现，包括登录、注册、密码重置、电子邮件验证和密码确认。此外，Breeze 还包括一个简单的「个人资料」页面，用户可以在该页面上更新其姓名、电子邮件地址和密码。

```sh
composer require laravel/breeze --dev
```







### 2.6 部署

如果你需要管理服务器，请考虑使用官方的 Laravel 服务器管理和部署服务，如 [Laravel Forge](https://forge.laravel.com/)。

#### nginx



```nginx
server {
    listen 80;
    listen [::]:80;
    server_name example.com;
    root /srv/example.com/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Web 服务器将所有请求指向应用程序的 public/index.php 文件。永远不要尝试将 index.php 文件移动到项目的根目录，因为从项目根目录为应用提供服务会将许多敏感配置文件暴露到公网。



#### 使用 Forge / Vapor 部署



[Laravel Vapor](https://vapor.laravel.com) 是一个由 AWS 提供支持的基于无服务器概念的 Laravel 部署平台。在 Vapor 上启动你的 Laravel 基础架构，并爱上无服务器的可扩展简单性。Laravel Vapor 由 Laravel 的创作者进行了精细调校，以便与框架无缝协作，因此你可以像以前一样继续编写 Laravel 应用程序。





## 3 核心架构

### 请求周期 

1. web 服务器（Apache/Nginx）配置定向

2. `public/index.php`

加载 Composer 生成的自动加载器定义；

从 bootstrap/app.php 中检索 Laravel 应用程序的实例

3. HTTP内核/Console内核 `Illuminate\Foundation\Http\Kernel`

该类定义了一个将在执行请求之前运行的 `bootstrappers` 数组。这些引导程序用来**配置异常处理、配置日志、检测应用程序环境，并执行在实际处理请求之前需要完成的其他任务**。

HTTP 内核还定义了一个 **HTTP中间件列表**，所有请求在被应用程序处理之前都必须通过该列表。这些中间件处理读写 HTTP 会话 ，确定应用程序是否处于维护模式， 校验 CSRF 令牌 , 等等。





最重要的内核引导操作之一是为==应用程序加载服务提供者== 。应用程序的所有服务提供程序都在 config/app.php 文件中的 providers 数组。



### 服务容器



### 服务提供者

`Illuminate\Support\ServiceProvider`

服务提供者是所有 Laravel 应用程序的引导中心。你的应用程序，以及通过服务器引导的 Laravel 核心服务都是通过服务提供器引导。



### Facades

在整个 Laravel 文档中，你将看到通过 Facades 与 Laravel 特性交互的代码示例。Facades 为应用程序的服务容器中可用的类提供了「静态代理」。在 Laravel 这艘船上有许多 Facades，提供了几乎所有 Laravel 的特征。

Laravel Facades 充当服务容器中底层类的「静态代理」，提供简洁、富有表现力的好处，同时保持比传统静态方法更多的可测试性和灵活性。



#### 辅助函数

[辅助函数文档](https://learnku.com/docs/laravel/10.x/helpers)



#### 何时使用Facades

Facades 有很多好处。它们提供了简洁、易记的语法，让你可以使用 Laravel 的功能而不必记住必须手动注入或配置的长类名。此外，由于它们独特地使用了 PHP 的动态方法，因此它们易于测试。



#### Facades 工作原理





#### 实时 Facades



## 4 基础功能

### 4.1 路由





### 4.2 中间体

中间件提供了一种方便的机制来检查和过滤进入应用程序的 HTTP 请求。

例如，Laravel 包含一个中间件，用于验证应用程序的用户是否经过身份验证。如果用户未通过身份验证，中间件会将用户重定向到应用程序的登录屏幕。 但是，如果用户通过了身份验证，中间件将允许请求进一步进入应用程序。

例如，日志中间件可能会将所有传入请求记录到你的应用程序。

所有这些中间件都位于 `app/Http/Middleware` 目录中。



最好将中间件设想为一系列「层」HTTP 请求在到达你的应用程序之前必须通过。每一层都可以检查请求，甚至完全拒绝它。

> 技巧：所有中间件都通过 服务容器 解析，因此你可以在中间件的构造函数中键入提示你需要的任何依赖项。






### 4.3 CSRF保护

跨站点请求伪造是一种恶意利用，利用这种手段，代表经过身份验证的用户执行未经授权的命令。

Laravel 可以轻松保护您的应用程序免受[跨站点请求伪造](https://en.wikipedia.org/wiki/Cross-site_request_forgery)（CSRF）攻击。



```php
// CSRF 保护 测试
Route::get('task/{id}/delete', function ($id) {
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">删除任务</button>
            </form>';
});
Route::delete('task/{id}', function ($id) {
    return 'Delete Task ' . $id;
})->name('task.delete');
```

报错，419

为了安全考虑，Laravel 期望所有路由都是「只读」操作的（对应请求方式是 GET、HEAD、OPTIONS），如果路由执行的是「写入」操作（对应请求方式是 POST、PUT、PATCH、DELETE），则需要传入一个隐藏的 Token 字段（`_token`）以避免[跨站请求伪造攻击]（CSRF）。在我们上面的示例中，请求方式是 DELETE，但是并没有传递 `_token` 字段，所以会出现异常。

避免跨站请求伪造攻击的措施就是对写入操作采用非 GET 方式请求，同时在请求数据中添加校验 Token 字段，Laravel 也是这么做的，这个 Token 值会在渲染表单页面时通过 Session 生成，然后传入页面，在每次提交表单时带上这个 Token 值即可实现安全写入，因为第三方站点是不可能拿到这个 Token 值的，所以由第三方站点提交的请求会被拒绝，从而避免 CSRF 攻击。

在 Laravel 中，和表单方法伪造一样，支持通过 HTML 表单隐藏字段传递这个值：

```php
Route::get('task/{id}/delete', function ($id) {
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE"> 
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <button type="submit">删除任务</button>
            </form>';
});
```

> **Request Payload（载荷）**
>
> ![](images/image-20240414125014596.png)
>
> ![](images/image-20240414125113927.png)



### 4.4 控制器

将所有业务逻辑一股脑放到控制器听起来挺不错，但是控制器更适合承担的角色其实是负责对 HTTP 请求进行路由，因为还有很多其他访问应用的方式，比如 Artisan 命令、队列、调度任务等等，控制器并非唯一入口，所以不适合也不应该将所有业务逻辑封装于此，过度依赖控制器会对以后应用的扩展带来麻烦。所以，你应该具备这样的意识：控制器的主要职责就是获取 HTTP 请求，进行一些简单处理（如验证）后将其传递给真正处理业务逻辑的职能部门，如 Service。

> 注：当然，如果是非常简单的应用，比如只是简单的数据库增删改查或数据渲染，放到控制器里面也无妨，但是如果后续需要调用控制器方法才能完成某个功能，那么是时候将这个控制器方法里的业务逻辑拆分到 Service 里面了。



#### 依赖注入

正如前面介绍的 `Input` 门面一样，Laravel 中的门面为 Laravel 代码库中的大部分类提供了简单的接口调用，通过门面你可以轻松从当前获取各种请求数据，比如用户输入、Session、Cookie 等，但不是所有的类都有对应的门面（当前的映射关系可以查看[门面列表](https://laravelacademy.org/post/9536.html#toc-6)），对于这些类提供的方法我们可以通过更底层的依赖注入来调用，本质上来看，门面仅仅是一种设计模式，是对底层复杂 API 的上层静态代理，主要目的在于简化代码调用，所以可以用门面调用的方法肯定可以用依赖注入来实现，而可以通过依赖注入实现的功能不一定可以通过门面来调用，除非你自定义实现这个门面。

提到依赖注入，就绕不开[服务容器](https://laravelacademy.org/post/9534.html)，关于服务容器后面我们会单独讲解，而现在你只需了解服务容器是一个绑定多个接口与具体服务实现类的容器，而依赖注入则是在代码编写时以接口（或者叫做类型提示）方式作为参数，不必传入具体实现类，在代码运行时会根据配置从服务容器获取接口对应的实现类执行具体的接口方法，从而极大提高了代码的可维护性和可扩展性。

在 Laravel 中所有的控制器方法（包括构造函数）都会在服务容器中进行解析，这意味着所有方法中传入的可以被容器解析的接口/类型提示对应服务实现都会被自动注入，我们将这个过程称之为依赖注入。我们上面演示的通过 `$request` 对象获取用户请求数据就是采用依赖注入的方式。

在日常开发中，推荐大家使用依赖注入而非门面来获取用户输入数据，除此之外，还可以通过 `$request` 对象获取 Session、Cookie 数据。



#### 资源控制器

有时候在编写控制器时命名方法名称可能是最困难的，好在 Laravel 为常见的 REST/CRUD 控制器（在 Laravel 中称之为「资源控制器」）提供了一套约定规则，并为此提供了相应的 Artisan 生成器和路由定义方法，从方便我们一次为所有控制器方法定义路由。

使用这个 Artisan 生成器来生成一个资源控制器:

```sh
php artisan make:controller PostController --resource
```



##### 资源控制器方法列表

生成的 `PostController` 控制器的每个方法都有对应的请求方式、路由命名、URL、方法名和业务逻辑约定。

| HTTP请求方式 | URL            | 控制器方法 | 路由命名    | 业务逻辑描述                 |
| ------------ | -------------- | ---------- | ----------- | ---------------------------- |
| GET          | post           | index()    | post.index  | 展示所有文章                 |
| GET          | post/create    | create()   | post.create | 发布文章表单页面             |
| POST         | post           | store()    | post.store  | 获取表单提交数据并保存新文章 |
| GET          | post/{post}    | show()     | post.show   | 展示单个文章                 |
| GET          | post/{id}/edit | edit()     | post.edit   | 编辑文章表单页面             |
| PUT          | post/{id}      | update()   | post.update | 获取编辑表单输入并更新文章   |
| DELETE       | post/{id}      | destroy()  | post.desc   | 删除单个文章                 |

##### 绑定资源服务器

`Route::resource` 方法用于一次注册包含上面列出的所有路由，并且遵循上述所有约定：

```
Route::resource('post', PostController::class);
```



### 4.4 请求





### 4.5 响应





### 4.6 视图

在实际开发中，除了 API 路由返回指定格式数据对象外，大部分 Web 路由返回的都是视图，以便实现更加复杂的页面交互。

在 Laravel 中，支持三种格式的视图文件解析：CSS 文件，原生 PHP 和 Blade模板（Blade引擎底层逻辑：`ViewServiceProvider`）。

Laravel 在解析视图时是通过实时解析文件后缀名再调用相应的引擎进行处理的，视图文件位于 `resources/views` 目录下，对于多级子目录以「`.`」号分隔，并且引用时不带文件后缀名。



#### 视图返回与参数传递



在某个服务提供者如 `AppServiceProvider` 的 `boot` 方法中定义共享的视图变量：

```php
view()->share('siteName', 'Laravel学院');
view()->share('siteUrl', 'https://xueyuanjun.com');
```



```php
页面ID: {{ $id }}
<hr>
By <a href="{{ $siteUrl }}">{{ $siteName }}</a>
```



#### 在视图间共享变量





### 4.7 Blade模版

Blade 是 Laravel 提供的一个简单而又强大的模板引擎。 和其他流行的 PHP 模板引擎不同，Blade 并不限制你在视图中使用原生 PHP 代码。实际上，所有 Blade 视图文件都将被编译成原生的 PHP 代码并缓存起来，除非它被修改，否则不会重新编译，这就意味着 Blade 基本上不会给你的应用增加任何负担。Blade 模板文件使用 .`blade.php` 作为文件扩展名，被存放在 resources/views 目录。

```php
<h1>{{ $group->title }}</h1> 
{!! $group->imageHtml() !!} 
@forelse ($users as $user) 
    {{ $user->username }} {{ $user->nickname }}<br> 
@empty 
    该组中没有任何用户 
@endforelse
```

Blade 模板引擎有三种常见的语法：

- 通过 `{{ }}` 渲染 PHP 变量（最常用）
- 通过 `{!! !!}` 渲染原生 HTML 代码（用于富文本数据渲染）
- 通过以 `@` 作为前缀的 Blade 指令执行一些控制结构和继承、引入之类的操作



### 4.8 Vite编译Assets

Vite 是一款现代前端构建工具，提供极快的开发环境并将你的代码捆绑到生产准备的资源中。在使用 Laravel 构建应用程序时，通常会使用 Vite 将你的应用程序的 CSS 和 JavaScript 文件绑定到生产环境的资源中。





### 生成URL





### 会话



### 表单验证



### 错误处理



### 日志



## 5 继续深入

### Artisan 命令行





### 广播系统



### 缓存系统





### 集合



### 契约（Contract）

Laravel 的「契约（Contract）」是一组接口，它们定义由框架提供的核心服务。



### 事件系统



### 文件系统





### 辅助函数





### HTTP客户端





### 本地化



### 发送邮件





### 消息通知





### 扩展包开发

包是向 Laravel 添加功能的主要方式。包可能是处理日期的好方法，例如 [Carbon](https://github.com/briannesbitt/Carbon)，也可能是允许您将文件与 Eloquent 模型相关联的包，例如 Spatie 的 [Laravel 媒体库](https://github.com/spatie/laravel-medialibrary)。

包有不同类型。有些包是独立的，这意味着它们可以与任何 PHP 框架一起使用。 Carbon 和 PHPUnit 是独立包的示例。这种包可以通过 composer.json 文件引入，在 Laravel 中使用。

此外，还有一些包是专门用在 Laravel 中。这些包可能包含路由、控制器、视图和配置，专门用于增强 Laravel 应用。本教程主要涵盖的就是这些专用于 Laravel 的包的开发。





### 进程管理

Laravel 通过 Symfony Process 组件 提供了一个小而美的 API，让你可以方便地从 Laravel 应用程序中调用外部进程。 Laravel 的进程管理功能专注于提供最常见的用例和提升开发人员体验。



### 队列



### 请求限流





### 任务调度



## 6 安全相关

### 用户认证



### 用户授权



### Email认证



### 加密解密



### 哈希



### 重置密码





## 7 数据库

### 快速入门



### 查询构造器





### 分页



### 数据库迁移



### 数据填充



### Redis





## 8 Eloquent ORM

Laravel 包含的 Eloquent 模块，是一个对象关系映射 (ORM)，能使你更愉快地交互数据库。当你使用 Eloquent 时，数据库中每张表都有一个相对应的” 模型” 用于操作这张表。除了能从数据表中检索数据记录之外，Eloquent 模型同时也允许你新增，更新和删除这对应表中的数据



### 模型关联





### Eloquent集合





### 属性修改器







### API资源





### 序列化





### Eloquent数据工厂





## 9 测试

### 快速入门

Laravel 在构建时考虑到了测试。实际上，对 PHPUnit 测试的支持是开箱即用的，并且已经为你的应用程序设置了一个 phpunit.xml 文件。 Laravel 还附带了方便的帮助方法，允许你对应用程序进行富有表现力的测试。

默认情况下，你应用程序的 tests 目录下包含两个子目录：Feature 和 Unit。单元测试（Unit）是针对你的代码中非常少，而且相对独立的一部分代码来进行的测试。实际上，大部分单元测试都是针对单个方法进行的。在你的 Unit 测试目录中进行测试，不会启动你的 Laravel 应用程序，因此无法访问你的应用程序的数据库或其他框架服务。

功能测试（Feature）能测试你的大部分代码，包括多个对象如何相互交互，甚至是对 JSON 端点的完整 HTTP 请求。 通常，你的大多数测试应该是功能测试。这些类型的测试可以最大程度地确保你的系统作为一个整体按预期运行。

Feature 和 Unit 测试目录中都提供了一个 ExampleTest.php 文件。 安装新的 Laravel 应用程序后，执行 vendor/bin/phpunit 或 php artisan test 命令来运行你的测试。





### HTTP测试



### 命令行测试



### Dusk

[Laravel Dusk](https://github.com/laravel/dusk) 提供了一套富有表现力、易于使用的浏览器自动化和测试 API。默认情况下，Dusk 不需要在本地计算机上安装 JDK 或 Selenium。相反，Dusk 使用一个独立的 [ChromeDriver](https://sites.google.com/chromium.org/driver) 安装包。你可以自由地使用任何其他兼容 Selenium 的驱动程序。





### 数据库测试





### 测试模拟器 Mocking





## 10 官方扩展包

### 交易工具包 (Stripe)

Laravel Cashier Stripe 为 Stripe 的订阅计费服务提供了一个富有表现力、流畅的接口。它处理了几乎所有你害怕编写的订阅计费样板代码。除了基本的订阅管理，Cashier 还可以处理优惠券、交换订阅、订阅 「数量」、取消宽限期，甚至生成发票 PDF。



### 交易工具包 (Paddle)





### Envoy 部署工具



### Fortify 授权生成器



### Homestead 虚拟机





### Horizon 队列管理工具



### Jetstream



### Mix



### Octane（加速引擎）





### Passport OAuth 认证



### Pennant





### Pint



### Sail 开发环境



### Sanctum API 授权



### Scout 全文搜索



### Socialite 社会化登录



### Telescope 调试工具



### Valet Mac 集成环境





# Laravel入门到精通教程

https://laravelacademy.org/books/laravel-tutorial



## 请求处理篇

🔖 



## 命令行交互篇





## 数据库与 Eloquent 模型



## 用户认证与授权





## 请求响应底层剖析



## 测试驱动开发



```
composer create-project laravel/laravel myblog --prefer-dist 10.*
```





# Laravel入门项目：博客系列教程

参考：https://laravelacademy.org/books/laravel-blog-tutorial

代码：https://github.com/andyRon/arblog-laravel



```sh
composer require laravel/breeze --dev
php artisan breeze:install
```





🔖   sass   DataTables



## 后台文件上传

默认存放在 `storage/app/public` 目录下



## 在后台实现文章增删改查功能（支持Markdown）

🔖



# 项目：测试驱动API开发

https://laravelacademy.org/books/test-driven-apis-with-laravel

简单的薪资系统CRM

## 理论基础篇

### TDD 基本流程

> **测试驱动开发**（英语：Test-driven development，缩写为TDD）是一种软件开发过程中的应用方法，由[极限编程](https://zh.m.wikipedia.org/wiki/极限编程)中倡导，以其倡导先写测试程序，然后编码实现其功能得名。测试驱动开发始于20世纪90年代。测试驱动开发的目的是取得**快速反馈**并使用“illustrate the main line”方法来构建程序。
>
> 测试驱动开发是戴两顶帽子思考的开发方式：先戴上**实现功能**的帽子，在测试的辅助下，快速实现其功能；再戴上**[重构](https://zh.m.wikipedia.org/wiki/软件重构)**的帽子，在测试的保护下，通过去除冗余的代码，提高代码品质。测试驱动着整个开发过程：首先，驱动代码的设计和功能的实现；其后，驱动代码的再设计和重构。

因此，在标准的测试驱动开发流程中，第一步是编写测试代码指定你想如何使用你的类/函数（它们尚不存在），在这之后，才开始编写写实际的代码，待测试通过后，我们可以在测试的保护下，对代码不断进行优化、重构、迭代。

#### The red

在类/函数尚不存在，或者存在问题时，编写测试用例运行结果一定是红色的（表示不通过），测试驱动开发的过程就是不断把红色消除，让运行结果呈现绿色的（表示通过）过程。

假设我们要实现一个计算器的除法方法，可以先编写单元测试用例代码如下：

```php
$calculator = new Calculator();
// I expept to be 5.00
$result = $calculator->divide(10, 2);
// I expect to be 3.33
$result = $calculator->divide(10, 3);
// I expect to be 0.00 instead of an Exception
$result = $calculator->divide(10, 0);
```

> 测试用例应该尽可能全的覆盖所有使用场景，尤其是边界情况。

然后可以对不同的使用场景进行断言：

```php
$calculator = new Calculator();
$result = $calculator->divide(10, 2);
$this->assertEquals(5.00, $result);
$result = $calculator->divide(10, 3);
$this->assertEquals(3.33, $result);
$result = $calculator->divide(10, 0);
$this->assertEquals(0.00, $result);
```

为了可读性和可维护性，可以按照场景分离测试用例到不同方法。

PHPUnit 默认将所有 `test` 前缀方法视作测试用例，除了方法名前缀外，还可以这样通过注解（`@test`）表明该方法是测试方法。

```php
	/** @test */
    public function it_should_return_zero_when_the_divider_is_zero()
    {
        $calculator = new Calculator();

        $this->assertEquals(0.00, $calculator->divide(10, 0));
    }
```

通过方法名可以直观感知这个方法是测试什么功能什么场景的。

> 好的测试应该读起来像类/方法的文档一样。

此时，`Calculator` 类还不存在，所以测试结果是红色的（测试不通过）：

![](images/image-20240429161527140.png)

#### The green

要让测试用例的运行结果变绿（测试通过），需要编写 `Calculator` 类及对应的 `divide` 方法。

```php
namespace App\Math;

class Calculator
{
    public function divide(float $n1, float $n2): float
    {
        if ($n2 == 0) {
            return 0;
        }
        return round($n1 / $n2, 2);
    }
}
```

### The refactor

测试用例全部通过，表明计算器的除法功能是可以正常工作的，接下来，我们还可以在测试用例的保护下，进一步优化代码：

```php
namespace App\Math;

use DivisionByZeroError;

class Calculator 
{
    public function divide(float $n1, float $n2): float
    {
        try {
            return round($n1 / $n2, 2);
        } catch (DivisionByZeroError) {
            return 0;
        }
    }
}
```

运行测试用例仍然是绿色的。



完成了一个最小的 TDD 闭环。

TDD 虽然一开始要编写额外的测试用例，看起来多花了点时间，但是对于后续代码测试、验收、迭代、维护来说，是利大于弊的，是代码质量的重要保障（想想没有测试用例的情况下，后续代码功能越堆越多，每次回归测试的痛苦吧，而且很容易因为漏掉某个测试场景导致代码上线后出问题），而如果你从功能设计角度来写测试用例的话，真的是磨刀不误砍柴工，这绝对是一个正向循环，不会让代码陷入难以测试、难以维护、难以保障质量的泥潭：

![](images/image-20221120003420441.png)

TDD总结：

- 当你为一个不存在的类/方法编写测试用例时，你就是在为这个类/方法设计使用规范（是测试，也是设计）
- 测试用例应该读起来像文档/规范说明一样（可读性要好）
- 在 red-green-refator 正向循环中，同一时间只带一顶帽子：
  - Red：指定接口应该怎么调用，以及预期行为是什么（使用指南）
  - Green: 编写可以正常工作的代码（let it done）
  - Refactor: 这个时候，可以引入设计模式、创建工厂方法、删除重复代码在测试保护下对代码进行优化重构（let it better）







# Laravel内核分析

https://learnku.com/docs/laravel-kernel

https://learnku.com/docs/laravel-core-concept/5.5

https://learnku.com/articles/52852
