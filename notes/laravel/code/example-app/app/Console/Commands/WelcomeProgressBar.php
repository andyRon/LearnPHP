<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeProgressBar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'welcome:progress_bar';

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
        $totalUnits = 10;
        $this->output->progressStart($totalUnits);

        $i = 0;
        while ($i++ < $totalUnits) {
            sleep(3);
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }
}
