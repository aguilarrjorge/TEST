<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class fakePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send request Post';

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
        $response = $client->post("https://atomic .incfile.com/fakepost", [
                    'body' =>[
                        'name' => 'Jorge',
                        'email' => 'jorge.aguilar19@outlook.com'
                    ] 
                ]);
    }
}
