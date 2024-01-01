<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

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
        //
        //$pass = Hash::make("password");
        $pass = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        //$pass = '$2y$10$6ZIcjduXGyUgITl.d54mceWe.OP2KF.3j4i2BqUXIoX..KXgdqAoi';
        //sleep(10);
        if(Hash::check("password", $pass)){
            $this->info("ok");
        }else{
            $this->info("ng");
        }
        $this->info($pass);
    }
}
