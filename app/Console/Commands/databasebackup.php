<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class databasebackup extends Command
{
    protected $signature = 'database:backup';

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
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";


        $command = "mysqldump --user=" . env('DB_USERNAME') ." --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . " > " . storage_path() . "/app/backup/" . $filename;
  

        $returnVar = NULL;

        $output  = NULL;

  

        exec($command, $output, $returnVar);
    }
}
