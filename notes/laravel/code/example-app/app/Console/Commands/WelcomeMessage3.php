<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeMessage3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'welcome:message3';

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
        $headers = ['姓名', '城市'];
        $data = [
            ['张三', '北京'],
            ['李四', '上海']
        ];
        $this->table($headers, $data);
    }
}
