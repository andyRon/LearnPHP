<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeMessage2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'welcome:message2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('你叫什么名字');
        $city = $this->choice('你来自哪个城市', [
            '北京', '上海', '泰州'
        ], 0);
        $passwd = $this->secret('输入密码才能执行此命令');
        if ($passwd != '123') {
            $this->error('密码错误');
            exit(-1);
        }
        if ($this->confirm('确定要执行此命令吗？')) {
            $this->info('欢迎来自' . $city . '的' . $name . '访问xxxx学校');
        } else {
            exit(0);
        }
    }
}
