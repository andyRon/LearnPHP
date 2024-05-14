// 通过 Laravel Mix 来编译打包这些预处理 js 文件

const mix = require('laravel-mix')

// 编译前台资源
// 引入 Laravel Mix，将 resources/js/app.js 进行编译打包，然后将处理后的 app.js 文件分发到 public/js 目录下
// scss同样
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/contact.js', 'public/js/contact.js')
    .sass('resources/sass/app.scss', 'public/css')

// 将 fontawesome 的样式文件 all.css 拷贝到 public/css/fontawesome.css 以便在 HTML 中引入渲染图标。
mix.copy('node_modules/fontawesome-free/css/all.css', 'public/css/fontawesome.css')


// 编译后台资源
mix.js('resources/js/admin.js', 'public/js/admin.js')
    .js('resources/js/chart.js', 'public/js/chart.js')
    .js('resources/js/table.js', 'public/js/table.js')
    .sass('resources/sass/admin.scss', 'public/css/admin.css')
    .copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css', 'public/css/table.css');

// mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css', 'public/css/table.css');