<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\SerieController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SerieSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'serie:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $serirController =  new SerieController();
        $serirController->update();
        Log::debug('Serie Update Success per min');
    }
}
