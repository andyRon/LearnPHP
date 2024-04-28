<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->share('siteName', 'Laravel学院');
        view()->share('siteUrl', 'https://xueyuanjun.com');


        // TODO  自定义 Blade 指令 怎么使用
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('Y/m/d H:i:s'); ?>";
        });

        Blade::directive('uppercase', function ($expression) {
            return "<?php echo strtoupper({$expression}); ?>";
        });
        Blade::directive('datetime2', function ($expression) {
            [$date, $format] = explode(',', $expression);
            $date = trim($date);
            $format = trim($format, "' \t\n\r\0\x0B\v");

            return "<?php echo \Carbon\Carbon::parse({$date})->format({$format}); ?>";
        });

    }

}
