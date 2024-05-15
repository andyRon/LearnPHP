# WordPress教程

https://www.w3cschool.cn/wordpress/

## 入门

WordPress是一个开源的内容管理系统（CMS），允许用户构建动态网站和博客。 WordPress是网络上最流行的博客系统，允许从其后端CMS和组件更新，自定义和管理网站。

内容管理系统（CMS）是一种存储所有数据（如文本，照片，音乐，文档等）并在您的网站上提供的软件。 它有助于编辑，发布和修改网站的内容。

WordPress最初是由Matt Mullenweg和Mike Little于2003年5月27日发布的。 WordPress在2009年10月被宣布为开源。



### 特征

- 用户管理 - 它允许管理用户信息，例如将用户的角色更改为（订阅者，贡献者，作者，编辑者或管理员），创建或删除用户，更改密码和用户信息。 用户管理器的主要作用是验证。
- 媒体管理 - 它是用于管理媒体文件和文件夹的工具，您可以在其中轻松地上传，组织和管理您网站上的媒体文件。
- 主题系统 - 它允许修改网站视图和功能。 它包括图像，样式表，模板文件和自定义页面。
- 使用插件扩展 - 提供了几个可根据用户需要提供自定义功能和功能的插件。
- 搜索引擎优化 - 它提供了几个搜索引擎优化（SEO）工具，使现场的SEO简单。
- 多语言 - 它可以将整个内容翻译成用户首选的语言。
- 进口商 - 允许以帖子的形式导入数据。 它导入自定义文件，注释，帖子页和标签。

### 优点

- 它是一个开源平台，可免费使用。
- CSS文件可以根据设计根据用户需要进行修改。
- 有许多免费的插件和模板。 用户可以根据自己的需要自定义各种插件。
- 它很容易编辑内容，因为它使用所见即所得的编辑器（你看到的是什么是一个用户界面，允许用户直接操纵文档的布局，而无需布局命令）。
- 媒体文件可以方便快捷地上传。
- 它提供了几个SEO工具，使现场的SEO简单。
- 根据用户的需要，定制很容易。
- 它允许为网站的用户创建不同的角色，如管理员，作者，编辑者和贡献者。

### 缺点

- 使用几个插件可以使网站加载和运行。
- PHP知识是需要在WordPress网站进行修改或更改。
- 有时软件需要更新，以保持WordPress的最新与当前的浏览器和移动设备。 更新WordPress版本导致数据丢失，因此需要网站的备份副本。
- 修改和格式化图形图像和表格很困难。



## wordpress基础

https://wordpress.org/download/



# 更多

## 资源

