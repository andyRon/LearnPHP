const mix = require('laravel-mix')

// TODO
// 引入 Laravel Mix，然后通过它提供的 js 方法将 resources/js/app.js 进行编译打包，然后将处理后的 app.js 文件分发到 public/js 目录下
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css/fontawesome.css')