<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Log;

class ExampleJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $startDateTime = date("H:i:s");
        sleep(30);
        Log::info("測試docker的queue".$startDateTime."=".date("H:i:s"));
    }
}