[WordPress大学](https://www.wpdaxue.com/)

[WordPress主题开发教程，开发手册](https://www.wpzhiku.com/handbook/theme/)

[WordPress插件开发教程](https://www.wpzhiku.com/handbook/plugin/)

WordPress 的 Hook





## 源码架构

### 1 index.php

在 index.php 中 引入了文件 wp-blog-header.php 。

### 2 wp-blog-header.php

wp-blog-header.php包含wordpress加载的三个阶段

```php
// wp-blog-header.php
if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';
}
```

#### 1️⃣ 资源加载阶段：

```php
require_once __DIR__ . '/wp-load.php';
```

wp-load.php 引入wp-config.php, wp-config.php 引入 wp-settings.php，核心的加载逻辑在 wp-settings.php中。

资源加载阶段，主要是加载所有依赖的PHP库和文件，包括各种**核心类，functions，插件** 等等。

需要注意的一点是，在wordpress 未安装成功时，是没有wp-config.php这个文件的。

#### 2️⃣数据准备阶段：

```php
// Set up the WordPress query.
wp();
```

wp函数的定义是在functions.php中；最终会调用到 class-wp.php 中的 main() 方法。

main() 方法主要做三件事情：

1. parse_request(): 解析请求的参数
2. query_posts(): 通过请求的参数查询文章
3. register_globals(): 注册全局数据，以便渲染阶段可以获取数据

重点关注第2和第3这两个事情

##### 查询文章

query_posts() 会调用 class-wp-query.php 中的 query() 方法，query() 方法做两件事情：

1. init(): 重置所有数据
2. get_posts(): 查询文章

`get_posts()`❤️ 方法会调用当前类的 parse_query() 方法，此方法接近1000行，是整个wordpress中最核心的逻辑。

parse_query() 逻辑复杂，我们只关注两件事情：

1. 解析请求的数据(get/post)，构造读取/写入的数据和条件，包括

2. - 日期数据
   - 文章标题
   - 附件
   - 。。。。其他条件

3. 根据url请求参数判断当前请求是哪个页面，例如设置is_home = true，就表示为首页，is_page = true 表示是文章页面；**设置当前页面，在数据渲染阶段会用到。**

parse_query() 方法查询到的文章，会放到当前类的posts属性和post属性中。如果我们需要debug，可以在此方法的尾部dump查询的sql

```php
var_dump($where . $groupby . $orderby . $limits . $join);
```

get_posts()执行完毕后，我们也就获取到了想要的文章(根据url参数查询出来的)，然后进入注册全局数据阶段，即 register_globals();

##### 注册全局数据

register_globals() 方法的代码相对简单，如下：

```php
public function register_globals() {
		global $wp_query;

		// Extract updated query vars back into global namespace.
		foreach ( (array) $wp_query->query_vars as $key => $value ) {
			$GLOBALS[ $key ] = $value;
		}

		$GLOBALS['query_string'] = $this->query_string;
		$GLOBALS['posts']        = & $wp_query->posts;
		$GLOBALS['post']         = isset( $wp_query->post ) ? $wp_query->post : null;
		$GLOBALS['request']      = $wp_query->request;

		if ( $wp_query->is_single() || $wp_query->is_page() ) {
			$GLOBALS['more']   = 1;
			$GLOBALS['single'] = 1;
		}

		if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
			$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
		}
	}
```

其中主要的为：

```php
$GLOBALS['posts'] = & $wp_query->posts;
$GLOBALS['post']  = isset( $wp_query->post ) ? $wp_query->post : null;
```

这两行代码将上一步查询到的文章和文章的列表，放入了$GLOBALS中，在渲染阶段，会从 $GLOBALS 读取文章内容。



#### 3️⃣渲染阶段:

```php
// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';
```

入口为 template-loader.php 文件，会先判断当前请求的是哪个页面，在数据准备阶段中的 parse_query() 已经计算出来了。核心代码如下:

```php
$tag_templates = array(
		'is_embed'             => 'get_embed_template',
		'is_404'               => 'get_404_template',
		'is_search'            => 'get_search_template',
		'is_front_page'        => 'get_front_page_template',
		'is_home'              => 'get_home_template',
		'is_privacy_policy'    => 'get_privacy_policy_template',
		'is_post_type_archive' => 'get_post_type_archive_template',
		'is_tax'               => 'get_taxonomy_template',
		'is_attachment'        => 'get_attachment_template',
		'is_single'            => 'get_single_template',
		'is_page'              => 'get_page_template',
		'is_singular'          => 'get_singular_template',
		'is_category'          => 'get_category_template',
		'is_tag'               => 'get_tag_template',
		'is_author'            => 'get_author_template',
		'is_date'              => 'get_date_template',
		'is_archive'           => 'get_archive_template',
	);
	$template      = false;

	// Loop through each of the template conditionals, and find the appropriate template file.
	foreach ( $tag_templates as $tag => $template_getter ) {
		if ( call_user_func( $tag ) ) {
			$template = call_user_func( $template_getter );
		}

		if ( $template ) {
			if ( 'is_attachment' === $tag ) {
				remove_filter( 'the_content', 'prepend_attachment' );
			}

			break;
		}
	}

	if ( ! $template ) {
		$template = get_index_template();
	}
```

$tag_templates 数组中的 key, 其实是一个回调函数，全部定义在 wp-includes/query.php中，实际调用的方法是 class-wp-query.php 中对应的方法名。

在计算出当前页面后，就根据当前配置的主题，去加载主题下的模板文件。



在模板文件中，我们就可以获取到之前准备好的数据($GLOBALS中的数据)。以文章内容为例，

在模板中，调用the_content()方法，the_content()方法定义在post-template.php中，the_content() 再调用 get_the_content()， get_the_content() 调用 post.php 中的 get_post()， get_post()定义如下:

```php
function get_post( $post = null, $output = OBJECT, $filter = 'raw' ) {
	if ( empty( $post ) && isset( $GLOBALS['post'] ) ) {
		$post = $GLOBALS['post'];
	}

	if ( $post instanceof WP_Post ) {
		$_post = $post;
	} 
  // 其他代码 .....
	return $_post;
}
```

方法的第一行就用 $GLOBALS 中取到了之前准备好的文章数据。

拿到文章数据后，get_the_content() 方法会对文章数据进行组装，返回给 the_content() , 由the_content() 方法进行输出。



## 主题

### 主题和插件有什么区别？

主题功能既可以出现在主题中，也可以出现在插件中，但是，最佳实践为：

- 主题控制网站外观
- 插件控制网站的行为和功能

**我们创建的任何主题都不应添加关键功能。** 这样做意味着当用户更换主题时，他们将无法使用该功能。例如，用户的站点中需要一个作品集功能，如果我们在主题中包含了此功能，使用你的主题创建了作品集的站点在更换主题时，这些作品集的内容将无法访问。

通过将关键功能转移到插件中，我们可以在更换主题的的同时保持网站内容不变。

### WordPress 有三大组件：

- 核心：包括 WordPress 根目录下的文件，wp-admin/ 和 wp-includes/ 目录下的所有文件。
- 主题：一般放在 wp-content/theme 目录下，负责控制 WordPress 站点的外观表现。
- 插件：一般放在 wp-content/plugins 目录下，用来增强或改变 WordPress的功能。



## WordPress数据库

| 表名                  | 描述                                                         |
| :-------------------- | :----------------------------------------------------------- |
| wp_users              | 您的 WordPress 网站上的**用户**列表 。所有 WordPress 用户角色的用户都存储在这里（管理员、编辑、作者、贡献者、订阅者等）。存储在此表中的其他用户信息包括用户名、名字、姓氏、昵称、密码、电子邮件、注册日期、状态和角色。 |
| wp_usermeta           | 每个 **用户** 的特征信息称为 **元数据**。此处存储的元数据包括唯一的用户 ID、元键、元值和元 ID。这些都是您网站上用户的唯一标识符。 |
| wp_term_taxonomy      | WordPress 使用三种类型的分类法，包括**类别、** **链接**或**标签**。此表存储术语的分类关联。 |
| wp_term_relationships | 此表存储帖子、类别和标签之间的**关系。** 与各自类别的**链接**的关联 也保存在此表中。 |
| wp_termmeta           | 每个 **术语** 的特征信息称为 **元数据** ，它存储在 wp_termmeta 中。 |
| wp_terms              | 帖子和链接的 **类别** 以及帖子的 **标签** 都可以在 wp_terms 表中找到。 |
| wp_posts              | WordPress 数据的核心是 **帖子**。此表存储您发布的任何帖子或页面的内容，包括自动保存修订和帖子选项设置。此外，**页面** 和**导航菜单项**存储在此表中。 |
| wp_postmeta           | 每个 **帖子**都 包含称为 **元数据**的信息 ，它存储在 wp_postmeta 中。一些插件可能会将自己的信息添加到此表中。 |
| wp_options            | 从 WordPress 管理仪表板的设置页面设置的所有**设置都存储在这里。**这包括所有主题和插件选项。 |
| wp_links              | wp_links 保存与 输入到 WordPress 的链接功能中的 **链接相关的信息。***（此功能现已弃用，但可以使用 Links Manager 插件重新启用。）* |
| wp_comments           | 发布到您网站的所有评论以及有关评论作者的其他信息（姓名、URL、IP 地址、电子邮件地址等）都存储在此处 |
| wp_commentmeta        | 每个 **评论**都 包含称为 **元数据**的信息 ，它存储在 wp_commentmeta 中，包括评论 ID 号。 |

表面

- wp_commentmeta：存储评论的元数据
- wp_comments：存储评论
- wp_links：存储友情链接
- wp_options：存储WordPress系统选项和插件、主题配置
- wp_postmeta：存储文章（包括页面、上传文件、修订）的元数据
- wp_posts：存储文章（包括页面、上传文件、修订）
- wp_terms：存储每个目录、标签
- wp_termmeta：存储每个目录、标签的ID,key,value
- wp_term_relationships：存储每个文章、链接和对应分类的关系
- wp_term_taxonomy：存储每个目录、标签所对应的分类
- wp_usermeta：存储用户的元数据
- wp_users：存储用户



具体字段

wp_categories: 用于保存分类相关信息的表。包括了5个字段，分别是:

- cat_ID – 每个分类唯一的ID号，为一个bigint(20)值，且带有附加属性auto_increment。
- cat_name – 某个分类的名称，为一个varchar(55)值。
- category_nicename – 指定给分类的一个便于记住的名字，也就是所谓的slug，这是一个varchar(200)值。
- category_description – 某个分类的详细说明，longtext型值。
- category_parent – 分类的上级分类，为一个int(4)值，对应是的当前表中的cat_ID，即wp_categories.cat_ID。无上级分类时，这个值为0。

wp_comments: 用于保存评论信息的表。包括了15个字段，分别为:

- comment_ID – 每个评论的唯一ID号，是一个bigint(20)值。带有附加属性auto_increment。
- comment_post_ID – 每个评论对应的文章的ID号，int(11)值，等同于wp_posts.ID。
- comment_author – 每个评论的评论者名称，tinytext值。
- comment_author_email – 每个评论的评论者电邮地址，varchar(100)值。
- comment_author_url – 每个评论的评论者网址，varchar(200)值。
- comment_author_IP – 每个评论的评论者的IP地址，varchar(100)值。
- comment_date – 每个评论发表的时间，datetime值(是加上时区偏移量后的值)。
- comment_date_gmt – 每个评论发表的时间，datetime值(是标准的格林尼治时间)。
- comment_content – 每个评论的具体内容，text值。
- comment_karma – 不详，int(11)值，默认为0。
- comment_approved – 每个评论的当前状态，为一个枚举值enum(’0′,’1′,’spam’)，0为等待审核，1为允许发布，spam为垃圾评论。默认值为1。
- comment_agent – 每个评论的评论者的客户端信息，varchar(255)值，主要包括其浏览器和操作系统的类型、版本等资料。
- comment_type – 不详，varchar(20)值。
- comment_parent – 某一评论的上级评论，int(11)值，对应wp_comment.ID，默认为0，即无上级评论。
- user_id – 某一评论对应的用户ID，只有当用户注册后才会生成，int(11)值，对应wp_users.ID。未注册的用户，即外部评论者，这个ID的值为0。



wp_linkcategories: 用于保存在WP后台中添加的链接的相关信息的表。包括13个字段:

- cat_id – 每个链接分类的唯一ID，bigint(20)值，为一个自增量auto_increment。
- cat_name – 每个链接分类的名字，tinytext值。
- auto_toggle -这个字段所包含的是一个比较特别的属性。如果为Y，则当该分类中加入了新链接时，其它的链接会变为不可见。它是一个枚举型的值enum(’Y’,’N’)，默认为N。
- show_images – 该字段也是枚举值enum(’Y’,’N’)，默认为Y。用户指定是否允许在该链接分类显示图片链接。
- show_description – 该字段指定相应的链接分类下的链接，是否再专门[换行]显示它们的说明，这是一个枚举型值enum(’Y’,’N’)，默认为N，即不显示说明(但会通过title属性中显示说明)。
- show_rating – 显示该分类下链接的等级。它也是一个枚举值enum(’Y’,’N’)，默认为Y。此时，你可以用链接等级的方式来对该链接分类下的链接进行排序。
- show_updated – 指定该链接分类有更新是，是否进行显示，枚举值enum(’Y’,’N’)，默认为Y。
- sort_order – 指定该链接分类中链接的排序依据，varchar(64)值。一般用链接的名字(name，即wp_links.link_name)或ID(id，即wp_links.link_id)。
- sort_desc – 指定链接分类的排序方式，枚举值enum(’Y’,’N’)，默认为N，即用降序。
- text_before_link – 该链接分类下每个链接的前置html文本，varchar(128)值，默认是’列表开始标签’。
- text_after_link – 该链接分类下每个链接的中，链接与说明文字(wp_links.link_description)之间的html文本，varchar(128)值，默认是’换行标签’。
- text_after_all – 该链接分类下每个链接的后置html文本，varchar(128)值，默认是’列表结束标签’。
- list_limit – 用于规定某一链接分类中显示的(可设定的?)链接的个数，int(11)值，默认为-1，即对链接分类下链接的个数无限制。
  wp_links :用于保存用户输入到Wordpress中的链接(通过Link Manager)的表。共14个字段:
- link_id – 每个链接的唯一ID号，bigint(20)值，附加属性为auto_increment。
- link_url – 每个链接的URL地址，varchar(255)值，形式为http://开头的地址。
- link_name – 单个链接的名字，varchar(255)值。
- link_image – 链接可以被定义为使用图片链接，这个字段用于保存该图片的地址，为varchar(255)值。
- link_target – 链接打开的方式，有三种，_blank为以新窗口打开，_top为就在本窗口中打开并在最上一级，none为不选择，会在本窗口中打开。这个字段是varchar(25)值。
- link_category – 某个链接对应的链接分类，为int(11)值。相当于wp_linkcategories.cat_id。
- link_description – 链接的说明文字。用户可以选择显示在链接下方还是显示在title属性中。varchar(255)值。
- link_visible – 该链接是否可以，枚举enum(’Y’,’N’)值，默认为Y，即可见。
- link_owner – 某个链接的创建人，为一int(11)值，默认是1。(应该对应的就是wp_users.ID)
- link_rating – 链接的等级，int(11)值。默认为0。
- link_updated – 链接被定义、修改的时间，datetime值。
- link_rel – 链接与定义者的关系，由XFN Creator设置，varchar(255)值。
- vlink_notes – 链接的详细说明，mediumtext值。
- link_rss – 该链接的RSS地址，varchar(255)值。
  wp_options: 用于保存Wordpress相关设置、参数的表，共11个字段。最重要是的option_value字段，里面包括了大量的重要信息。
- option_id – 选项的ID，bigint(20)值，附加auto_increment属性。
- blog_id – 不详。或许用在单在用户的WP版本上并不重要吧，或许是针对不同用户的Blog来设置的一个值。int(11)值，默认为0，即当前blog。
- option_name – 选项名称，varchar(64)值。
- option_can_override – 该选项是否可被重写、更新，枚举enum(’Y’,’N’)值，默认为Y，即可被重写、更新。
- option_type – 选项的类型，作用不详，int(11)值，默认为1。
- option_value – 选项的值，longtext值，这个字段的内容比较重要。Wordpress初始化时就会设定好约70个默认的值，这里暂不介绍。
- option_width – 选项的宽(?)，作用不详。int(11)值，默认为20。
- option_height – 选项的高(?)，作用不详。int(11)值，默认为8。
- option_description – 针对某个选项的说明，tinytext值。
- option_admin_level – 设定某个选项可被操纵的用户等级(详情见我的相关文章)，int(11)值，默认为1。
- autoload – 选项是否每次都被自动加载，枚举enum(’yes’,’no’)值，默认为yes。
  wp_postmeta: 用于保存文章的元信息(meta)的表，四个字段:
- meta_id – 元信息ID，bigint(20)值，附加属性为auto_increment。
- post_id – 文章ID，bigint(20)值，相当于wp_posts.ID。
- meta_key – 元信息的关键字，varchar(255)值。
- meta_value – 元信息的值，text值。这些内容主要是在文章及页面编辑页(Write Post, Write Page)的”Add a new custom field to this post(page):”下进行设定的。meta_key就对应名为”key”的下拉列表中的项，而值由用户自己填上(某些时候，wp也会自动加入，如文章中有的音频媒体)。
  wp_posts: 用于保存你所有的文章(posts)的相关信息的表，非常的重要。一般来讲，它存储的数据是最多的。一共包括了21个字段。
- ID – 每篇文章的唯一ID，bigint(20)值，附加属性auto_increment。
- post_author – 每篇文章的作者的编号，int(4)值，应该对应的是wp_users.ID。
- post_date – 每篇文章发表的时间，datetime值。它是GMT时间加上时区偏移量的结果。
- post_date_gmt – 每篇文章发表时的GMT(格林威治)时间，datetime值。
- post_content – 每篇文章的具体内容，longtext值。你在后台文章编辑页面中写入的所有内容都放在这里。
- post_title – 文章的标题，text值。
- post_category – 文章所属分类，int(4)值。
- post_excerpt – 文章摘要，text值。
- post_status – 文章当前的状态，枚举enum(’publish’,’draft’,’private’,’static’,’object’)值，publish为已发表，draft为草稿，private为私人内容(不会被公开) ，static(不详)，object(不详)。默认为publish。
- comment_status – 评论设置的状态，也是枚举enum(’open’,’closed’,’registered_only’)值，open为允许评论，closed为不允许评论，registered_only为只有注册用户方可评论。默认为open，即人人都可以评论。
- ping_status – ping状态，枚举enum(’open’,’closed’)值，open指打开pingback功能，closed为关闭。默认值是open。
- post_password – 文章密码，varchar(20)值。文章编辑才可为文章设定一个密码，凭这个密码才能对文章进行重新强加或修改。
- post_name – 文章名，varchar(200)值。这通常是用在生成permalink时，标识某篇文章的一段文本或数字，也即post slug。
- to_ping – 强制该文章去ping某个URI。text值。
- pinged – 该文章被pingback的历史记录，text值，为一个个的URI。
- post_modified – 文章最后修改的时间，datetime值，它是GMT时间加上时区偏移量的结果。
- post_modified_gmt – 文章最后修改的GMT时间，datetime值。
- post_content_filtered – 不详，text值。
- post_parent – 文章的上级文章的ID，int(11)值，对应的是wp_posts.ID。默认为0，即没有上级文章。
- guid – 这是每篇文章的一个地址，varchar(255)值。默认是这样的形式: http://your.blog.site/?p=1，如果你形成permalink功能，则通常会是: 你的Wordpress站点地址+文章名。
- menu_order – 不详，int(11)值，默认为0。
- post_type – 文章类型，具体不详，varchar(100)值。默认为0。
- post_mime_type – 不详。varchar(100)值。
- comment_count – 评论计数，具体用途不详，bigint(20)值。
  wp_usermeta : 用于保存用户元信息(meta)的表，共4个字段:
- umeta_id – 元信息ID，bigint(20)值，附加属性auto_increment。
- user_id – 元信息对应的用户ID，bigint(20)值，相当于wp_users.ID。
- meta_key – 元信息关键字，varchar(255)值。
- meta_value – 元信息的详细值，longtext值。
  wp_users:用于保存Wordpress使用者的相关信息的表。
- ID – 用户唯一ID,bigint(20)值，带附加属性auto_increment。
- user_login – 用户的注册名称，varchar(60)值。
- user_pass – 用户密码，varchar(64)值，这是经过加密的结果。好象用的是不可逆的MD5算法。
- user_nicename – 用户昵称，varchar(50)值。
- user_email – 用户电邮地址，varchar(100)值。
- user_url – 用户网址，varchar(100)值。
- user_registered – 用户注册时间，datetime值。
- user_level – 用于等级，int(2)值，可以是0-10之间的数字，不同等级有不同的对WP的操作权限。
- user_activation_key – 用户激活码，不详。varchar(60)值。
- user_status – 用户状态，int(11)值，默认为0。
- display_name – 来前台显示出来的用户名字，varchar(250)值。